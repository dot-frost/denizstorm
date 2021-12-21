<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Order;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    public function __invoke()
    {
        abort_unless(session()->has('factor'),403);

        $order = Order::find(session('factor'));

        $devices = Device::whereIn('id',$order->devices)->get();

        return view('pages.factor',[
            'order' => $order,
            'devices' => $devices
        ]);
    }
}
