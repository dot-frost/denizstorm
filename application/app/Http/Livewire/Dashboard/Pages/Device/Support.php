<?php

namespace App\Http\Livewire\Dashboard\Pages\Device;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Support extends Component
{
    public Device $device;
    public Collection $categories;

    public array $newSupports = [];
    public function mount(Device $device)
    {
        $this->device = $device->load(['category', 'supports']);
        $this->categories = Category::with('devices')
            ->where('id', '!=', $this->device->category->id)
            ->get();
    }

    public function addSupport($category_id){
        $device = $this->newSupports[$category_id];
        unset($this->newSupports[$category_id]);
        $this->device->supports()->attach($device);
        $this->device->refresh();
    }

    public function deleteSupported($support_id){
        $this->device->supports()->detach($support_id);
        $this->device->refresh();
    }

    public function render()
    {
        return view('dashboard.pages.device.support')
            ->layoutData(['title' => "{$this->device->name} Device Supports"]);
    }
}
