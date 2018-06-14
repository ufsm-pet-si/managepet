<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav>
            <div class="nav-wrapper teal">
                @guest
                    <a href="{{ url('/') }}" class="brand-logo">{{ config('app.name') }}</a>
                @else
                    <a href="{{ url('/home') }}" class="brand-logo">{{ config('app.name') }}</a>
                @endguest
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    @guest
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                            <ul id="dropdown1" class="dropdown-content" tabindex="0" style="">
                                <li tabindex="0">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
                
        <ul class="sidenav" id="mobile-demo">
            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
        </ul>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        // inicialização do painel de navegação lateral para dispositivos móveis
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>

    <script>
        // inicialização do dropdown do menu do usuário
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems);
        });
    </script>
    
</body>
</html>
