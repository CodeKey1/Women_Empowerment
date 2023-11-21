@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h2 class="text-white" style="margin-top: 130px;"> أخبـار المنصـة </h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- Blog Grid ==== -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="ttr-blog-grid-3 row" id="masonry">
                        @isset($news)
                        @foreach ($news as $num => $News)
                            @if ($num <= 1)
                                <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                                    <div class="recent-news">
                                        <div class="action-box">
                                            <img src="{{ asset('storage/'. $News->image ) }}" alt="">
                                        </div>
                                        <div class="info-bx">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i> {{ $News->date }} </a></li>
                                                <li><a href="#"><i class="fa fa-user"></i> بواسطة : المسؤل </a></li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-details.html"> {{ $News->name }} </a></h5>
                                            <p> </p>
                                            <div class="post-extra">
                                                <a href="{{ route('news.details',$News->id) }}" class="btn-link"> للمذيد </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endisset
                </div>
                <!-- Pagination ==== -->
                <div class="pagination-bx rounded-sm gray clearfix">
                    <ul class="pagination">
                        <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                    </ul>
                </div>
                <!-- Pagination END ==== -->
            </div>
        </div>
        <!-- Blog Grid END ==== -->
    </div>
    <!-- contact area END -->
</div>
<!-- Content END-->
@include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
