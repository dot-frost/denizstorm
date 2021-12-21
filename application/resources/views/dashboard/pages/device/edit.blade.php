<div>
    <div class="row">
        <div class="col-lg-4">
            <div class="mb-5 mr-2 card">
                <div class="card-body">
                    <h4 class="card-title">ویرایش دستگاه</h4>
                    <form class="forms-sample" wire:submit.prevent="update" _lpchecked="1">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">نام</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model.defer="device.name" class="form-control" id="name"
                                       placeholder="نام">
                                @error('device.name')
                                <p class="mt-2 text-small text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slug" class="col-sm-3 col-form-label">اسلاگ</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model.defer="device.slug" class="form-control" id="slug"
                                       placeholder="اسلاگ">
                                @error('device.slug')
                                <p class="mt-2 text-small text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">دسته</label>
                            <div class="col-sm-9">
                                <select class="form-control" wire:model.defer="device.category_id" name="category"
                                        id="category">
                                    <option>دسته را انتخاب کنید</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                                wire:key="option_category_{{$category->id}}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('device.category_id')
                                <p class="mt-2 text-small text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-3 col-form-label">قیمت</label>
                            <div class="col-sm-9">
                                <input type="number" min="0" wire:model.defer="device.price" class="form-control"
                                       id="price"
                                       placeholder="نام">
                                @error('device.price')
                                <p class="mt-2 text-small text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">عکس</label>
                            <div class="col-sm-9">
                                <input type="file" wire:model.defer="image" class="form-control" id="image"
                                       placeholder="نام">
                                <img class="w-100"
                                     src="{{ $image? $image->temporaryUrl():$device->getImageLink() }}"
                                     alt="">
                                @error('image')
                                <p class="mt-2 text-small text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="mr-2 btn btn-primary">بروزرسانی</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="mb-5 card">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="body" class="col-sm-3 col-form-label">توضیحات</label>
                        <div class="col-sm-9" x-data="{}">
                                <textarea name="body" id="body" class="w-full description"
                                          wire:model.defer="device.body">{!! $device->body !!}</textarea>
                            @error('device.body')
                            <p class="mt-2 text-small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">توضیحات کوتاه</label>
                        <div class="col-sm-9">
                            <textarea name="description" id="description" class="w-full form-control description"
                                      wire:model.defer="device.description">{{ $device->description }}</textarea>
                            @error('device.description')
                            <p class="mt-2 text-small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('page_css_plugins')
    <link rel="stylesheet" href="{{ asset('dashboard/css/editor.css') }}"/>
@endpush
@push('page_js_plugins')
    <script type="text/javascript" src="{{ mix('dashboard/js/editor.js') }}"></script>
@endpush

@push('page_scrips')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('element.updated', (el, component) => {
                if (el.id === 'body') {
                    initEditor()
                }
            })
            Livewire.hook('message.sent', (message, component) => {
                if (message.component.fingerprint.name === 'dashboard.pages.device.edit') {
                    destroyEditor()
                }
            })
        });

        function initEditor() {
            jQuery('#body').trumbowyg().on('tbwchange', function (e) {
                e.target.dispatchEvent(new Event('input', {
                    bubbles: true,
                    cancelable: true,
                }))
            });
        }

        function destroyEditor() {
            jQuery('#body').trumbowyg('destroy');
        }

        initEditor()
    </script>
@endpush
