@extends('layouts.main', ['title' => 'Home'])

@section('main')
    <!--bgshow-->
    <section class="py-5" id="bg">
        <div class="bg-main text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <h1 class="mt-5 pt-5 display-4 fontW">شرکت دنیزاستورم</h1>
                        <p class="lead"></p>بیا با هم شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم
                        رویا
                        ها تو شکل بدیم بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز</p>
                        <a class="btn btn-outline-primary btn-lg text-white" href="{{ route('client.order') }}">
                            سفارش <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img alt="" class="img-fluid d-none d-lg-block" src="/images/logo.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--boxes-->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center bg-primary text-white">
                        <div class="card-body">
                            <i class="fas fa-cogs text-white mb-2 SizeFontBox"></i>
                            <p>دنیز استورم یک شرکت مونتاژ کامپیوتر های گیمینگ و کاری</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center border-primary">
                        <div class="card-body">
                            <i class="fas fa-user-cog text-primary mb-2 SizeFontBox"></i>
                            <p class="text-muted">دنیز استورم یک شرکت مونتاژ کامپیوتر های گیمینگ و کاری</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center bg-primary text-white">
                        <div class="card-body">
                            <i class="fas fa-shopping-cart text-white mb-2 SizeFontBox"></i>
                            <p>دنیز استورم یک شرکت مونتاژ کامپیوتر های گیمینگ و کاری</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center border-primary">
                        <div class="card-body">
                            <i class="fas fa-gamepad text-primary mb-2 SizeFontBox"></i>
                            <p class="text-muted">دنیز استورم یک شرکت مونتاژ کامپیوتر های گیمینگ و کاری</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--about-->

    <section class="py-5 bg-light text-center" id="about" style="direction: rtl;">
        <div class="conntainer">
            <div class="row">
                <div class="col">
                    <div class="mb-4">
                        <h2 class="pb-3 fontW">چرا دنیز استورم ؟</h2>
                        <p class="lead pb-3">شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو
                            شکل
                            بدیم بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز</p>
                    </div>

                    <!--Q&A-->

                    <div id="Question">
                        <div class="card bg-dark text-light mb-2">
                            <div class="card-header">
                                <h4 class="mb-0">
                                    <div data-parent="#Question" data-toggle="collapse" href="#Answer1">
                                        <i class="far fa-question-circle"></i>
                                        چرا دنیز استورم ؟
                                    </div>
                                </h4>
                            </div>

                            <div class="collapse show" id="Answer1">
                                <div class="card-body">
                                    شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو شکل بدیم
                                    بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز
                                    شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو شکل بدیم
                                    بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز
                                    شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو شکل بدیم
                                    بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز
                                </div>
                            </div>
                        </div>

                        <div class="card bg-dark text-light mb-2">
                            <div class="card-header">
                                <h4 class="mb-0">
                                    <div data-parent="#Question" data-toggle="collapse" href="#Answer2">
                                        <i class="far fa-question-circle"></i>
                                        چرا دنیز استورم ؟
                                    </div>
                                </h4>
                            </div>

                            <div class="collapse" id="Answer2">
                                <div class="card-body">
                                    شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو شکل بدیم
                                    بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز
                                    شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو شکل بدیم
                                    بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز
                                    شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو شکل بدیم
                                    بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز
                                </div>
                            </div>
                        </div>

                        <div class="card bg-dark text-light mb-2">
                            <div class="card-header">
                                <h4 class="mb-0">
                                    <div data-parent="#Question" data-toggle="collapse" href="#Answer3">
                                        <i class="far fa-question-circle"></i>
                                        چرا دنیز استورم ؟
                                    </div>
                                </h4>
                            </div>

                            <div class="collapse" id="Answer3">
                                <div class="card-body">
                                    شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو شکل بدیم
                                    بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز
                                    شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو شکل بدیم
                                    بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز
                                    شروع کنیم باهم دنبال شگفتی های کامپیوتر بگردیم با هم بسازیم باهم رویا ها تو شکل بدیم
                                    بهترین ها را میسازیم و از همه مهم تر باهم میسازیم برای تو گیمر عزیز
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--comments-->

    <section class="my-5 text-center" id="comments">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="pb-3 fontW">نظرات گیمرها</h2>
                    <p class="lead pb-3 mb-5"> نظرات برخی از دوستان گیمر که با ما همکاری داشتن</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img alt="" class="img-fluid rounded-circle w-50 mb-2" src="img/customer.png">
                            <h3>اسم فرد</h3>
                            <h5 class="text-muted">شرکت فرد اسم</h5>
                            <p>در همکاری اخیر با بسیار خرسند هستیم که با شرکت دنیز استورم جهت اسمبل کامپیوتر ها همکاری
                                داشته
                                ایم</p>

                            <div class="d-flex justify-content-center">
                                <div class="p-3">
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="p-3">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="p-3">
                                    <a href="https://linkdin.com/"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img alt="" class="img-fluid rounded-circle w-50 mb-2" src="img/customer.png">
                            <h3>اسم فرد</h3>
                            <h5 class="text-muted">شرکت فرد اسم</h5>
                            <p>در همکاری اخیر با بسیار خرسند هستیم که با شرکت دنیز استورم جهت اسمبل کامپیوتر ها همکاری
                                داشته
                                ایم</p>

                            <div class="d-flex justify-content-center">
                                <div class="p-3">
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="p-3">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="p-3">
                                    <a href="https://linkdin.com/"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img alt="" class="img-fluid rounded-circle w-50 mb-2" src="img/customer.png">
                            <h3>اسم فرد</h3>
                            <h5 class="text-muted">شرکت فرد اسم</h5>
                            <p>در همکاری اخیر با بسیار خرسند هستیم که با شرکت دنیز استورم جهت اسمبل کامپیوتر ها همکاری
                                داشته
                                ایم</p>

                            <div class="d-flex justify-content-center">
                                <div class="p-3">
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="p-3">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="p-3">
                                    <a href="https://linkdin.com/"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img alt="" class="img-fluid rounded-circle w-50 mb-2" src="img/customer.png">
                            <h3>اسم فرد</h3>
                            <h5 class="text-muted">شرکت فرد اسم</h5>
                            <p>در همکاری اخیر با بسیار خرسند هستیم که با شرکت دنیز استورم جهت اسمبل کامپیوتر ها همکاری
                                داشته
                                ایم</p>

                            <div class="d-flex justify-content-center">
                                <div class="p-3">
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="p-3">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="p-3">
                                    <a href="https://linkdin.com/"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--contact-->

    <section class="bg-light py-5" id="contact" style="direction: rtl;">
        <div class="container">
            <div class="row" style="flex-direction:row-reverse">

                <div class="col-lg-2 align-self-center">
                    <img alt="" class="img-fluid" src="/logo.png">
                </div>

                <div class="col-lg-10">
                    <h3 class="fontW text-left">ارتباط با ما</h3>
                    <p class="lead text-left">میتوانید با پر کردن فرم زیر با ما ارتباط مستقیم داشته باشید</p>
                    @if (session('contact_status') == true)
                        <div class="alert alert-success text-center">
                            <h2>
                                پیام شما با موفقیت ثبت شد.
                            </h2>
                        </div>
                    @endif
                    <form action="{{ route('client.contact') }}" method="POST">
                        @csrf
                        <div class="input-group input-group-lg mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="نام" type="text" name="name" value="{{ old('name') }}">
                            @error('name')<span class="error-message w-100 text-left text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="input-group input-group-lg mb-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-envelope"></i>
                            </span>
                            </div>
                            <input class="form-control" placeholder="ایمیل" type="email" name="email" value="{{ old('email') }}">
                            @error('email')<span class="error-message w-100 text-left text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="input-group input-group-lg mb-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-file-alt"></i>
                            </span>
                            </div>
                            <textarea class="form-control" placeholder="متن خود را بنویسید" rows="4" name="description">{{ old('description') }}</textarea>
                            @error('description')<span class="error-message w-100 text-left text-danger">{{$message}}</span>@enderror
                        </div>

                        <input class="btn btn-primary btn-lg btn-block fontW" type="submit" value="ثبت">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
