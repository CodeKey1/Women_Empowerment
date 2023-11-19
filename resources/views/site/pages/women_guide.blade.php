{{-- @extends('site.page')
@section('content')
    <!--SECTION START-->
    <section style="direction: rtl">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">

                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2> ارشادات <span> رائدات الاعمال </span></h2>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="s18-age-event l-info-pack-days">
                            <ul>
                                @isset($guide)
                                    @foreach ($guide as $num => $guides)

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
                    <h2 class="text-white" style="margin-top: 130px;"> ارشادات رائدات الاعمال </h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- Our Story ==== -->
            <div class="section-area section-sp1 our-story">
                <div class="container">
                    <div class="row align-items-center d-flex">
                        <div class="col-lg-12 col-md-12">
                            <div class="heading-bx left">
                                <h5 class="m-b10 title-head"> ارشادات رائدات الاعمال </h5>
                            </div>
                            <div class="ttr-accordion m-b30 faq-bx" id="accordion2">
                                <div class="row">
                                    @isset($guide)
                                        @foreach ($guide as $num => $guides)
                                            @if (++$num >= 6)
                                                <div class="col-md-6">
                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-toggle="collapse" href="#faq{{ $num }}"
                                                                    class="collapsed" data-parent="#faq{{ $num }}">
                                                                    {{ $guides->name }} </a>
                                                            </h6>
                                                        </div>
                                                        <div id="faq{{ $num }}" class="acod-body collapse">
                                                            <div class="acod-content"> {{ $guides->description }} </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endisset
                                    @isset($guide)
                                        @foreach ($guide as $num => $guides)
                                            @if (++$num < 5)
                                                <div class="col-md-6">
                                                    <div class="panel">
                                                        <div class="acod-head">
                                                            <h6 class="acod-title">
                                                                <a data-toggle="collapse" href="#faq{{ $num }}"
                                                                    class="collapsed" data-parent="#faq{{ $num }}">
                                                                    {{ $guides->name }} </a>
                                                            </h6>
                                                        </div>
                                                        <div id="faq{{ $num }}" class="acod-body collapse">
                                                            <div class="acod-content"> {{ $guides->description }} </div>
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
                </div>
            </div>
            <!-- Our Story END ==== -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
