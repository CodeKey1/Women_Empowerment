{{-- @extends('site.page')
@section('content')

    <!--SECTION START-->
    <section class="pop-cour" style="direction: rtl;">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>كل <span>التدريبات</span></h2>
                </div>
            </div>
            <div class="row">
                @isset($courses)
                    @foreach ($courses as $num => $courses)
                        <div class="col-md-12">
                            <div>
                                <!--POPULAR COURSES-->
                                <div class="home-top-cour">
                                    <!--POPULAR COURSES IMAGE-->
                                    <div class="col-md-3"> <img alt="image"src="{{ URL::to('images/course/' . $courses->image) }}"> </div>
                                    <!--POPULAR COURSES: CONTENT-->
                                    <div class="col-md-9 home-top-cour-desc">
                                        <a href="course-details.html">
                                            <h3> {{ $courses->name }} </h3>
                                        </a>
                                        <h4> {{ $courses->cat }} </h4>
                                        <p> {{ $courses->date }}</p> <span class="home-top-cour-rat">4.2</span>
                                        <div class="hom-list-share">
                                            <ul>

                                                <li><a href="{{ route('training.details',$courses->id) }}"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> تفاصيل التدريب </a> </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>
    <!--SECTION END-->

@endsection
@section('script')
@endsection --}}

@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h2 class="text-white" style="margin-top: 130px;"> منصـة التدريـب </h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <div class="row">
                                @isset($courses)
                                    @foreach ($courses as $num => $Courses)
                                        @if ($num <= 1)
                                            <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                                <div class="cours-bx">
                                                    <div class="action-box">
                                                        <img src="{{ asset('storage/' . $Courses->image) }}" alt="">
                                                        <a href="{{ route('training.details',$Courses->id) }}" class="btn"> اقراء المذيد </a>
                                                    </div>
                                                    <div class="info-bx text-center">
                                                        <h5><a href="#">{{ $Courses->name }}</a></h5>
                                                        <span>{{ $Courses->cat }}</span>
                                                    </div>
                                                    <div class="cours-more-info">
                                                        <div class="review">
                                                            <span>3 Review</span>
                                                            <ul class="cours-star">
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="price">
                                                            <del>$190</del>
                                                            <h5>free</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endisset
                                <div class="col-lg-12 m-b20">
                                    <div class="pagination-bx rounded-sm gray clearfix">
                                        <ul class="pagination">
                                            <li class="previous"><a href="#"><i class="ti-arrow-left"></i>
                                                    Prev</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 m-b30">
                            <div class="widget widget_archive">
                                <h5 class="widget-title style-1"> كل التدريبات </h5>
                                <ul>
                                    @isset($type)
                                        @foreach ($type as $num => $types)
                                            @if ($num <= 1)
                                                <li class="active"><a href="#">{{ $types->name }}</a></li>
                                            @endif
                                        @endforeach
                                    @endisset
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
