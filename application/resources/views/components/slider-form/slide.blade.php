<div class="device-card-group">
    @foreach($this->getDevices() as $device)
        <div @class(['device-card','active' => ($selected??false) === $device->id]) wire:key="device_{{$device->id}}">
            <img class="image" src="{{ $device->getImageLink() }}">
            <h3 class="title">{{ $device->name }}</h3>
            <span class="description">{!! $device->description !!}</span>
            <h6 class="price">{{ number_format($device->price) }} تومان</h6>
            <button class="select"
                    wire:click="$emitUp('selectDevice', {{$device->category_id}},{{$device->id}})">انتخاب
            </button>
        </div>
    @endforeach
</div>
