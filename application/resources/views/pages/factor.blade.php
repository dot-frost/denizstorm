@extends('layouts.main', ['title' => 'Factor'])

@section('main')
    <section class="py-5">
        <div class="container">
            <div class="row" dir="rtl">
                <h3 class="col-12">{{ $order->name }}</h3>
                <h4 class="col-12">{{ $order->email }}</h4>
                <h4 class="col-12">{{ $order->phone }}</h4>
                <p class="col-12">
                    {{ $order->description }}
                </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped" dir="rtl">
                        <thead>
                            <th>ردیف</th>
                            <th>دسته</th>
                            <th>نام</th>
                            <th>عکس</th>
                            <th>قیمت</th>
                        </thead>
                        <tbody>
                        @foreach($order->devices as $index => $device)
                            @php($device=$devices->find($device))
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $device->category->name }}</td>
                                <td>{{ $device->name }}</td>
                                <td>
                                    <img src="{{ $device->getImageLink() }}" style="width:100px;aspect-ratio: 1/1">
                                </td>
                                <td>{{ number_format($device->price) }} تومان</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4">
                            </td>
                            <td colspan="1">
                                {{ number_format($devices->reduce(function($sum, $device) {return $sum + $device->price;},0)) }} تومان
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
