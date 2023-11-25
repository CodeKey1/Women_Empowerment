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
                    <div class="feature-filters clearfix center m-b40">
                        <ul class="filters" data-toggle="buttons">
                            <li data-filter="" class="btn active">
                                <input type="radio">
                                <a href="#"><span>الكل</span></a>
                            </li>
                            @isset($type)
                                @foreach ($type as $item)
                                    <li data-filter="{{ $item->name }}" class="btn">
                                        <input type="radio">
                                        <a href="#"><span>{{ $item->name }}</span></a>
                                    </li>
                                @endforeach
                            @endisset
                        </ul>
                    </div>
                    <div class="clearfix">
                        <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                            @isset($courses)
                                @foreach ($courses as $item)
                                    <li class="action-card col-lg-6 col-md-6 col-sm-12 {{ $item->type_name->name }}">
                                        <div class="event-bx m-b30" dir="rtl">
                                            <div class="action-box">
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                            </div>
                                            <div class="info-bx d-flex" style="justify-content: space-around;">
                                                <div>
                                                    <div class="event-time">
                                                        <div class="event-month">
                                                            {{ \Carbon\Carbon::parse($item->date)->format('d-m') }}
                                                        </div>
                                                        <div class="event-month">
                                                            {{ \Carbon\Carbon::parse($item->date)->format('Y') }}</div>
                                                    </div>
                                                </div>
                                                <div class="event-info">
                                                    <h4 class="event-title"><a href="#"> {{ $item->name }}</a>
                                                    </h4>
                                                    <p>{{ $item->details }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endisset
                        </ul>
                    </div>
                    {{-- <div class="row">

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
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
