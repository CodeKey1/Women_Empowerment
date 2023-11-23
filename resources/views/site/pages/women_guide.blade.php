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
