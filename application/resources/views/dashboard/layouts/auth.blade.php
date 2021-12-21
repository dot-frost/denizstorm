<!DOCTYPE html>
<html lang="fa">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ mix('dashboard/css/plugins.css') }}">
    <!-- end inject -->

    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ mix('dashboard/css/style.css') }}">
    <!-- end inject -->

    <!-- inject:css for this page -->
    <!-- end inject -->
    @livewireStyles()
    <link rel="shortcut icon" href="favicon.png" />
</head>

<body>
<div class="rtl container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{ asset('logo.png') }}" alt="logo">
                        </div>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->


<!-- plugins:js -->
<script type="text/javascript" src="{{ mix('dashboard/js/plugins.js') }}"></script>
<!-- end inject -->

<!-- plugin js for this page -->
@stack('page_js_plugins')
<!-- End plugin js for this page -->

<!-- inject:js -->
<script type="text/javascript" src="{{ mix('dashboard/js/main.js')}}"></script>
<!-- end inject -->

<!-- inject:js for this page -->
@stack('page_scrips')
<!-- end inject -->

@livewireScripts()
</body>

</html>
