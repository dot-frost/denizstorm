<div>
    <div class="row justify-content-center">
        <div class="col-10 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    اسلاید های فرم
                    <div class="btn-group">
                        <button type="button" class="btn btn-info" wire:click="save">
                            <i class="mdi mdi-content-save"></i>
                        </button>
                        <button type="button" class="btn btn-success" wire:click="add">
                            <i class="mdi mdi-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($slides as $index => $slide)
                        <div wire:key="slide_{{$index}}">
                            <div class="row">
                                <div class="col-2 pr-1">
                                    <button type="button" class="btn btn-danger btn-icon w-100" wire:click="remove({{$index}})">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <label for="category_{{$index}}" class="w-100">
                                            <select name="category_{{$index}}" id="category_{{$index}}" wire:model="slides.{{$index}}" class="form-control">
                                                <option>دسته را انتخاب کنید.</option>
                                                @foreach($this->getCategoriesForSlide($index) as $category)
                                                    <option value="{{$category->id}}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('slides.'.$index)
                                            <span class="error-message">{{ $message }}</span>
                                            @enderror
                                        </label>
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

