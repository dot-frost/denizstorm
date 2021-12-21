<div class="slider">
    <div class="slider-container" wire:key="slider-container">
        <div class="slides" style="transform:translateY({{ $this->getCurrentPosition() }}%)">
            @foreach($slides as $slide)
                <div class="slide" style="background: {{ $slide['color'] }}">

                </div>
            @endforeach
        </div>
    </div>

    <div class="slider-footer" wire:key="slider-footer">
        <div class="progress-bar-container" wire:key="progress-bar-container">
            <span class="progress-bar-status" style="width: {{ $this->getProgressStatus() }}%"></span>
        </div>
        <div class="nav-bar-container" wire:key="nav-bar-container">
            <button type="button" @class(['btn-nav','active' => $this->previousStatus()]) {{ $this->previousStatus()?'': ' disabled' }} wire:click="previous">
                <i class="fa fa-3x fa-angle-up"></i>
            </button>
            <button type="button" @class(['btn-nav','active' => $this->nextStatus()]) {{ $this->nextStatus()?'': ' disabled' }} wire:click="next">
                <i class="fa fa-3x fa-angle-down"></i>
            </button>
        </div>
    </div>
</div>


@push('styles')
    <link rel="stylesheet" href="{{ mix('css/plugins.css') }}">
    @livewireStyles
    <style>
        .slider{
            position: relative;
        }

        .slider .slider-container{
            position: fixed;
            top:0;
            left: 0;
            right: 0;
            height: calc(100vh - 70px);
            background:mintcream;
            display:flex;
            flex-direction: column;
            justify-content:stretch;
            overflow: hidden;
        }
        .slider .slider-footer {
            position: fixed;
            bottom:0;
            left: 0;
            right: 0;
            height: 70px;
            background:black;
            display:flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
        }
        .slider .progress-bar-container{
            width: 300px;
            height: 10px;
            background:gray;
            border-radius: 10px;
        }
        .progress-bar-container .progress-bar-status{
            transition: all 500ms ease-in-out;
            height:100%;
            background:red;
            border-radius: 10px;
            display:block;
        }

        .slider .slide {
            overflow: unset;
            width: 100%;
            height: calc(100vh - 70px);
        }
        .slider .slides {
            transition: all 500ms ease-in-out;
            transform: translateY(0);
        }
        .slider .btn-nav {
            padding: 0 10px;
            background-color: #fff;
            border-radius: 10px;
        }
        .slider .btn-nav.active {
            background-color: yellow;
        }
    </style>

@endpush

@push('scripts')
    @livewireScripts
    <script>
    </script>
@endpush
