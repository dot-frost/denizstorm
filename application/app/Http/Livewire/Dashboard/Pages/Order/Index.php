<?php

namespace App\Http\Livewire\Dashboard\Pages\Order;

use App\Models\Order;
use Livewire\Component;

class Index extends Component
{
    public $orders;


    public $delete = false;

    public function mount(){
        $this->orders = Order::orderByDesc('created_at')->get();
    }

    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    public function delete()
    {
        $this->orders->find($this->delete)->delete();
        $this->mount();
    }

    public function render()
    {
        return view('dashboard.pages.order.index')
            ->layoutData([
                'title' => 'سفارشات'
            ]);
    }
}
