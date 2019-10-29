<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <link rel="icon" href="{{ asset('images/icon/icon_pet.png') }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Materialize -->
    <link href="{{ asset('vendors/materialize/materialize.css') }} " type="text/css" rel="stylesheet">
    <link href="{{ asset('vendors/materialize/style.css') }}" type="text/css" rel="stylesheet">
    <!-- Fullcalendar -->
    <link href="{{ asset('vendors/fullcalendar/fullcalendar.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('vendors/fullcalendar/fullcalendar.print.min.css') }}" type="text/css" rel="stylesheet" media="print" />
    <!-- Datatable -->
    <link href="{{ asset('vendors/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custome CSS-->
    <link href="{{ asset('css/custom/custom.css') }}" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vendors/flag-icon/css/flag-icon.min.css') }}" type="text/css" rel="stylesheet">
    <!-- jQuery Toast -->
    <link href="{{ asset('vendors/jquery/jquery.toast.min.css') }}" type="text/css" rel="stylesheet" />
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('/vendors/jquery/jquery.min.js') }}"></script>
    <!-- Chart.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
</head>

<body>
    @section('loader')
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    @endsection
    @include('_partial.header')
    @if (!Auth::guest())
    <div id="main">
    @else
    <div>
        <div class="center" style="margin-top:30px;">
            <img src="{{ asset('images/icon/logo_pet.png') }}" width="350px" alt="logo PET-SI" />
        </div>
    @endif
        <div class="wrapper">
            {{--Se for login, não exibir left_sidebar--}}
            @if (!Auth::guest())
                @include('_partial/left_sidebar')
            @endif
            <section id="content">
                @yield('content')
            </section>
        </div>
    </div>
    @include('_partial/scripts')
</body>
</html>