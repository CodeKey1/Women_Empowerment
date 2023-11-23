@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h2 class="text-white" style="margin-top: 130px;"><span
                            style="color: #f7a935">{{ $new->name }}</span> </h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- Blog Grid ==== -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-12 col-xl-12">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="action-box blog-lg">
                                        <img src="{{ asset('storage/' . $new->image) }}" alt="">
                                    </div>
                                    <br>
                                    <div class="action-box blog-lg">
                                        <video width="100%" controls>
                                            <source src="{{ asset('storage/' . $new->video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>

                                <!-- blog start -->
                                <div class="col-lg-6 col-xl-6">

                                    <div class="heading-bx left">
                                        <h5 class="m-b10 title-head" style="text-align: right; direction: rtl;">
                                            {{ $new->name }} </h5>
                                    </div>

                                    <div class="recent-news blog-lg">

                                        <div class="info-bx">
                                            <p>{{ $new->details }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog END -->
                        </div>
                        <!-- Left part END -->
                    </div>
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
