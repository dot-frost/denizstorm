<div>
    <div class="card">
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
                    @foreach($devices as $index => $device)
                        <tr>
                            <td>{{ ++$index }}.</td>
                            <td>
                                <img src="{{ $device->getImageLink() }}" alt="" style="object-fit: contain;">
                            </td>
                            <td>{{ $device->name }}</td>
                            <td class="text-danger">{{ $device->slug }}</td>
                            <td class="text-danger">{{ $device->category->name }}</td>
                            <td class="text-danger">{{ $device->price }}</td>
                            <td>
                                <div class="btn-group btn-sm actions" role="group" aria-label="Basic example">
                                    <a href="{{ route('admin.devices.support', $device) }}" class="btn btn-success">
                                        <i class="mdi mdi-graph-outline"></i>
                                    </a>
                                    <a href="{{ route('admin.devices.Edit', $device) }}" class="btn btn-primary">
                                        <i class="mdi mdi-folder-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger positive-relative"
                                            wire:click="setDelete({{ $device->id }})">
                                        <i class="mdi mdi-delete-outline"></i>
                                        @if($delete === $device->id)
                                            <span class="confirm-delete" wire:click="delete">
                                                <i class="mdi mdi-alpha-x mdi-36px"></i>
                                            </span>
                                        @endif
                                    </button>
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

@push('page_styles')
    <style>
        .table th, .table td {
            padding: .75rem 0.35rem;
        }

        .actions {
            padding: unset;
        }

        .actions .btn {
            padding: 0.5em;
        }

        .confirm-delete:after {
            content: " ";
            background: #ff0000;
            position: absolute;
            width: 10px;
            height: 10px;
            top: calc(50% - 5px);
            right: -5px;
            transform: rotate(45deg);
        }

        .confirm-delete {
            position: absolute;
            background: #fd2b2b;
            right: 120%;
            left: -100%;
            top: 0;
            bottom: 0;
            border-radius: 25%;
            justify-content: center;
            align-items: center;
            display: flex;
            transition: 500ms;
            box-shadow: 0px 0px 0 0px #ff000057;
        }

        .confirm-delete:hover {
            background: red;
            box-shadow: -2px 2px 2px 0px #ff000057;
        }

        .confirm-delete:focus {
            box-shadow: -4px 3px 5px 0px #ff000057;
        }


        .table img {
            width:100px!important;
            height:100px!important;
        }
    </style>
@endpush
