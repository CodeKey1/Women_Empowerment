{{-- @extends('site.sub_site')

@section('profile')
    @if (session('logged'))
        <script>
            setTimeout(function() {
                alert("loged in successfully");
            }, 100);
        </script>
    @endif
    <div class="pro-menu">
        <div class="container" style="direction: rtl">
            <div class="col-md-9 col-md-offset-3">
                <ul>
                    <li><a href="#" class="pro-act">المشاريع</a></li>
                    <li><a href="{{ route('success') }}">فرص النجاح</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="stu-db">
        <div class="container pg-inn">
            <div class="col-md-3">
                <div class="pro-user">
                    <img src="images/icon/seyasea.png" alt="user" style="background: #4c2d34;height: 220px;">
                </div>

                <div class="pro-user-bio">
                    <ul>
                        <li>
                            <h4>{{ Auth::user()->name }}</h4>
                        </li>
                        <div class="semi-deta">
                            <ul>
                                <li style="width: 60%;">رائدة أعمال </li>
                                <a href="{{ route('viewOwner') }}" style="color: white; font-weight: bolder;">
                                    <li style="width: 100%;"> الاعـــدادات </li>
                                </a>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="udb" style="direction: rtl">
                    <div class="udb-sec udb-cour-stat">
                        <h4><img src="images/icon/db3.png" alt="" /> المشاريع </h4>
                        <p> متابعة المشروع </p>
                        <div class="pro-con-table">
                            <table class="bordered responsive-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> اسم المشروع </th>
                                        <th> وقت التقديم </th>
                                        <th> فئة المشروع </th>
                                        <th> حالة </th>
                                        <th> عرض </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($apply)
                                        @foreach ($project as $num => $projects)
                                            <tr>
                                                <td>{{ $num + 1 }}</td>
                                                <td>{{ $projects->name }}</td>
                                                <td>{{ $projects->created_at->format('Y-d-m') }}</td>
                                                <td>{{ $projects->category }}</td>
                                                <td>{{ $projects->state }}</td>
                                                <td><a href="{{ route('viewProject', $projects->id) }}" class="ad-st-view"> عرض
                                                    </a></td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection --}}
@include('Site.includes.Header')
@section('css')
    <style>
        #report{
            display: none;
        }
    </style>
@endsection
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h2 class="text-white" style="margin-top: 130px;">  بيانات حساب/  {{ Auth::user()->name }}</h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- About Us END ==== -->
            <div class="section-area section-sp1" style="direction: rtl;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                            <div class="profile-bx text-center">
                                <div class="user-profile-thumb">
                                    <img src="assets/images/logo-white.png" alt=""
                                        style="width:100% !important" />
                                </div>
                                <div class="profile-info">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <span> رائدة الأعمال </span>
                                </div>
                                <div class="profile-tabnav">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#courses"
                                                style="text-align: right;"><i class="ti-book"></i> المشاريع </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#quiz-results"
                                                style="text-align: right;"><i
                                                class="ti-bookmark-alt"></i> فرص النجاح </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#edit-profile"
                                                style="text-align: right;"><i
                                                class="ti-pencil-alt"></i> تعديل بيانات الحساب  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#change-password"
                                                style="text-align: right;"><i class="ti-lock"></i> تعديل كلمة السر </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                            <div class="profile-content-bx">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="courses">
                                        <div class="profile-head">
                                            <h3> متابعةالمشاريع  </h3>
                                            {{-- <div class="feature-filters style1 ml-auto">
                                                <ul class="filters" data-toggle="buttons">
                                                    <li data-filter="" class="btn active">
                                                        <input type="radio">
                                                        <a href="#"><span>All</span></a>
                                                    </li>
                                                    <li data-filter="publish" class="btn">
                                                        <input type="radio">
                                                        <a href="#"><span>Publish</span></a>
                                                    </li>
                                                    <li data-filter="pending" class="btn">
                                                        <input type="radio">
                                                        <a href="#"><span>Pending</span></a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                        <div class="col-md-12">
                                            <div class="udb" style="direction: rtl">
                                                <div class="udb-sec udb-cour-stat">
                                                    <div class="pro-con-table">
                                                        <table class="table bordered responsive-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th> اسم المشروع </th>
                                                                    <th> وقت التقديم </th>
                                                                    <th> فئة المشروع </th>
                                                                    <th> حالة </th>
                                                                    {{-- <th> عرض </th> --}}
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @isset($apply)
                                                                    @foreach ($project as $num => $projects)
                                                                        <tr>
                                                                            <td>{{ $num + 1 }}</td>
                                                                            <td>{{ $projects->name }}</td>
                                                                            <td>{{ $projects->created_at->format('Y-d-m') }}</td>
                                                                            <td>{{ $projects->category }}</td>
                                                                            <td>{{ $projects->state }}</td>
                                                                            {{-- <td><a href="{{ route('viewProject', $projects->id) }}" class="ad-st-view"> عرض
                                                                                </a></td> --}}
                                                                        </tr>
                                                                    @endforeach
                                                                @endisset
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        {{-- <div class="courses-filter">
                                            <div class="clearfix">
                                                <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                                                    <li
                                                        class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
                                                        <div class="cours-bx">
                                                            <div class="action-box">
                                                                <img src="assets/images/courses/pic1.jpg"
                                                                    alt="">
                                                                <a href="#" class="btn">Read More</a>
                                                            </div>
                                                            <div class="info-bx text-center">
                                                                <h5><a href="#">Introduction EduChamp – LMS
                                                                        plugin</a></h5>
                                                                <span>Programming</span>
                                                            </div>
                                                            <div class="cours-more-info">
                                                                <div class="review">
                                                                    <span>3 Review</span>
                                                                    <ul class="cours-star">
                                                                        <li class="active"><i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="active"><i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="active"><i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="price">
                                                                    <del>$190</del>
                                                                    <h5>$120</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="tab-pane" id="quiz-results">
                                        <div class="profile-head">
                                            <h3> احسب فرصة نجاحك بالمشروع </h3>
                                        </div>
                                        <div class="courses-filter">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group col-md-12">
                                                                <label>مبلغ الاستثمار للمشروع (رأس المال
                                                                    المستثمر)</label>
                                                                <input style="height: calc(2.25rem + 6px);"
                                                                    type="number" step="0.1" id="capital"
                                                                    class="form-control"placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>الربح المتوقع للعام الأول</label>
                                                                <input style="height: calc(2.25rem + 6px);"
                                                                    type="number" step="0.1" id="f_year"
                                                                    class="form-control cashFlow"placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>الربح المتوقع للعام الثاني</label>
                                                                <input style="height: calc(2.25rem + 6px);"
                                                                    type="number" step="0.1" id="s_year"
                                                                    class="form-control cashFlow"placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>الربح المتوقع للعام الثالث</label>
                                                                <input style="height: calc(2.25rem + 6px);"
                                                                    type="number" step="0.1" id="t_year"
                                                                    class="form-control cashFlow"placeholder="">
                                                            </div>
                                                        </div>
                                                        <button type="submit" onclick="calculateNPV()"
                                                            class="btn btn-success" style="float: left;">احسب فرص
                                                            النجاح</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="udb-sec udb-cour-stat" id="report" style=" display: none;">
                                                <h4> تقرير فرص نجاح
                                                    مشروعك </h4>
                                                <p> التقرير </p>
                                                <div class="pro-con-table">
                                                    <table class="bordered responsive-table">
                                                        <thead>
                                                            <tr>
                                                                <th> المؤشر </th>
                                                                <th> القيمة </th>
                                                                <th> وصف </th>
                                                                <th> توصيات </th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>مؤشر صافي القيمة الحالية</td>
                                                                <td id="NetPresentValue"></td>
                                                                <td id="NetPresentValue_note"></td>
                                                                <td id="NetPresentValue_desc"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>مؤشر ربحية المشروع</td>
                                                                <td id="ProfitIndecator"></td>
                                                                <td id="ProfitIndecator_note"></td>
                                                                <td id="ProfitIndecator_desc"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>معدل العائد الداخلى</td>
                                                                <td id="IRR"></td>
                                                                <td id="IRR_note"></td>
                                                                <td id="IRR_desc"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="edit-profile">
                                        <div class="profile-head">
                                            <h3> تعديل بيانات الحساب </h3>
                                        </div>
                                        <form class="edit-profile">
                                            <div class="">
                                                <div class="form-group row">
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                        <h3>1. Personal Details</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Full
                                                        Name</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text"
                                                            value="Mark Andre">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Occupation</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text" value="CTO">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Company
                                                        Name</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text" value="EduChamp">
                                                        <span class="help">If you want your invoices addressed to a
                                                            company. Leave blank to use your full name.</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Phone
                                                        No.</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text"
                                                            value="+120 012345 6789">
                                                    </div>
                                                </div>

                                                <div class="seperator"></div>

                                                <div class="form-group row">
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                        <h3>2. Address</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Address</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text"
                                                            value="5-S2-20 Dummy City, UK">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">City</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text" value="US">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">State</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text"
                                                            value="California">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Postcode</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text" value="000702">
                                                    </div>
                                                </div>

                                                <div
                                                    class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                        <h3 class="m-form__section">3. Social Links</h3>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Linkedin</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text"
                                                            value="www.linkedin.com">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Facebook</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text"
                                                            value="www.facebook.com">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Twitter</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text"
                                                            value="www.twitter.com">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Instagram</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text"
                                                            value="www.instagram.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-3 col-md-3 col-lg-2">
                                                        </div>
                                                        <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                            <button type="reset" class="btn">Save
                                                                changes</button>
                                                            <button type="reset"
                                                                class="btn-secondry">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="change-password">
                                        <div class="profile-head">
                                            <h3> تعديل كلمة السر الخاصة بكي </h3>
                                        </div>
                                        <form class="edit-profile">
                                            <div class="">
                                                <div class="form-group row">
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-9 ml-auto">
                                                        <h3>Password</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Current
                                                        Password</label>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                        <input class="form-control" type="password" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">New
                                                        Password</label>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                        <input class="form-control" type="password" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Re
                                                        Type New Password</label>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                        <input class="form-control" type="password" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                                </div>
                                                <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                    <button type="reset" class="btn">Save changes</button>
                                                    <button type="reset" class="btn-secondry">Cancel</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
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
@section('script')
    <script>
        function calculateNPV() {
            var rate = 18;
            var initialCost = parseInt(document.getElementById('capital').value);
            var cashFlows = [];
            cashFlows[0] = parseInt(document.getElementById('f_year').value);
            cashFlows[1] = parseInt(document.getElementById('s_year').value);
            cashFlows[2] = parseInt(document.getElementById('t_year').value);
            var npv = 0;
            var NetPresentValue = (-initialCost);
            var ProfitIndecator = initialCost;
            for (var i = 0; i < cashFlows.length; i++) {
                npv += cashFlows[i] / Math.pow(rate / 100 + 1, i + 1);
            }
            NetPresentValue += npv;
            ProfitIndecator = npv / ProfitIndecator;
            document.getElementById("report").style.display = "block";
            /*=========================================================================*/
            /*=========================== IRR function ================================*/
            /*=========================================================================*/
            const flows = [-initialCost, cashFlows[0], cashFlows[1], cashFlows[2]];
            const irr = calculateIRR(flows) * 100;
            console.log("irr = " + calculateIRR(flows))
            /*=========================================================================*/
            /*====================printing result in html==============================*/
            /*=========================================================================*/
            document.getElementById('NetPresentValue').innerHTML = Math.round(NetPresentValue);
            document.getElementById('ProfitIndecator').innerHTML = ProfitIndecator.toFixed(2);
            document.getElementById('IRR').innerHTML = Math.round(irr) + "%";
            /*=========================================================================*/
            /*====================printnig description in html=========================*/
            /*=========================================================================*/
            //NetPresentValue
            if (NetPresentValue > 0) {
                document.getElementById('NetPresentValue_desc').innerHTML =
                    "فكري في الاستثمار في هذا المشروع. كلما ارتفع صافي القيمة الحالية ، كان الاستثمار أكثر ربحية. من المرجح أن يكون المشروع ناجحًا.";
                document.getElementById('NetPresentValue_note').innerHTML = "سيحقق الاستثمار ربحًا";
            } else if (NetPresentValue < 0) {
                document.getElementById('NetPresentValue_desc').innerHTML =
                    "لا ننصحك بالمضى قدما في هذا المشروع من غير المحتمل أن يكون المشروع ناجحًا، وقد يولد خسائر ننصحك بمراجعة الدورات على منصتنا الذكية واكتشاف نفسك مرة أخرى "
                document.getElementById('NetPresentValue_note').innerHTML = "الاستثمار سوف يكسر";
            } else {
                document.getElementById('NetPresentValue_desc').innerHTML =
                    "لن يولد الاستثمار ربحًا أو خسارة. قد يكون المشروع ناجحً ا وقد لا يكون كذلك. راجعي دراسة جدوى المشروع والمخاطر المتوقعة وأعيدي النظر في تصميم المشروع "
                document.getElementById('NetPresentValue_note').innerHTML = "الاستثمار سيولد خسارة";
            }
            //ProfitIndecator
            if (ProfitIndecator > 3) {
                document.getElementById('ProfitIndecator_desc').innerHTML =
                    "من المتوقع أن يولد الاستثمار ربحًا كبيرًا جدًا. يكاد يكون من المؤكد أن يكون المشروع ناجحًا.";
                document.getElementById('ProfitIndecator_note').innerHTML = "الاستثمار المتميز";
            } else if (ProfitIndecator > 2 && ProfitIndecator <= 3) {
                document.getElementById('ProfitIndecator_desc').innerHTML =
                    "من المتوقع أن يولد الاستثمار ربحًا كبيرًا. من المحتمل جدًا أن يكون المشروع ناجحًا.";
                document.getElementById('ProfitIndecator_note').innerHTML = "استثمار ممتاز";
            } else if (ProfitIndecator > 1 && ProfitIndecator <= 2) {
                document.getElementById('ProfitIndecator_desc').innerHTML =
                    "من المتوقع أن يولد الاستثمار ربحًا. من المرجح أن يكون المشروع ناجحًا.";
                document.getElementById('ProfitIndecator_note').innerHTML = "استثمار جيد";
            } else {
                document.getElementById('ProfitIndecator_desc').innerHTML =
                    "المشروع سيولد خسارة  قد يكون المشروع ناجحًا وقد لا يكون كذلك.";
                document.getElementById('ProfitIndecator_note').innerHTML = "الاستثمار سيولد خسارة";
            }
            //IRR
            if (irr > 25) {
                document.getElementById('IRR_desc').innerHTML =
                    "استثمار نادر وعائد مرتفع للغاية. ضع في اعتبارك فقط إذا كنت من ذوي الخبرة والراحة في التعامل مع المخاطر.";
                document.getElementById('IRR_note').innerHTML = "استثنائي";
            } else if (irr > 20 && irr <= 25) {
                document.getElementById('IRR_desc').innerHTML =
                    "استثمار جيد للغاية ، ولكن كن على دراية بأن هناك دائمًا بعض المخاطر التي تنطوي عليها.";
                document.getElementById('IRR_note').innerHTML = "ممتاز";
            } else if (irr > 15 && irr <= 20) {
                document.getElementById('IRR_desc').innerHTML =
                    "ضع في اعتبارك الاستثمار إذا كنت مرتاحًا للمخاطر وكان الاستثمار متوافقًا مع أهدافك المالية.";
                document.getElementById('IRR_note').innerHTML = "جيد";
            } else if (irr > 10 && irr <= 15) {
                document.getElementById('IRR_desc').innerHTML =
                    "قد يكون استثمارًا جيدًا ، ولكن قم بأبحاثك للتأكد من أن المخاطرة مبررة.";
                document.getElementById('IRR_note').innerHTML = "متوسط";
            } else {
                document.getElementById('IRR_desc').innerHTML =
                    "يعتبر الاستثمار استثمارًا سيئًا. هذا يعني أن الاستثمار لن يولد ربحًا كافيًا لتعويض المستثمر عن المخاطر التي ينطوي عليها    في اعتبارك خيارات الاستثمار الأخرى ذات العوائد المرتفعة المحتملة.";
                document.getElementById('IRR_note').innerHTML = "قليل";
            }
        }

        function calculateIRR(cashFlows) {
            const epsilon = 0.000001; // Desired precision
            let irr = 0; // Initial guess for IRR
            let npv;
            do {
                npv = 0;
                for (let i = 0; i < cashFlows.length; i++) {
                    npv += cashFlows[i] / Math.pow(1 + irr, i);
                }
                irr += epsilon;
            } while (npv > 0);
            return irr;
        }
    </script>
@endsection
@include('Site.includes.Footer')

