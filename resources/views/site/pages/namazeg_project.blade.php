@extends('site.page')
@section('content')
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
                @isset($old_project)
                    @foreach ($old_project as $num => $pg)
                        <div class="col-md-12">
                            <div>
                                <!--POPULAR COURSES-->
                                <div class="home-top-cour">
                                    <!--POPULAR COURSES IMAGE-->
                                    <div class="col-md-3">
                                        <img alt="image"src="{{ URL::to('images/ng/' . $pg->image) }}">

                                    </div>
                                    <!--POPULAR COURSES: CONTENT-->
                                    <div class="col-md-9 home-top-cour-desc">
                                        <a href="#">
                                            <h3> {{ $pg->name }}</h3>
                                        </a>
                                        <h4> </h4>
                                        <p> {{ $pg->details }}</p> <span class="home-top-cour-rat">4.2</span>
                                        <div class="hom-list-share">
                                            <ul>
                                                {{-- <li><a href="{{ route('namazeg') }}"><i class="fa fa-bar-chart"
                                                            aria-hidden="true"></i>
                                                        عرض المشروع </a> </li> --}}

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
@endsection
@section('script')
@endsection
