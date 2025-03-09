<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Remos eCommerce Admin Dashboard HTML Template</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/icon/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png')}}">
</head>

<body class="body">
    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            @yield('content')
        </div>
    </div>

    <script src="{{ 'dashboard/js/jquery.min.js' }}"></script>
    <script src="{{ 'dashboard/js/bootstrap.min.js' }}"></script>
    <script src="{{ 'dashboard/js/bootstrap-select.min.js' }}"></script>
    <script src="{{ 'dashboard/js/main.js' }}"></script>
</body>

</html>
