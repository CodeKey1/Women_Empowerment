@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h2 class="text-white" style="margin-top: 130px;"><span style="color: #f7a935"> محتوي التدريب </span>
                    </h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    @isset($details)
                        @foreach ($details as $num => $detail)
                            @if ($num <= 1)
                                <div class="row d-flex flex-row-reverse">
                                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                                        <div class="course-detail-bx">
                                            <div class="course-price">
                                                <del>$190</del>
                                                <h4 class="price">$120</h4>
                                            </div>
                                            <div class="course-buy-now text-center">
                                                <a href="#" class="btn radius-xl text-uppercase">Buy Now This
                                                    Courses</a>
                                            </div>
                                            <div class="teacher-bx">
                                                <div class="teacher-info">
                                                    <div class="teacher-thumb">
                                                        <img src="assets/images/testimonials/pic1.jpg" alt="" />
                                                    </div>
                                                    <div class="teacher-name">
                                                        <h5>Hinata Hyuga</h5>
                                                        <span>Science Teacher</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cours-more-info">
                                                <div class="review">
                                                    <span>3 Review</span>
                                                    <ul class="cours-star">
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price categories">
                                                    <span>Categories</span>
                                                    <h5 class="text-primary">Frontend</h5>
                                                </div>
                                            </div>
                                            <div class="course-info-list scroll-page">
                                                <ul class="navbar">
                                                    <li><a class="nav-link" href="#overview"><i
                                                                class="ti-zip"></i>Overview</a></li>
                                                    <li><a class="nav-link" href="#curriculum"><i
                                                                class="ti-bookmark-alt"></i>Curriculum</a></li>
                                                    <li><a class="nav-link" href="#instructor"><i
                                                                class="ti-user"></i>Instructor</a></li>
                                                    <li><a class="nav-link" href="#reviews"><i
                                                                class="ti-comments"></i>Reviews</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                        <div class="courses-post">
                                            <div class="ttr-post-media media-effect">
                                                <a href="#"><img src="assets/images/blog/default/thum1.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="ttr-post-info">
                                                <div class="ttr-post-title ">
                                                    <h2 class="post-title">{{ $detail->description }}</h2>
                                                </div>
                                                <div class="ttr-post-text">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="courese-overview" id="overview">
                                            <h4>Overview</h4>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4">
                                                    <ul class="course-features">
                                                        <li><i class="ti-book"></i> <span class="label">Lectures</span>
                                                            <span class="value">8</span>
                                                        </li>
                                                        <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span>
                                                            <span class="value">1</span>
                                                        </li>
                                                        <li><i class="ti-time"></i> <span class="label">Duration</span>
                                                            <span class="value">60 hours</span>
                                                        </li>
                                                        <li><i class="ti-stats-up"></i> <span class="label">Skill
                                                                level</span> <span class="value">Beginner</span></li>
                                                        <li><i class="ti-smallcap"></i> <span class="label">Language</span>
                                                            <span class="value">English</span>
                                                        </li>
                                                        <li><i class="ti-user"></i> <span class="label">Students</span>
                                                            <span class="value">32</span>
                                                        </li>
                                                        <li><i class="ti-check-box"></i> <span
                                                                class="label">Assessments</span> <span
                                                                class="value">Yes</span></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <h5 class="m-b5">Course Description</h5>
                                                    <p>{{ $detail->description }}</p>
                                                    <h5 class="m-b5">Certification</h5>
                                                    <p> </p>
                                                    <h5 class="m-b5">Learning Outcomes</h5>
                                                    <ul class="list-checked primary">
                                                        <li>Over 37 lectures and 55.5 hours of content!</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-b30" id="curriculum">
                                            <h4>Curriculum</h4>
                                            <ul class="curriculum-list">
                                                <li>
                                                    <h5>First Level</h5>
                                                    <ul>
                                                        <li>
                                                            <div class="curriculum-list-box">
                                                                <span>Lesson 1.</span> Introduction to UI Design
                                                            </div>
                                                            <span>120 minutes</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h5>Second Level</h5>
                                                    <ul>
                                                        <li>
                                                            <div class="curriculum-list-box">
                                                                <span>Lesson 1.</span> Prototyping and Design
                                                            </div>
                                                            <span>110 minutes</span>
                                                        </li>
                                                        <li>
                                                            <div class="curriculum-list-box">
                                                                <span>Lesson 2.</span> UI Design Capstone
                                                            </div>
                                                            <span>120 minutes</span>
                                                        </li>
                                                        <li>
                                                            <div class="curriculum-list-box">
                                                                <span>Lesson 3.</span> Evaluating User Interfaces Part 2
                                                            </div>
                                                            <span>120 minutes</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h5>Final</h5>
                                                    <ul>
                                                        <li>
                                                            <div class="curriculum-list-box">
                                                                <span>Part 1.</span> Final Test
                                                            </div>
                                                            <span>120 minutes</span>
                                                        </li>
                                                        <li>
                                                            <div class="curriculum-list-box">
                                                                <span>Part 2.</span> Online Test
                                                            </div>
                                                            <span>120 minutes</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        {{-- <div class="" id="reviews">
                                            <h4>Reviews</h4>

                                            <div class="review-bx">
                                                <div class="all-review">
                                                    <h2 class="rating-type">3</h2>
                                                    <ul class="cours-star">
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span>3 Rating</span>
                                                </div>
                                                <div class="review-bar">
                                                    <div class="bar-bx">
                                                        <div class="side">
                                                            <div>5 star</div>
                                                        </div>
                                                        <div class="middle">
                                                            <div class="bar-container">
                                                                <div class="bar-5" style="width:90%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="side right">
                                                            <div>150</div>
                                                        </div>
                                                    </div>
                                                    <div class="bar-bx">
                                                        <div class="side">
                                                            <div>4 star</div>
                                                        </div>
                                                        <div class="middle">
                                                            <div class="bar-container">
                                                                <div class="bar-5" style="width:70%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="side right">
                                                            <div>140</div>
                                                        </div>
                                                    </div>
                                                    <div class="bar-bx">
                                                        <div class="side">
                                                            <div>3 star</div>
                                                        </div>
                                                        <div class="middle">
                                                            <div class="bar-container">
                                                                <div class="bar-5" style="width:50%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="side right">
                                                            <div>120</div>
                                                        </div>
                                                    </div>
                                                    <div class="bar-bx">
                                                        <div class="side">
                                                            <div>2 star</div>
                                                        </div>
                                                        <div class="middle">
                                                            <div class="bar-container">
                                                                <div class="bar-5" style="width:40%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="side right">
                                                            <div>110</div>
                                                        </div>
                                                    </div>
                                                    <div class="bar-bx">
                                                        <div class="side">
                                                            <div>1 star</div>
                                                        </div>
                                                        <div class="middle">
                                                            <div class="bar-container">
                                                                <div class="bar-5" style="width:20%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="side right">
                                                            <div>80</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>

                                </div>
                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
