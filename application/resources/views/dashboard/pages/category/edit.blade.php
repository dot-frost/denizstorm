<div>
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="card-title">ویرایش دسته</h4>
            <form class="forms-sample" wire:submit.prevent="create" _lpchecked="1">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">نام</label>
                    <div class="col-sm-9">
                        <input type="text" wire:model="category.name" class="form-control" id="name"
                               placeholder="نام">
                        @error('category.name')
                        <p class="mt-2 text-small text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="slug" class="col-sm-3 col-form-label">اسلاگ</label>
                    <div class="col-sm-9">
                        <input type="text" wire:model.lazy="category.slug" class="form-control" id="slug"
                               placeholder="اسلاگ">
                        @error('category.slug')
                        <p class="mt-2 text-small text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">بروزرسانی</button>
            </form>
        </div>
    </div>
</div>
