<?php

namespace App\Http\Livewire\Dashboard\Pages\Device;

use App\Models\Device;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public Collection $devices;

    public int|false $delete = false;


    public function mount()
    {
        $this->devices = Device::orderByDesc('created_at')->with('category')->get();
    }

    public function setDelete($delete)
    {
        $this->delete = ($this->delete === $delete ? false : $delete);
    }

    public function delete()
    {
        $this->devices->find($this->delete)->delete();
        $this->mount();
    }

    public function render()
    {
        return view('dashboard.pages.device.index')
            ->layoutData([
                'title' => 'دستگاه ها'
            ]);
    }
}
