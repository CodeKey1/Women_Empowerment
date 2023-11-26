@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        @include('Site.includes.slider')
        <div class="content-block" dir="">
            <!-- Our Services -->
            <div class="section-area content-inner service-info-bx">
                <div class="container">
                    <div class="row">
                        @isset($old_project)
                            @foreach ($old_project as $num => $N_project)
                                @if ($num <= 2)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="service-bx">
                                            <div class="action-box">
                                                <img src="{{ URL::to('images/ng/' . $N_project->image) }}" alt="">
                                            </div>
                                            <div class="info-bx text-center">
                                                <div class="feature-box-sm radius bg-white">
                                                    <i class="fa fa-bank text-primary"></i>
                                                </div>
                                                <h4><a href="#">{{ $N_project->name }}</a></h4>
                                                <a href="{{ route('namazeg-project_details', $N_project->id) }}"
                                                    class="btn radius-xl">اقراء المذيد </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endisset
                    </div>

                </div>
            </div>
            <!-- Our Services END -->
            <!-- Popular Courses -->
            <div class="section-area section-sp2 popular-courses-bx">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx left">
                            <h2 class="title-head"> {{ __('message.Project models') }} </h2>

                        </div>
                    </div>
                    <div class="row">
                        <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                            @isset($old_project)
                                @foreach ($old_project as $num => $N_project)
                                    @if ($num < 7)
                                        <div class="item">
                                            <div class="cours-bx">
                                                <div class="action-box">
                                                    <img src="{{ URL::to('images/ng/' . $N_project->image) }}"
                                                        alt="">
                                                    <a href="{{ route('namazeg-project_details', $N_project->id) }}"
                                                        class="btn"> للمزيد </a>
                                                </div>
                                                <div class="info-bx text-center">
                                                    <h5><a href="#">{{ $N_project->name }}</a></h5>
                                                    {{-- <span> {{ $N_project->details }} </span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Courses END -->

            <!-- Form -->
            <div class="section-area section-sp1 ovpr-dark bg-fix online-cours"
                style="background-image:url(assets/images/background/bg1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center text-white">
                            <h2>{{ __('message.Cross-platform') }}</h2>
                            <h5> {{ __('message.Have') }}
                            </h5>

                        </div>
                    </div>
                    <div class="mw800 m-auto">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3><i class="ti-user"></i><span class="counter">1.8</span>K</h3>
                                    </div>
                                    <span class="cours-search-text">مستفيد</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3><i class="ti-book"></i><span class="counter">924</span></h3>
                                    </div>
                                    <span class="cours-search-text">مشروع </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3><i class="ti-layout-list-post"></i><span class="counter">6</span>K
                                        </h3>
                                    </div>
                                    <span class="cours-search-text"> تدريبات عامة </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- training -->
            <div class="section-area section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-bx">
                            <h2 class="title-head m-b0"> التدريبــات </h2>

                        </div>
                    </div>
                    <div class="row">
                        <div
                            class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
                            @isset($courses)
                                @foreach ($courses as $num => $Courses)
                                    <div class="item" dir="rtl">
                                        <div class="event-bx">
                                            <div class="action-box">
                                                <img src="{{ asset('storage/' . $Courses->image) }}" alt="">
                                            </div>
                                            <div class="info-bx d-flex" style="justify-content: space-around;">
                                                <div>
                                                    <div class="event-time">
                                                        <div class="event-month">
                                                            {{ \Carbon\Carbon::parse($Courses->date)->format('d-m') }}
                                                        </div>
                                                        <div class="event-month">
                                                            {{ \Carbon\Carbon::parse($Courses->date)->format('Y') }}</div>
                                                    </div>
                                                </div>
                                                <div class="event-info">
                                                    <h4 class="event-title"><a href="#"> {{ $Courses->name }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('training') }}" class="btn"> كل التدريبات </a>
                    </div>
                </div>
            </div>

            <!-- quotes -->
            {{-- <div class="section-area section-sp2 bg-fix ovbl-dark"
                style="background-image:url(assets/images/background/bg1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-white heading-bx left">
                            <h2 class="title-head text-uppercase"> أقـوال مأثـورة <span></span></h2>

                        </div>
                    </div>
                    <div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                        <div class="item">
                            <div class="testimonial-bx">
                                <div class="testimonial-thumb">
                                    <img src="assets/images/testimonials/pic1.jpg" alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Peter Packer</h5>
                                    <p>-Art Director</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type...</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-bx">
                                <div class="testimonial-thumb">
                                    <img src="assets/images/testimonials/pic2.jpg" alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Peter Packer</h5>
                                    <p>-Art Director</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- quotes END -->

            <!--  News -->
            <div class="section-area section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx left">
                            <h2 class="title-head"> الأخبــار </h2>
                        </div>
                    </div>
                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                        @isset($news)
                            @foreach ($news as $num => $News)
                                <div class="item">
                                    <div class="recent-news">
                                        <div class="action-box">
                                            <img src="{{ asset('storage/' . $News->image) }}" alt="">
                                        </div>
                                        <div class="info-bx">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>{{ $News->date }}</a>
                                                </li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-details.html"> {{ $News->name }}
                                                </a></h5>
                                            <p> {{ $News->brief }} </p>
                                            <div class="post-extra">
                                                <a href="{{ route('news.details', $News->id) }}" class="btn-link">
                                                    للمزيد </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
            <!--  News End -->

        </div>
        <!-- contact area END -->
    </div>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="section-area section-sp2 bg-fix ovbl-dark"
            style="background-image:url(assets/images/background/bg1.jpg);padding-bottom: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-white heading-bx left">
                        <h2 class="title-head text-uppercase"> الشركــاء<span></span></h2>

                    </div>
                </div>
                <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                    <div class="item">
                        <div class="testimonial-thumb" style="position: relative !important">
                            <img src="assets/images/testimonials/pic1.jpg" alt="">
                        </div>
                    </div>
                    <div class="item"style="width: 100px">
                        <div class="testimonial-thumb" style="position: relative !important">
                            <img src="assets/images/testimonials/pic1.jpg" alt="">
                        </div>
                    </div>
                    <div class="item"style="width: 100px">
                        <div class="testimonial-thumb" style="position: relative !important">
                            <img src="assets/images/testimonials/pic1.jpg" alt="">
                        </div>
                    </div>
                    <div class="item"style="width: 100px">
                        <div class="testimonial-thumb"style="position: relative !important">
                            <img src="assets/images/testimonials/pic2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- Your Faq -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="heading-bx left">
                                <h2 class="m-b10 title-head"> <span> ارشادات رائدات الاعمال </span></h2>

                            </div>
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                @isset($guide)
                                    @foreach ($guide as $num => $guides)
                                        @if ($num <= 5)
                                            <div class="panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title">
                                                        <a data-toggle="collapse" href="#faq{{ $num + 1 }}"
                                                            class="collapsed" data-parent="#faq{{ $num + 1 }}">
                                                            {{ $guides->name }} </a>
                                                    </h6>
                                                </div>
                                                <div id="faq{{ $num + 1 }}" class="acod-body collapse">
                                                    <div class="acod-content"> {{ $guides->description }} </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="heading-bx left">
                                <h2 class="m-b10 title-head"> <span> مبادرات رائدات الاعمال </span></h2>
                            </div>

                            <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                @isset($mopadarat)
                                    @foreach ($mopadarat as $num => $Mopadarat)
                                        @if ($num < 5)
                                            <div class="panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title">
                                                        <a data-toggle="collapse" href="#faq{{ $num + 6 }}"
                                                            class="collapsed" data-parent="#faq{{ $num + 6 }}">
                                                            {{ $Mopadarat->name }} </a>
                                                    </h6>
                                                </div>
                                                <div id="faq{{ $num + 6 }}" class="acod-body collapse">
                                                    <div class="acod-content"> {{ $Mopadarat->description }} </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Your Faq End -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
