<form class="pt-3" wire:submit.prevent="login">
    <div class="form-group">
        <input type="email" wire:model.defer="email" wire="login" class="form-control form-control-lg" placeholder="ایمیل">
    </div>
    <div class="form-group">
        <input type="password" wire:model.defer="password" class="form-control form-control-lg" placeholder="کلمه عبور">
    </div>
    <div class="mt-3">
        <button type="submit" class="block btn-primary btn-lg font-weight-medium auth-form-btn">ورود به حساب</button>
    </div>
    <div class="my-2 d-flex justify-content-between align-items-center">
        <div class="form-check">
            <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input" wire:model.defer="remember">
                مرا به یاد داشته باش
            </label>
        </div>
        <a href="#" class="auth-link text-black">کلمه عبور را فراموش کرده اید؟</a>
    </div>
</form>
