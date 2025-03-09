<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Remos eCommerce Admin Dashboard HTML Template</title>
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/icon/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('dashboard/images/favicon.png') }}">
</head>
<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">
                @include('dashboard.partials.preload')
                @include('dashboard.partials.left-sidebar')
                <div class="section-content-right">
                    @include('dashboard.partials.header')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('dashboard/js/zoom.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-1.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-2.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-3.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-4.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-5.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-6.js')}}"></script>
    <!-- <script src="{{asset('dashboard/js/switcher.js')}}"></script> -->
    <script src="{{asset('dashboard/js/theme-settings.js')}}"></script>
    <script src="{{asset('dashboard/js/main.js')}}"></script>
    @stack('scripts')
</body>
</html>
