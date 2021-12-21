<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class DeviceSeeder extends Seeder
{
    public function run()
    {
        $disk = \Storage::disk('initial-data');

        $devicesData = collect(json_decode($disk->get('devices.json')));
        $supportsData = collect(json_decode($disk->get('devices_supports.json')));

        $devices = $devicesData->map(function($deviceData)use($disk){
            $deviceData = collect($deviceData);
            $device = new Device($deviceData->except(['category','image'])->toArray());
            $imagePath = $disk->path($deviceData['image']);
            $device->uploadImage(new UploadedFile($imagePath, $imagePath));
            $device->category_id = Category::whereSlug($deviceData['category'])->first('id')->id;
            $device->save();
            return $device;
        });

        $devices->each(function(Device $device) use ($supportsData, $devices){
            if ($supportsData->has($device->slug)){
                $supported = $supportsData[$device->slug];
                $supportedIds = $devices->whereIn('slug',$supported)->pluck('id');
                $device->supports()->sync($supportedIds,false);
            }
        });
    }
}
