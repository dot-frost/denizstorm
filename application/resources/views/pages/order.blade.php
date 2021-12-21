<div class="slider">
    <div class="slider-container" wire:key="slider-container">
        <div class="slides" style="transform:translateY({{ $this->getCurrentPosition() }}%)">
            @foreach($order as $index => $step)
                <div class="slide" wire:key="slide-{{$this->getCategory($step['category'])['slug'].$timeUpdated}}">
                    <livewire:components.slider-form.slide
                        :wire:key="'slide-'.$this->getCategory($step['category'])['slug'].'-component'.$timeUpdated"
                        :category="$this->getCategory($step['category'])"
                        :devices="$this->getDevices($step['category'],$step['devices'])"
                        :selected="$step['selected']"
                        :step="$step"
                    />
                </div>
            @endforeach
            <div class="slide" wire:key="contact-form">
                <form wire:submit.prevent="save" class="contact-form p-3">
                    <h2 class="title">اطلاعات کاربری</h2>
                    <div class="form-group">
                        <input type="text" class="form-input" wire:model.defer="contact.name"
                               placeholder="نام و نام خانوادگی">
                        @error('contact.name')<span class="error-message">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" wire:model.defer="contact.email"
                               placeholder="ایمیل">
                             @error('contact.email')<span class="error-message">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" wire:model.defer="contact.phone"
                               placeholder="شماره تماس">
                        @error('contact.phone')<span class="error-message">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-input" wire:model.defer="contact.description"
                                  placeholder="توصیف کامپیوتر" rows="4"></textarea>
                        @error('contact.description')<span class="error-message">{{$message}}</span>@enderror
                    </div>
                    <button type="submit" class="form-btn mx-auto" style="width:400px">
                        <i class="icon-check"></i>ثبت
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="slider-footer" wire:key="slider-footer">
        <div class="nav-bar-container" wire:key="nav-bar-container">
            <button type="button"
                    @class(['btn-nav','active' => $this->nextStatus()]) {{ $this->nextStatus()?'': ' disabled' }} wire:click="next">
                <i class="fa fa-3x fa-angle-down"></i>
            </button>
            <button type="button"
                    @class(['btn-nav','active' => $this->previousStatus()]) {{ $this->previousStatus()?'': ' disabled' }} wire:click="previous">
                <i class="fa fa-3x fa-angle-up"></i>
            </button>
        </div>
        <div class="progress-bar-container" wire:key="progress-bar-container">
            <span class="progress-bar-status" style="width: {{ $this->getProgressStatus() }}%"></span>
        </div>
    </div>
</div>

@push('styles')
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ mix('css/order.css') }}">
    @livewireStyles
@endpush
@push('scripts')
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
@endpush
