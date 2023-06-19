@extends('site.site')
@section('content')
    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>ر حلة <span>رائدات أعمال</span></h2>
                    <p> رحلة رائدات اعمال المشروعات الذكية بأسوان </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" >
                                <img src="images/rehla.jpeg" alt="">

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ed-course">
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="all-courses.html">
                                    <img src="images/2.jpg" alt="">
                                    <span>مرحلة التفكير </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="db-time-line.html">
                                    <img src="images/1.jpg" alt="">
                                    <span> مرحلة تخطيط الأعمال </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="seminar.html">
                                    <img src="images/3.jpg" alt="">
                                    <span> مرحلة التنفيذ </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="events.html">
                                    <img src="images/4.png" alt="">
                                    <span>مرحلة النمو والتوسع </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- <div class="row">
                <div class="ed-course">

                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="all-courses.html">
                                <img src="images/h-about1.jpg" alt="">
                                <span>Couse</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="db-time-line.html">
                                <img src="images/h-adm.jpg" alt="">
                                <span>Exam Time Line</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div> --}}
        </div>
    </section>

    <!-- POPULAR COURSES -->
    <section class="pop-cour" style="direction: rtl">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2> نماذج <span> مشاريع </span></h2>
                    <p> نماذج مشاريع ناجحة </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/project/1.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>مجال المشغولات اليدوية</h3>
                                </a>
                                <h4> </h4>
                                <p>فكرة مشروع محل بيع المشغولات اليدوية في إنتاج الأعمال اليدوية البسيطة التي يُمكن
                                    استخدامها في تزيين المنازل وترتيبها، كالوسائد وقواعد الأكواب والأطباق والملاعق، أو
                                    الإكسسوارات
                                </p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                                                عرض المشروع </a> </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/project/3.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>تسميد عضوى </h3>
                                </a>
                                <h4> </h4>
                                <p>مشروع يقوم على استخدام روث الحيوانات وعمل كمبوست </p> <span
                                    class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                                                عرض المشروع </a> </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/project/2.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>تدوير الملابس </h3>
                                </a>
                                <h4> </h4>
                                <p>جمع الألبسة القديمة والمنتجات الأخرى القابلة لإعادة التدوير، واستفادة منها من خلال
                                    إصلاحها و إعادة استخدامها في صنع منتجات جديدة، ثم بيعها مرّة أخرى.</p> <span
                                    class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                                                عرض المشروع </a> </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/project/4.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>متجر هدايا صديق للبيئة </h3>
                                </a>
                                <h4> </h4>
                                <p> مشروع يقوم على بيع هدايا صديقه للبئية من اول ورق التغليف حتى الهديه </p> <span
                                    class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                                                عرض المشروع </a> </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section style="direction: rtl">
        <div class="container com-sp pad-bot-0">
            <div class="row">
                <div class="ho-ev-latest ho-ev-latest-bg-1">
                    <div class="ho-lat-ev">
                        <a href="{{ route('initiatives') }}">
                            <h4> المبادرات </h4>
                        </a>
                        <p> رائدات الاعمال </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ho-ev-latest ho-ev-latest-bg-2">
                        <div class="ho-lat-ev">
                            <h4> Job Vacants </h4>
                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/1.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Almost before we knew it, we had left the ground</h4>
                                    </a>
                                    <p>Etiam ornare lacus nec lectus vestibulum aliquam.</p>
                                    <span>Location: New York</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/2.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Then came the night of the first falling star.</h4>
                                    </a>
                                    <p>Vestibulum sollicitudin sem arcu</p>
                                    <span>Location: Los Angeles</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/3.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Educate to Empower NYE Party</h4>
                                    </a>
                                    <p>Vestibulum sollicitudin sem arcu, eget ullamcorper purus hendrerit</p>
                                    <span>Location: Chennai</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/4.jpg" alt=""></div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Then came the night of the first falling star.</h4>
                                    </a>
                                    <p>Venenatis lacus lectus.</p>
                                    <span>Location: Chicago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ho-ev-latest ho-ev-latest-bg-2">
                        <div class="ho-lat-ev">
                            <h4>Job Vacants</h4>
                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/1.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Almost before we knew it, we had left the ground</h4>
                                    </a>
                                    <p>Etiam ornare lacus nec lectus vestibulum aliquam.</p>
                                    <span>Location: New York</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/2.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Then came the night of the first falling star.</h4>
                                    </a>
                                    <p>Vestibulum sollicitudin sem arcu</p>
                                    <span>Location: Los Angeles</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/3.jpg" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Educate to Empower NYE Party</h4>
                                    </a>
                                    <p>Vestibulum sollicitudin sem arcu, eget ullamcorper purus hendrerit</p>
                                    <span>Location: Chennai</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-img"><img src="images/event/4.jpg" alt=""></div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4>Then came the night of the first falling star.</h4>
                                    </a>
                                    <p>Venenatis lacus lectus.</p>
                                    <span>Location: Chicago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                            @isset($mopadarat)
                                @foreach ($mopadarat as $num => $Mopadarat)
                                    @if ($num < 5)
                                        <li>
                                            <div class="ho-ev-date"><span>{{ $num + 1 }}</span><span></span>
                                            </div>
                                            <div class="ho-ev-link">
                                                <a href="events.html">
                                                    <h4> {{ $Mopadarat->name }}</h4>
                                                </a>
                                                <p>{{ $Mopadarat->description }}</p>
                                                <a href="{{ route('initiatives') }}">
                                                    <span> للمزيد </span>
                                                </a>

                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @endisset
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS AND EVENTS -->
    {{-- <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>News and <span>Events</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp">
                        <h4>Photo Gallery</h4>
                        <ul>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/8.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/9.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/10.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/11.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/1.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/2.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/3.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/4.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/5.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/6.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/7.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/8.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4>Video Gallery</h4>
                        <iframe src="https://www.youtube.com/embed/2WqFtiR4-F4?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>
                        <h5>Maecenas sollicitudin lacinia</h5>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-blog ho-event">
                        <h4>News & Event</h4>
                        <div class="ho-event">
                            <ul>
                                <li>
                                    <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Latinoo College Expo 2018</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Training at Team Fabio Clemente</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Nulla at velit convallis</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Admissions Information Session and Tour</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
