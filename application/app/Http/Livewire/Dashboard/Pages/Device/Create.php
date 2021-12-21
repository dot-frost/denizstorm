<?php

namespace App\Http\Livewire\Dashboard\Pages\Device;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public Device $device;
    public Collection $categories;

    public $image;


    public function mount(){
        $this->categories = Category::orderBy('created_at')->get();
        $this->device = new Device();
    }

    public function rules(){
        return [
            'device.name' => ['required'],
            'device.slug' => ['required','unique:devices,slug'],
            'device.category_id' => ['required','exists:categories,id'],
            'device.body' => ['required'],
            'device.description' => ['required'],
            'device.price' => ['required'],
            'image' => ['required_without:device.image','image']
        ];
    }
    public function validationAttributes()
    {
        return [
            'device.slug' => 'اسلاگ',
            'device.category_id' => 'دسته',
            'device.body' => 'توضیحات',
            'device.description' => 'توضیحات کوتاه',
            'device.price' => 'قیمت'
        ];
    }

    public function create(){
        dd($this->image);
        $this->validate(null,['image.required_without' => 'عکس الزامی است.']);
        $this->device->attributes = [];
        $this->device->uploadImage($this->image);
        $this->device->save();
        $this->redirectRoute('admin.devices.index');
    }

    public function render()
    {
        return view('dashboard.pages.device.create')
            ->layoutData([
                'title' => 'ایجاد دستگاه'
            ]);
    }
}
