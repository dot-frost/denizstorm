<div class="row justify-content-center">
    <div class="col-lg-6 grid-margin stretch-card flex-column">
        <div class="mb-5 card">
            <div class="card-body">
                <h4 class="">حساب کاربری</h4>
                <div class="row justify-content-center">
                    <img class="col-3 rounded-circle"
                         style="aspect-ratio: 1/1"
                         src="{{ $user->getAvatarUrl() }}"
                         alt="{{ $user->name }}">
                </div>
                <h2 class="mt-2 text-center text-uppercase">{{ $user->name }}</h2>

                <form action="">

                </form>
            </div>
        </div>
        <div class="mb-5 card">
            <div class="card-body">
                <h4 class="card-title">ویرایش حساب کاربری</h4>
                <form class="forms-sample" wire:submit.prevent="updateProfile" _lpchecked="1">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">نام</label>
                        <div class="col-sm-9">
                            <input type="text" wire:model.defer="user.name" class="form-control" id="name"
                                   placeholder="نام">
                            @error('user.name')
                            <p class="mt-2 text-small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">ایمیل</label>
                        <div class="col-sm-9">
                            <input type="text" wire:model.defer="user.email" class="form-control" id="email"
                                   placeholder="ایمیل">
                            @error('user.email')
                            <p class="mt-2 text-small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="avatar" class="col-sm-3 col-form-label">عکس پروفایل</label>
                        <div class="col-sm-9">
                            <input type="file" wire:model.defer="avatar" class="w-full form-control" id="avatar"
                                   placeholder="عکس پروفایل">
                            @error('avatar')
                            <p class="mt-2 text-small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="mr-2 btn btn-primary">بروزرسانی</button>
                </form>
            </div>
        </div>
        <div class="mb-5 card">
            <div class="card-body">
                <h4 class="card-title">تغییر کلمه عبور</h4>
                <form class="forms-sample" wire:submit.prevent="changePassword" _lpchecked="1">
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">کلمه عبور جدید</label>
                        <div class="col-sm-9">
                            <input type="password" wire:model.defer="password" class="form-control" id="password"
                                   placeholder="کلمه عبور جدید">
                            @error('password')
                            <p class="mt-2 text-small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirmation" class="col-sm-3 col-form-label">تکرار کلمه عبور جدید</label>
                        <div class="col-sm-9">
                            <input type="password" wire:model="password_confirmation" class="form-control"
                                   id="password_confirmation" placeholder="تکرار کلمه عبور جدید">
                        </div>
                    </div>
                    <button type="submit" class="mr-2 btn btn-primary">ثبت</button>
                </form>
            </div>
        </div>
    </div>
</div>
