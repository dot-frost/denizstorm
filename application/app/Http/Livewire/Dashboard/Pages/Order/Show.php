<?php

namespace App\Http\Livewire\Dashboard\Pages\Order;

use App\Models\Device;
use App\Models\Order;
use Livewire\Component;

class Show extends Component
{
    public Order $order;

    public $devices;

    public function mount(Order $order){
        $this->order = $order;
        $this->devices = Device::whereIn('id',$order->devices)->get();
    }

    public function render()
    {
        return view('dashboard.pages.order.show')
            ->layoutData([
                'title' => 'سفارش'
            ]);
    }
}
