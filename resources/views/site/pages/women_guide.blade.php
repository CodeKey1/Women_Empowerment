@extends('site.page')
@section('content')
    <!--SECTION START-->
    <section style="direction: rtl">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">

                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2> ارشادات <span> رائدات الاعمال </span></h2>
                            {{-- <p> استراتيجية مسرعات رائدات الاعمال للمشروعات الخضراء الذكيه </p> --}}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="s18-age-event l-info-pack-days">
                            <ul>
                                @isset($guide)
                                    @foreach ($guide as $num => $guides )

                                    <li>
                                        <div class="age-eve-com age-eve-1" style="background: none !important;">
                                            <div class="ho-ev-date" style="width: 80%;">
                                                <span>{{ $num + 1 }}</span><span></span>
                                            </div>
                                        </div>
                                        <div class="s17-eve-time">
                                            <div class="s17-eve-time-msg">
                                                <h4> {{ $guides->name }}</h4>
                                                <p> </p>
                                                <div class="time-hide time-hide-{{ $num + 1 }}">
                                                    <h5></h5>
                                                    <p> {{ $guides->description }}</p>
                                                </div>
                                                <a href="#!"
                                                    class="s17-sprit age-dwarr-btn time-hide-{{ $num + 1 }}-btn">
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#!"
                                                    class="s17-sprit age-dwarr-btn time-hide-{{ $num + 1 }}{{ $num + 1 }}-btn hb-com">
                                                    <i class="fa fa-angle-up"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    @endforeach
                                @endisset
                            </ul>
                        </div>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
@section('script')
    @foreach ($guide as $num => $guides)
        <script>
            $(".time-hide-{{ $num +1 }}-btn").on('click', function() {
                $(".time-hide-{{ $num +1 }}, .time-hide-{{ $num +1 }}{{ $num +1 }}-btn").slideDown();
                $(".time-hide-{{ $num +1 }}-btn").fadeOut();
            });
            $(".time-hide-{{ $num +1 }}{{ $num +1 }}-btn").on('click', function() {
                $(".time-hide-{{ $num +1 }}, .time-hide-{{ $num +1 }}{{ $num +1 }}-btn").slideUp();
                $(".time-hide-{{ $num +1 }}-btn").fadeIn();
            })
        </script>
    @endforeach
@endsection
