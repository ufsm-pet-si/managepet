<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

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
    <div id="main">
        <div class="wrapper">
            {{--Se for login, não exibir left_sidebar--}}
            <!-- 
            @if (Auth::guest())
                
            @else
                @include('_partial/left_sidebar')
            @endif 
            -->
            @include('_partial/left_sidebar')

            <section id="content">
                @yield('content')
            </section>
        </div>
    </div>
    @include('_partial/scripts')
</body>
</html>
