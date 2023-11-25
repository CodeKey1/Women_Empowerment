@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h2 class="text-white" style="margin-top: 130px;"><span style="color: #f7a935"> محتوي التدريب </span>
                    </h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    @isset($course)
                        <div class="row d-flex flex-row-reverse">
                            <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                                <div class="course-detail-bx">
                                    <div class="course-buy-now text-center">
                                        <a href="#" class="btn radius-xl text-uppercase">اشترك الان</a>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="price categories" style="flex: auto;">
                                            <span>فئة التدريب</span>
                                            <h5 class="text-primary">{{ $course->type_name->name }}</h5>
                                        </div>
                                    </div>
                                    <div class="course-info-list scroll-page" dir="rtl">
                                        <ul class="navbar">
                                            <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>نظرة عامة</a>
                                            </li>
                                            <li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>تفاصيل
                                                    التدريب</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-8 col-sm-12">
                                <div class="courses-post">
                                    <div class="ttr-post-media media-effect">
                                        <img src="{{ asset('storage/' . $course->image) }}" alt="">
                                    </div>
                                    <div class="ttr-post-info">
                                        <div class="ttr-post-title ">
                                            <h2 class="post-title">{{ $course->name }}</h2>
                                        </div>
                                        <div class="ttr-post-text">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="courese-overview" id="overview">
                                    <h4>نظرة عامة</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <h5 class="m-b5">تفاصيل التدريب</h5>
                                            <p>{{ $course->details }} </p>
                                            <h5 class="m-b5">تخصص التدريب</h5>
                                            <p> {{ $course->type_name->name }}</p>
                                            <h5 class="m-b5">ميعاد التدريب</h5>
                                            <ul class="list-checked primary">
                                                <li>{{ $course->date }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @isset($details)
                                    <div class="m-b30" id="curriculum">
                                        <h4>تفاصيل التدريب</h4>
                                        <ul class="curriculum-list">
                                            <li>
                                                <h5>متطلبات التدريب</h5>
                                                <p>{{ $details->pre_req }}</p>
                                            </li>
                                            <li>
                                                <h5>وصف التدريب</h5>
                                                <p>{{ $details->description }}</p>
                                            </li>
                                            <li>
                                                <h5>لمن هذا التدريب
                                                </h5>
                                                <p>{{ $details->for_whom }}</p>
                                            </li>
                                            <li>
                                                <h5>مكان التدريب
                                                </h5>
                                                <p>{{ $details->location }}</p>
                                            </li>
                                            <li>
                                                <h5>عروض تقديمية</h5>
                                                <ul>
                                                    @if ($details->video)
                                                        <li>
                                                            <video width="100%" controls>
                                                                <source src="{{ asset('storage/' . $details->video) }}"
                                                                    type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        </li>
                                                    @endif
                                                    @if ($details->presentation)
                                                        <li style="float: right">
                                                            <a href="{{ asset('storage/' . $details->presentation) }}"
                                                                target="_blank">اضغط هنا</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                @endisset
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
