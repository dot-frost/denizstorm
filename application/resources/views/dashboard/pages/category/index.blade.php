<div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>نام دسته</th>
                        <th>اسلاگ دسته</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $index => $category)
                        <tr>
                            <td>{{ ++$index }}.</td>
                            <td>{{ $category->name }}</td>
                            <td class="text-danger">{{ $category->slug }}</td>
                            <td>
                                <div class="btn-group btn-sm actions" role="group" aria-label="Basic example">
                                    <a href="{{ route('admin.categories.Edit', $category) }}" class="btn btn-primary">
                                        <i class="mdi mdi-folder-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger positive-relative"
                                            wire:click="setDelete({{ $category->id }})">
                                        <i class="mdi mdi-delete-outline"></i>
                                        @if($delete === $category->id)
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
        .actions{
            padding:unset;
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
    </style>
@endpush
