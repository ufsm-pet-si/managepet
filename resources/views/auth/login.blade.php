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
</head>


{{--<body>--}}
@section('loader')
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
@endsection
<section id="content center-align">
    <body class="horizontal-layout page-header-light horizontal-menu 1-column login-bg  blank-page blank-page" data-open="click" data-menu="horizontal-menu" data-col="1-column"
          style="background-image: linear-gradient(rgba(15, 182, 232, 0.42), rgba(42, 107, 121, 0.97));">
    <div class="row "style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m12 l12 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                        <form method="POST" class="login-form" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <h5 class="ml-4 center-align">{{ __('Manage PET') }}</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input id="email" type="email" style="padding-left: 5px;"
                                           class="validate{{ $errors->has('email') ? ' invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required >
                                    <label for="email">{{ __('Endereço de e-mail') }}</label>
                                    @if ($errors->has('email'))
                                        <span class="red-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" type="password" style="    padding-left: 5px;" class="validate{{ $errors->has('password') ? ' invalid' : '' }}" name="password" required>
                                    <label for="password">{{ __('Senha') }}</label>
                                    @if ($errors->has('password'))
                                        <span class="red-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{--<div class="row">--}}
                                {{--<div class="col s12 m12 l12 ml-2 mt-1 input-field">--}}
                                    {{--<p>--}}
                                        {{--<label>--}}
                                            {{--<input type="checkbox" class="filled-in" name="remember" {{ old('remember') ? 'checked' : '' }} />--}}
                                            {{--<span>{{ __('Remember Me') }}</span>--}}
                                        {{--</label>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light border-round waves-light col s12" type="submit">{{ __('Login') }}</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin medium-small waves-light" ><a href="{{ route('register') }}">Registre-se</a></p>
                                </div>
                                <!--<div class="input-field col s6 m6 l6">
                                    <p class="margin right-align medium-small waves-light"><a class="right" href="{{ route('password.request') }}">{{ __('Esqueceu sua senha?') }}</a></p>
                                </div>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('custom-script.js') }}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    {{--</body>--}}
</section>
</div>
</div>
@include('_partial/scripts')
</body>
</html>














