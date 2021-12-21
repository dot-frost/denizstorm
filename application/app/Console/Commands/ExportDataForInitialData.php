<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Device;
use App\Models\Setting;
use Illuminate\Console\Command;
use function Illuminate\Support\Facades\Storage;

class ExportDataForInitialData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected \Illuminate\Filesystem\FilesystemAdapter $initialDisk;

    public function __construct()
    {
        parent::__construct();
        $this->initialDisk = \Storage::disk('initial-data');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->categories();
        $this->devices();
        $this->settings();
        return Command::SUCCESS;
    }

    protected function categories(){
        $categories = Category::get(['name', 'slug']);
        $this->saveData('categories.json',$categories->toJson(JSON_PRETTY_PRINT));
    }

    protected function devices(){
        $devices = Device::with(['category','supports'])->get();

        if (!$this->initialDisk->exists('Devices')){
            $this->initialDisk->makeDirectory('Devices');
        }

        $supports = collect();

        $devices = $devices->map(function (Device $device) use(&$supports){
            if($device->supports->isNotEmpty()){
                $supports->put($device->slug, $device->supports->pluck('slug')->toArray());
            }

            $imageExtension = \File::extension($device->image);
            $imagePath = \Storage::disk('public')->path($device->image);
            $newImageName = "$device->slug.$imageExtension";

            \File::copy($imagePath,$this->initialDisk->path("Devices/$newImageName"));

            return collect($device->only([
                'name',
                'slug',
                'price',
                'description',
                'body',
                'attributes',
            ]))
                ->put('image' , "Devices/$newImageName")
                ->put('category', $device->category->slug)
                ->toArray();
        });


        $this->saveData('devices.json',$devices->toJson(JSON_PRETTY_PRINT));
        $this->saveData('devices_supports.json',$supports->toJson(JSON_PRETTY_PRINT));
    }

    protected function settings(){
        $settings = Setting::get(['name' , 'value']);
        $this->saveData('settings.json',$settings->toJson(JSON_PRETTY_PRINT));
    }

    protected function saveData($filename, $data){
        $this->initialDisk->put($filename,$data);
    }
}
