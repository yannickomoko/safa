<!DOCTYPE html>
<html lang="zxx">
 
<head>
    <title>@yield('title')</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ url('') }}/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ url('') }}/frontend/css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ url('') }}/frontend/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="{{ url('') }}/frontend/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{ url('') }}/frontend/css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ url('') }}/frontend/css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        @include('frontend.layout.header')

       @yield('content')

       @include('frontend.layout.footer')
    </div> 
    <!-- Javascript Files
    ================================================== -->
    <script src="{{ url('') }}/frontend/js/plugins.js"></script>
    <script src="{{ url('') }}/frontend/js/designesia.js"></script>

</body>
 
</html>