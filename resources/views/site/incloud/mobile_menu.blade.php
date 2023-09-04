    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index-2.html"><img src="images/3.jpeg" style="height: 55px; width: 75px; margin:0;"
                                alt="" />
                        </a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>

                            <h4>الحساب الشخصي</h4>
                            <ul>
                                @guest

                                    @if (Route::has('register'))
                                        {{-- <li><a href="#!" data-toggle="modal" data-target="#modal2"> تسجيل </a>
                                        </li> --}}
                                        <li><a href="{{ route('register') }}"> تسجيل </a>
                                        </li>
                                    @endif
                                    @if (Route::has('login'))
                                        {{-- <li><a href="#!" data-toggle="modal" data-target="#modal1"> تسجيل الدخول </a>
                                        </li> --}}
                                        <li><a href="{{ route('login') }}"> تسجيل </a>
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
                            <h4>الصفحات</h4>
                            <ul>
                                <li><a href="{{ route('site') }}"> الرئيسية </a>
                                </li>
                                <li><a href="{{ route('about') }}"> عن المنصة </a>
                                </li>
                                <li><a href="{{ route('namazeg-project') }}"> نماذج المشاريع </a>
                                </li>
                                <li><a href="{{ route('namazeg') }}"> النماذج المشرفة </a>
                                </li>
                                <li><a href="{{ route('training') }}"> التدريب </a>
                                </li>
                                <li><a href="{{ route('stratgey') }}"> الإستراتيجية </a>
                                </li>
                                <li><a href="{{ route('Data') }}"> البيانات المفتوحة </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
