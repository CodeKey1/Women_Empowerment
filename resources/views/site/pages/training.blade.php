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
                                                    <h4 class="event-title"><a
                                                            href="{{ route('training.details', $item->id) }}">
                                                            {{ $item->name }}</a>
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
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
