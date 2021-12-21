<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>
                    آخرین محصولات
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center">
                        <thead>
                        <tr>
                            <th style="width: 30px; align-items: center">ردیف</th>
                            <th style="width: 150px; align-items: center">عکس</th>
                            <th>نام</th>
                            <th>اسلاگ</th>
                            <th>دسته</th>
                            <th>قیمت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lastDevices as $index => $device)
                            <tr>
                                <td>{{ ++$index }}.</td>
                                <td>
                                    <img src="{{ $device->getImageLink() }}" alt="" style="object-fit: contain;">
                                </td>
                                <td>{{ $device->name }}</td>
                                <td class="text-danger">{{ $device->slug }}</td>
                                <td class="text-danger">{{ $device->category->name }}</td>
                                <td class="text-danger">{{ number_format($device->price) }} تومان</td>
                                <td>
                                    <div class="btn-group btn-sm actions" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin.devices.support', $device) }}" class="btn btn-success">
                                            <i class="mdi mdi-graph-outline"></i>
                                        </a>
                                        <a href="{{ route('admin.devices.Edit', $device) }}" class="btn btn-primary">
                                            <i class="mdi mdi-folder-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>
                    آخرین سفارشات
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center">
                        <thead>
                        <tr>
                            <th style="width: 30px; align-items: center">ردیف</th>
                            <th>نام</th>
                            <th>ایمیل</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lastOrders as $index => $order)
                            <tr>
                                <td>{{ ++$index }}.</td>
                                <td>{{ $order->name }}</td>
                                <td class="text-danger">{{ $order->email }}</td>
                                <td>
                                    <div class="btn-group btn-sm actions" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-primary">
                                            <i class="mdi mdi-folder-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
