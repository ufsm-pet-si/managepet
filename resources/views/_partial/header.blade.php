<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed ">
        <nav class="navbar-color blue accent-1">
            <div class="nav-wrapper">
                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="index-manage.html" class="brand-logo darken-1">
                                <span class="logo-text hide-on-med-and-down">Manage PET</span>
                            </a>
                        </h1>
                    </li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="material-icons">search</i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Pesquisar" />
                </div>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                            Bem vindo(a) admin
                            <span class="avatar-status avatar-online">
                  <img src="{{asset('images/avatar/avatar-7.png')}}" alt="avatar">
                  <i></i>
                </span>
                        </a>
                    </li>
                </ul>
                <!-- profile-dropdown -->
                <ul id="profile-dropdown" class="dropdown-content">
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">face</i> Perfil</a>
                    </li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">settings</i> Configurações</a>
                    </li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">live_help</i> Ajuda</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">keyboard_tab</i> Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>

{{--<nav>--}}
    {{--<div class="nav-wrapper teal">--}}
        {{--@guest--}}
            {{--<a href="{{ url('/') }}" class="brand-logo">{{ config('app.name') }}</a>--}}
        {{--@else--}}
            {{--<a href="{{ url('/home') }}" class="brand-logo">{{ config('app.name') }}</a>--}}
        {{--@endguest--}}
        {{--<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>--}}
        {{--<ul class="right hide-on-med-and-down">--}}
            {{--@guest--}}
                {{--<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                {{--<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
            {{--@else--}}
                {{--<li>--}}
                    {{--<a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}--}}
                        {{--<i class="material-icons right">arrow_drop_down</i>--}}
                    {{--</a>--}}
                    {{--<ul id="dropdown1" class="dropdown-content" tabindex="0" style="">--}}
                        {{--<li tabindex="0">--}}
                            {{--<a href="{{ route('logout') }}" onclick="event.preventDefault();--}}
                                    {{--document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--@csrf--}}
                            {{--</form>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--@endguest--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}

{{--<ul class="sidenav" id="mobile-demo">--}}
    {{--<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
    {{--<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
{{--</ul>--}}