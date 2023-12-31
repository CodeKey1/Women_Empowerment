{{-- <div id="loading-icon-bx"></div> --}}
<!-- Header Top ==== -->
<header class="header rs-nav header-transparent">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul>
                        <li><a href="#"> {{ __('message.A platform for female pioneers Business in Aswan') }}</a>
                        </li>
                    </ul>
                </div>

                <div class="topbar-right">
                    <ul>

                        <li> <a href="{{ route('Language', 'en') }}">English</a>
                        </li>
                        <li>
                            <a href="{{ route('Language', 'ar') }}">عربي</a>

                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li><a href="{{ route('login') }}"> {{ __('message.Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li><a href="{{ route('profile') }}"> {{ Auth::user()->name }} : {{ __('message.Welcome') }}
                                </a>
                            </li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    style="color: #f0ae06;">
                                    {{ __('message.Logout') }}</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                </form>
                            @endguest
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
            <div class="container clearfix">
                <!-- Header Logo ==== -->
                <div class="menu-logo">
                    <a href="{{ route('site') }}"><img src="assets/images/logo-white.png" alt=""></a>
                </div>
                <!-- Mobile Nav Button ==== -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                    data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>


                <!-- Navigation Menu ==== -->
                <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown"
                    style ="direction: rtl;">
                    <div class="menu-logo">
                        <a href="{{ route('site') }}"><img src="assets/images/logo.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('site') }}"> {{ __('message.Home') }} </a>
                        </li>
                        <li><a href="{{ route('about') }}"> {{ __('message.About') }} </a>
                        </li>
                        <li class="add-mega-menu"><a
                                href="{{ route('namazeg-project') }}">{{ __('message.Project models') }}</a>
                        </li>
                        <li class="nav-dashboard"><a href="{{ route('training') }}"> {{ __('message.Training') }}</a>
                        </li>
                        <li class="nav-dashboard"><a href="{{ route('stratgey') }}">{{ __('message.strategy') }}
                                </i></a>
                        </li>
                        <li class="nav-dashboard"><a href="{{ route('initiatives') }}">{{ __('message.Initiatives') }}
                            </a>
                        </li>
                        <li class="nav-dashboard"><a
                                href="{{ route('instructions') }}">{{ __('message.Instructions') }} </a>
                        </li>
                        <li class="nav-dashboard"><a href="{{ route('news') }}">{{ __('message.News') }} </a>
                        </li>
                        <li class="nav-dashboard"><a href="{{ route('Data') }}"> {{ __('message.Open data') }}</a>
                        </li>
                    </ul>

                </div>
                <!-- Navigation Menu END ==== -->
            </div>
        </div>
    </div>
</header>
<!-- Header Top END ==== -->
