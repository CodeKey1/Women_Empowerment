@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h2 class="text-white" style="margin-top: 130px;"> عـن المنصـة </h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- About Us END ==== -->
            <!-- Our Story ==== -->
            <div class="section-area bg-gray section-sp1 our-story">
                <div class="container">
                    <div class="row align-items-center d-flex">
                        <div class="col-lg-12 col-md-12">
                            <div class="heading-bx left">
                                <h5 class="m-b10 title-head" style="text-align: right; direction: rtl;"> عزيزتي رائدة
                                    الاعمال اهلا بيكي على منصة مسرعات المشروعات الخضراء الذكية لرائدات الاعمال باسوان .
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 heading-bx p-lr">
                            <div class="video-bx">
                                <img src="assets/images/about/pic1.jpg" alt="" style="width: 100% !important" />
                                <a href="https://www.youtube.com/watch?v=x_sJzVe9P_8" class="popup-youtube video"><i
                                        class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 heading-bx">

                            <p style="text-align: justify; direction: rtl;"> تحتوى المنصه على الكثير من المواضيع التى
                                تحتاجيها لتاسيس مشروعك الريادي خاصة المشروعات المهتمه بمعالجة القضيه البيئية .
                                المنصه تقوم بوضع ارشادات لتسريع المشروعات والتى تم تنفيذها في محافظة اسوان فاصبح المشروع
                                يتم تنفيذه في 100 يوم مع وضع خطة واجراءات تنفيذ ، مستفيدة من التجارب السابقه ونخبه من
                                الخبراء في مجال مسرعات اعمال رائدات الاعمال .
                                تحتوى المنصه على تدريبات سواء اون لاين او تدريبات يتم تقديمها من خلال مركز التدريب
                                والاستدامه التابع لمحافظة اسوان .
                                وايضا هناك قصص نجاح لسيدات نجحنا في اقامة مشروعات ولديك الفرصه الان لتكوني انتي قصه نجاح
                                وملهة لسيدات اخريات . </p>
                            <a href="{{ route('project.create') }}" class="btn"> سجل الأن </a>
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
