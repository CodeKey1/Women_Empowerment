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
                                        <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                            <div class="cours-bx">
                                                <div class="action-box">
                                                    <img src="{{ asset('storage/' . $Courses->image) }}" alt="">
                                                    <a href="{{ route('training.details', $Courses->id) }}" class="btn">
                                                        اقراء المذيد </a>
                                                </div>
                                                <div class="info-bx text-center">
                                                    <h5><a href="#">{{ $Courses->name }}</a></h5>
                                                    <span>{{ $Courses->cat }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset
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
