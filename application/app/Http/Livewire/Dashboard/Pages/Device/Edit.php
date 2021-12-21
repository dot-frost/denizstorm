<?php

namespace App\Http\Livewire\Dashboard\Pages\Device;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public Device $device;
    public Collection $categories;
    public function mount(Device $device){
        $this->categories = Category::orderBy('created_at')->get();
        $this->device = $device;
    }

    public $image;

    public function rules(){
        return [
            'device.name' => ['required'],
            'device.slug' => ['required','unique:devices,slug,'.$this->device->id],
            'device.category_id' => ['required','exists:categories,id'],
            'device.body' => ['required'],
            'device.description' => ['required'],
            'device.price' => ['required'],
            'image' => ['nullable','required_without:device.image','image']
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

    public function update(){
        $this->validate(null,['image.required_without' => 'عکس الزامی است.']);
        $this->device->attributes = [];

        if($this->image){
            $this->device->uploadImage($this->image);
        }

        $this->device->save();
        $this->redirectRoute('admin.devices.index');
    }

    public function render()
    {
        return view('dashboard.pages.device.edit')
            ->layoutData([
                'title' => 'ویرایش دستگاه'
            ]);
    }
}
