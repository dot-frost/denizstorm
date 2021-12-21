<x-slot name="header">
    خوش آمدید
</x-slot>

<form action="" wire:submit.prevent="login">
    <div class="flex flex-col mb-5">
        <label for="email" class="mb-1 text-xs tracking-wide text-gray-600">آدرس ایمیل:</label>
        <div class="relative">
            <div class="inline-flex items-center justify-center absolute right-0 top-0 h-full w-10 text-gray-400 ">
                <i class="fas fa-at text-blue-500"></i>
            </div>

            <input id="email" type="email" name="email"
                   wire:model.defer="email"
                   class="text-sm placeholder-gray-500 pr-10 pl-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400 @error('email')border-red-400 @enderror"
                   placeholder="ایمیل خود را وارد کنید"/>
        </div>
    </div>
    @error('email') {{$message}} @enderror
    <div class="flex flex-col mb-6">
        <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">کلمه عبور:</label>
        <div class="relative">
            <div class=" inline-flex items-center justify-center absolute right-0 top-0 h-full w-10 text-gray-400 ">
                <span>
                    <i class="fas fa-lock text-blue-500"></i>
                </span>
            </div>

            <input id="password" type="password" name="password"
                   wire:model.defer="password"
                   class=" text-sm placeholder-gray-500 pr-10 pl-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400 @error('password')border-red-400 @enderror"
                   placeholder="کلمه عبور خود را وارد کنید"/>
        </div>

    </div>
    @error('password') {{$message}} @enderror

    <div class="flex w-full">
        <button wire:loading.attr="disabled" wire:target="login" type="submit"
                class=" flex mt-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-500 hover:bg-blue-600 rounded-2xl py-2 w-full transition duration-150 ease-in ">
            <svg viewBox="0 0 52 12" wire:loading wire:target="login" class="w-10 h-6">
                  <circle fill="#fff" stroke="none" cx="6" cy="6" r="6">
                      <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1"></animate>
                  </circle>
                <circle fill="#fff" stroke="none" cx="26" cy="6" r="6">
                    <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite"
                             begin="0.2"></animate>
                </circle>
                <circle fill="#fff" stroke="none" cx="46" cy="6" r="6">
                    <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite"
                             begin="0.3"></animate>
                </circle>
            </svg>
            <span wire:loading.remove>
                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M 13 9 L 16 12 M 16 12 L 13 15 M 16 12 L 8 12 M 21 12 C 21 18.928 13.5 23.258 7.5 19.794 C 4.715 18.187 3 15.215 3 12 C 3 5.072 10.5 0.742 16.5 4.206 C 19.285 5.813 21 8.785 21 12 Z"
                        transform="matrix(-1, 0, 0, -1, 24, 23.999998)"></path>
                </svg>
            </span>
            <span wire:loading.remove class="mr-2 uppercase">ورود به حساب</span>
        </button>
    </div>
</form>

