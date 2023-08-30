@extends('site.page')
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
                                                <li><a href="course-details.html"><i class="fa fa-bar-chart"
                                                            aria-hidden="true"></i>
                                                        للحجز</a> </li>
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
@endsection
