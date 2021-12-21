<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Models\Device;
use App\Models\Order;
use Livewire\Component;

class Index extends Component
{
    public $lastDevices;
    public $lastOrders;

    public function mount(){
        $this->lastDevices = Device::orderByDesc('created_at')->limit(5)->get();
        $this->lastOrders = Order::orderByDesc('created_at')->limit(5)->get();
    }

    public function render()
    {
        return view('dashboard.pages.index')
            ->layoutData([
                'title' => 'داشبورد'
            ]);
    }
}
