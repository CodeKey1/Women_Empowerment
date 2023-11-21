<div id="loading-icon-bx"></div>
<!-- Header Top ==== -->
<header class="header rs-nav header-transparent">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul>
                        <li><a href="#"> منصة مسرعات المشروعات الخضراء الذكية لرائدات
                                الاعمال باسوان </a></li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul>
                        <li>
                            <select class="header-lang-bx">
                                <option>عربي</option>
                                <option>English</option>
                            </select>
                        </li>
                        @guest

                            {{-- @if (Route::has('register'))

                                <li><a href="{{ route('register') }}"> تسجيل </a>

                                </li>
                            @endif --}}
                            @if (Route::has('login'))

                                <li><a href="{{ route('login') }}"> تسجيل الدخول </a>
                                </li>
                            @endif
                        @else
                            <li><a href="{{ route('profile') }}" data-toggle="modal"> مرحباً :
                                    {{ Auth::user()->name }} </a>
                            </li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="color: #f0ae06;">
                                    تسجيل خروج </a>
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
                    <a href="{{route('site')}}"><img src="assets/images/logo-white.png" alt=""></a>
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
                        <a href="{{route('site')}}"><img src="assets/images/logo.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('site') }}"> الرئيسية </a>
                        </li>
                        <li><a href="{{ route('about') }}">عن المنصة </a>

                        </li>
                        <li class="add-mega-menu"><a href="{{ route('namazeg-project') }}">نماذج مشاريع </a>

                        </li>

                        <li class="nav-dashboard"><a href="{{ route('training') }}">التدريب </a>

                        </li>
                        <li class="nav-dashboard"><a href="{{ route('stratgey') }}">الإستراتيجية </i></a>

                        </li>
                        <li class="nav-dashboard"><a href="{{ route('news') }}">الأخبار </a>

                        </li>
                        <li class="nav-dashboard"><a href="{{ route('Data') }}"> البيانات المفتوحة</a>
                        </li>
                    </ul>

                </div>
                <!-- Navigation Menu END ==== -->
            </div>
        </div>
    </div>
</header>
<!-- Header Top END ==== -->
