<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DenizStorm | {{ $title }}</title>

    <link rel="stylesheet" href="{{ mix('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
</head>

<body data-spy="scroll" data-target="deniz-scroll" id="home">
<nav class="navbar navbar-expand-md navbar-light fixed-top float-left" id="deniz-scroll">
    <div class="container">
        <a class="navbar-brand" href="">
            <img alt="" height="50" src="/logo.png" width="50">
            <h3 class="d-inline align-middle"></h3>
        </a>

        <button class="navbar-toggler" data-target="#navbarDenizCollapse" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarDenizCollapse">
            <ul class="navbar-nav fontW">
                <li class="nav-item">
                    <a class="nav-link" href="#home">صفحه ی اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#comments">نظرات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">تماس با ما</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--main content--}}
@yield('main')
<!--footer-->

<footer class="bg-primary text-white p-2">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <p> کلیه حقوق ای سایت محفوظ است</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ mix('js/plugins.js') }}"></script>
<script src="{{ mix('js/main.js') }}"></script>

</body>
</html>
