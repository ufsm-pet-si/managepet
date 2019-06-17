<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="{{ asset('images/avatar/avatar-7.png') }}" alt="" class="circle responsive-img valign profile-image cyan">
                </div>
                <div class="col col s8 m8 l8">
                    <p class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" data-activates="profile-dropdown-nav">
                        @if (!Auth::guest())
                            {{ Auth::user()->name }}
                        @else
                            Faça login
                        @endif
                        <i class="mdi-navigation-arrow-drop-down right"></i>
                    </p>
                    <p class="user-roal">
                        @if (!Auth::guest())
                            Olá {{ Auth::user()->type }}(a)
                        @endif
                    </p>            
                </div>
            </div>
        </li>
        <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
                <li class="item-menu bold active" id="dashboard">
                    <a href="{{'/'}}" class="waves-effect waves-cyan">
                        <i class="material-icons">dashboard</i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="item-menu bold" id="list-petianos">
                    <a href="{{'/petianos'}}" class="waves-effect waves-cyan">
                        <i class="material-icons">group</i>
                        <span class="nav-text">Petianos</span>
                    </a>
                </li>
                <li class="no-padding bold">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-cyan">
                                <i class="material-icons">format_list_numbered</i>
                                <span class="nav-text">Atividades</span>
                            </a>
                            <div class="collapsible-body">
                                <ul>
				    <li class="item-menu">
                                        <a href="{{'/categories'}}">Categorias</a>
                                    </li>
                                    <li class="item-menu">
                                        <a href="{{'/atividades'}}" >Edições</a>
                                    </li>
				    <li class="item-menu">
                                        <a href="{{'/participantes'}}">Participantes</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="item-menu bold">
                            <a href="{{'/certificados'}}" class="waves-effect waves-cyan">
                                <i class="material-icons">archive</i>
                                <span class="nav-text">Certificados</span>
                            </a>
                        </li>
                        <li class="item-menu bold">
                            <a href="{{'/agenda'}}" class="waves-effect waves-cyan">
                                <i class="material-icons">event_note</i>
                                <span class="nav-text">Agenda</span>
                            </a>
                        </li>
                        <li class="item-menu bold">
                            <a href="{{'/relatorios'}}" class="waves-effect waves-cyan">
                                <i class="material-icons">trending_up</i>
                                <span class="nav-text">Relatórios</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
                <i class="material-icons">menu</i>
            </a>
        </li>
    </ul>
</aside>
