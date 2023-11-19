{{-- @extends('site.page')
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
                    <h2 class="text-white" style="margin-top: 130px;">  نمـاذج المشـاريع</h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
			<!-- Blog Grid ==== -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="ttr-blog-grid-3 row" id="masonry">
						<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
							<div class="recent-news">
								<div class="action-box">
									<img src="assets/images/blog/latest-blog/pic1.jpg" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>Jan 02 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By William</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">This Story Behind Education Will Haunt You Forever.</a></h5>
									<p>Knowing that, you’ve optimised your pages countless amount of times, written tons.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
							<div class="recent-news">
								<div class="action-box">
									<img src="assets/images/blog/latest-blog/pic2.jpg" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>Feb 05 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By John</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">What Will Education Be Like In The Next 50 Years?</a></h5>
									<p>As desperate as you are right now, you have done everything you can on your.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
							<div class="recent-news">
								<div class="action-box">
									<img src="assets/images/blog/latest-blog/pic3.jpg" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>April 14 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By George</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">Master The Skills Of Education And Be.</a></h5>
									<p>You will see in the guide all my years of valuable experience together with.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>23 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
							<div class="recent-news">
								<div class="action-box">
									<img src="assets/images/blog/latest-blog/pic3.jpg" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>March 21 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By Thomas</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">Eliminate Your Fears And Doubts About Education.</a></h5>
									<p>When I needed to start from scratch and figure out how things work. Getting people.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>28 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
							<div class="recent-news">
								<div class="action-box">
									<img src="assets/images/blog/latest-blog/pic1.jpg" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>May 08 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By James</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">Seven Reasons You Should Fall In Love With Education.</a></h5>
									<p>Honestly, I made ZERO money in the first year and I definitely do not want you to go.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>26 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
							<div class="recent-news">
								<div class="action-box">
									<img src="assets/images/blog/latest-blog/pic2.jpg" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>June 19 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By Arthur</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>
									<p>You may have seen our tool that's been featured by many world-class SEO marketers.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>15 Comment</a>
									</div>
								</div>
							</div>
						</div>
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

