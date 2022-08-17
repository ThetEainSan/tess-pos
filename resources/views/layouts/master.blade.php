<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/Tess.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icon-font-linea.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/effect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    @yield('styles')
</head>
<body>
<!-- Header Box -->
<div class="wrappage">
    <header class="relative full-width">
        @include('layouts.header')      
<!-- End Header Box -->

<!-- Content Box -->
        @yield('contents')
<!-- End Content Box -->

<!-- Footer Box -->
    @include('layouts.footer')
</div>
<!-- End Footer Box -->
<script src="{{ ('js/jquery-3.3.1.min.js') }}" defer=""></script>
<script src="{{ ('js/bootstrap.min.js') }}" defer=""></script>
<script src="{{ ('js/multirange.js') }}" defer=""></script>
<script src="{{ ('js/owl.carousel.min.js') }}" defer=""></script>
<script src="{{ ('js/sync_owl_carousel.js') }}" defer=""></script>
<script src="{{ ('js/scripts.js') }}" defer=""></script>
</body>
</html>