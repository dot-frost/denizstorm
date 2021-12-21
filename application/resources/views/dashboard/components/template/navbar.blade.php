<nav class="flex-row p-0 navbar col-lg-12 col-12 fixed-top d-flex">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand brand-logo" href="{{ route('admin.index') }}"><img src="{{ asset('logo.png') }}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('admin.index') }}"><img src="{{ asset('logo.png') }}" alt="logo"/></a>
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-sort-variant" data-flip="horizontal"></span>
            </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{ $user->getAvatarUrl() }}" alt="profile"/>
                    <span class="nav-profile-name">{{ $user->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <i class="mdi mdi-account-cog text-primary"></i>
                        تنظیمات
                    </a>
                    <a class="dropdown-item" wire:click="logout">
                        <i class="mdi mdi-logout text-primary"></i>
                        خروج
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
