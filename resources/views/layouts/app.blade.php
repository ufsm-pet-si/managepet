<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <!-- CORE CSS-->
    <link href="{{ asset('css/materialize.css') }} " type="text/css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="{{ asset('css/custom/custom.css') }}" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vendors/flag-icon/css/flag-icon.min.css') }}" type="text/css" rel="stylesheet">
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    @yield('_partial/header')
    <div class="wrapper">
        @yield('_partial/left_sidebar')
        @yield('content')
    </div>
    @yield('_partial/scripts')

</body>
</html>
