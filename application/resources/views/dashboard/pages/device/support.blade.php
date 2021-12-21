<div>
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-header">
                    دستگاه
                </div>
                <div class="card-body">
                    <img src="{{ $device->getImageLink() }}" alt="" class="w-100 rounded-lg" style="aspect-ratio: 1/1">
                    <h2 class="p-4 text-center text-capitalize">{{ $device->name }}</h2>
                    <h3>دسته: {{ $device->category->name }}</h3>
                    <div>
                        {!! $device->description !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-9">
            <div class="card">
                <div class="card-header">
                    لیست دستگاه های قابل پشتیبانی
                </div>
                <div class="card-body">
                    @foreach($categories as $category)
                        <div class="card mb-2">
                            <div class="card-header">
                                {{ $category->name }}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($device->supports->filter(fn ($d) => $d->category_id == $category->id) as $deviceSupported)
                                    <div class="col-12 col-md-6 col-lg-3 mb-1">
                                        <div class="device-card">
                                            <img src="{{ $deviceSupported->getImageLink() }}" class="w-100 rounded-lg" style="aspect-ratio: 1/1">
                                            <h4 class="p-4 text-center text-capitalize">{{ $deviceSupported->name }}</h4>
                                            <div class="actions">
                                                <div class="btn-group w-100">
                                                    <button type="button" class="btn btn-danger" wire:click="deleteSupported({{ $deviceSupported->id }})">
                                                        <i class="mdi mdi-delete-outline"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>
                                                دستگاه:
                                                <select class="form-control" name="device" wire:model.defer="newSupports.{{$category->id}}">
                                                    <option>دستگاه را انتخاب کنید</option>
                                                    @foreach($category->devices->filter(fn ($d) => !$device->supports->find($d->id)) as $deviceSupport)
                                                        <option value="{{ $deviceSupport->id }}">{{ $deviceSupport->name }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-success" wire:click="addSupport({{$category->id}})">
                                            <i class="mdi mdi-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@push('page_styles')
    <style>
        .device-card{
            padding:0.5em;
            background-color: #f1f1f1;
            border-radius: 0.5em;
            display: flex;
            flex-direction: column;
            justify-content: stretch;
            border:5px solid #d5d5d5;
            transition:500ms;
            box-shadow: 0 0 0px 0 #80808069;
            transform: scale(1);
        }
        .device-card:hover {
            box-shadow: 10px 10px 20px 0px #80808019;
            transform: scale(1.01);
        }
    </style>
@endpush
