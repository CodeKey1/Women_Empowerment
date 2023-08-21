    <!--HEADER SECTION-->
    <section style="border-bottom: 4px solid #4c2d34;">
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-right">
                            <ul>
                                @guest

                                    @if (Route::has('register'))
                                        <li><a href="#!" data-toggle="modal" data-target="#modal2"> تسجيل </a>
                                        </li>
                                    @endif
                                    @if (Route::has('login'))
                                        <li><a href="#!" data-toggle="modal" data-target="#modal1"> تسجيل الدخول </a>
                                        </li>
                                    @endif
                                @else
                                    <li><a href="{{ route('profile') }}" data-toggle="modal"> مرحباً :
                                            {{ Auth::user()->name }} </a>
                                    </li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="{{ route('site') }}"><img src="images/3.jpeg" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('Data') }}"> البيانات المفتوحة </a>
                                </li>
                                <li><a href="{{ route('stratgey') }}"> الإستراتيجية </a>
                                </li>
                                <li><a href="{{ route('training') }}"> التدريب </a>
                                </li>
                                <li><a href="{{ route('namazeg') }}"> النماذج المشرفة </a>
                                </li>
                                <li><a href="{{ route('namazeg-project') }}"> نماذج المشاريع </a>
                                </li>
                                <li><a href="{{ route('about') }}"> عن المنصة </a>
                                </li>
                                <li><a href="{{ route('site') }}"> الرئيسية </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->
