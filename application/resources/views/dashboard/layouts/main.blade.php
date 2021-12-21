<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ mix('dashboard/css/plugins.css') }}">
    <!-- end inject -->

    <!-- plugin css for this page -->
    @stack('page_css_plugins')
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ mix('dashboard/css/style.css') }}">
    <!-- end inject -->
    @stack('page_styles')
    <style>
        .phpdebugbar {
            opacity: 0.7;
        }
    </style>
    <!-- inject:css for this page -->
    <!-- end inject -->
    @livewireStyles
    <link rel="shortcut icon" href="favicon.png" />
</head>
<body class="rtl">
<div class="container-scroller">
    <!-- partial:navbar -->
    <livewire:dashboard.components.template.navbar/>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:sidebar -->
        <livewire:dashboard.components.template.sidebar/>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                {{ $slot }}
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:footer -->
            <livewire:dashboard.components.template.footer/>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
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
@livewireScripts
</body>
</html>

