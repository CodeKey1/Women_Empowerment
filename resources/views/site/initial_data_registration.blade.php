@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <div class="content-block">
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h2 class="text-white" style="margin-top: 130px;"> اكملي تسجيل مشروعك </h2>
                    </div>
                </div>
            </div>
            <div class="page-content bg-white">
                <div class="content-block">
                    <div class="section-area section-sp1">
                        <div class="container">
                            <div class="row" dir="rtl">
                                @if (App\Models\Project::where('id', $owner_id)->exists('id'))
                                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                                        <div class="profile-bx text-center">
                                            <div class="profile-info">
                                                <h4>خطوات تسجيل المشروع</h4>
                                            </div>
                                            <div class="profile-tabnav">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ session('risk_active') ? 'active' : null }}"
                                                            data-toggle="tab" href="#risk" style="float: right;"><i
                                                                class="ti-user"></i> المخاطر
                                                            المحتملة </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ session('drasa_active') ? 'active' : null }}"
                                                            data-toggle="tab" href="#drasa" style="float: right;"><i
                                                                class="ti-book"></i> دراسة
                                                            الجدوى </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ session('plan_active') ? 'active' : null }}"
                                                            data-toggle="tab" href="#plan" style="float: right;"><i
                                                                class="ti-book"></i> خطة
                                                            المشروع </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ session('template_active') ? 'active' : null }}"
                                                            data-toggle="tab" href="#template" style="float: right;"><i
                                                                class="ti-book"></i> نموذج
                                                            العمل </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ session('mosher_active') ? 'active' : null }}"
                                                            data-toggle="tab" href="#mosher" style="float: right;"><i
                                                                class="ti-book"></i> مؤشرات
                                                            الاداء </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                                        <div class="profile-content-bx">
                                            <div class="tab-content">
                                                <div class="tab-pane {{ session('risk_active') ? 'active' : null }}"
                                                    id="risk">
                                                    <div class="profile-head">
                                                        <h3> المخاطر المحتملة للمشروع </h3>
                                                    </div>
                                                    @if (!App\Models\Project_risk::where('project_id', $owner_id)->exists('project_id'))
                                                        <form class="form-horizontal" style="font-family: system-ui;"
                                                            action="{{ route('project.data.store', $owner_id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                                    <label class="control-label col-12"> الخطر المحتمل
                                                                        <span style="color: red">*</span></label>
                                                                    <input type="text" name="name"
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="col-md-2 col-sm-6 col-xs-6">
                                                                    <label class="control-label col-12"> الشدة <span
                                                                            style="color: red">*</span></label>
                                                                    <div class="slidecontainer">
                                                                        <input type="range" name="degree"
                                                                            min="1" max="5" value="0"
                                                                            style="margin: 0" id="myRange"
                                                                            onchange="divideBy()" required>
                                                                        <p>الشدة: <span id="demo"
                                                                                onkeyup="calculate()"></span></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-sm-6 col-xs-6">
                                                                    <label class="control-label col-12"> الإحتمال <span
                                                                            style="color: red">*</span></label>
                                                                    <div class="slidecontainer">
                                                                        <input type="range" min="1"
                                                                            max="5" value="0"
                                                                            name="possibility" style="margin: 0"
                                                                            id="myRange1" onchange="divideBy()"
                                                                            required>
                                                                        <p>الاحتمالية: <span id="demo1"
                                                                                onkeyup="calculate()"></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-sm-6 col-xs-6">
                                                                    <label class="control-label col-12"> التقيم </label>
                                                                    <div class="slidecontainer">
                                                                        <input class="form-control" id="result"
                                                                            name="evaluation" type="button"
                                                                            Value="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label col-12"> اجراءات
                                                                        التعامل
                                                                        مع الخطر <span
                                                                            style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="procedures" cols="5" rows="5" required></textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row"
                                                                style="justify-content: space-around;">
                                                                <button type="submit" name="formType"
                                                                    value="projectRisk" class="btn">حفظ -
                                                                    التالي</button>
                                                            </div>
                                                            <br>
                                                        </form>
                                                    @else
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <h3>تم تسجيل هذه البيانات</h3>
                                                                <h4>للتعديل <a
                                                                        href="{{ route('viewProject', $owner_id) }}">اضغط
                                                                        هنا</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @endif
                                                </div>
                                                <div class="tab-pane {{ session('drasa_active') ? 'active' : null }}"
                                                    id="drasa">
                                                    <div class="profile-head">
                                                        <h3> دراسة الجدوى </h3>
                                                    </div>
                                                    @if (!App\Models\Project_study::where('project_id', $owner_id)->exists('project_id'))
                                                        <form class="form-horizontal" style="font-family: system-ui;"
                                                            action="{{ route('project.data.store', $owner_id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label col-sm-6"> تحليل السوق
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="market" cols="5" rows="5"
                                                                        placeholder="تقييم حجم السوق المستهدف وإمكانيات نموه واتجاهاته" required></textarea>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label col-sm-6"> التحليل
                                                                        التنافسي
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="competitive" cols="5" rows="5"
                                                                        placeholder="تقييم نقاط القوة والضعف في المنافسة." required></textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label col-sm-6"> الجدوى
                                                                        الفنية
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="technical" cols="5" rows="5"
                                                                        placeholder="الموارد والقدرات الفنية المطلوبة لتطوير وإطلاق المنتج أو الخدمة" required></textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label col-sm-6"> رأس المال
                                                                        المستثمر تدفقات
                                                                        الايرادات المحتملة <span
                                                                            style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="finance" cols="5" rows="5"
                                                                        placeholder="رأس المال المستثمر تدفقات الايرادات المحتملة" required></textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label col-sm-6"> ملخص لنتائج
                                                                        الدراسةوتوصيات
                                                                        لستقبل
                                                                        المشروع <span
                                                                            style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="recommendation" cols="5" rows="5" placeholder="" required></textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row"
                                                                style="justify-content: space-around;">
                                                                <button type="submit" name="formType"
                                                                    value="projectStudy" class="btn">حفظ -
                                                                    التالي</button>
                                                            </div>
                                                            <br>
                                                        </form>
                                                    @else
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <h3>تم تسجيل هذه البيانات</h3>
                                                                <h4>للتعديل <a
                                                                        href="{{ route('viewProject', $owner_id) }}">اضغط
                                                                        هنا</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @endif
                                                </div>
                                                <div class="tab-pane {{ session('plan_active') ? 'active' : null }}"
                                                    id="plan">
                                                    <div class="profile-head">
                                                        <h3> خطة المشروع </h3>
                                                    </div>
                                                    @if (!App\Models\Project_Plan::where('project_id', $owner_id)->exists('project_id'))
                                                        <form class="form-horizontal" style="font-family: system-ui;"
                                                            action="{{ route('project.data.store', $owner_id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div id="plane">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                                                        <label class="control-label "> البداية <span
                                                                                style="color: red">*</span></label>
                                                                        <input type="date" name="start_date[]"
                                                                            class="form-control plane-input" required>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                                                        <label class="control-label "> النهاية <span
                                                                                style="color: red">*</span></label>
                                                                        <input type="date" name="end_date[]"
                                                                            class="form-control plane-input" required>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> المهام <span
                                                                                style="color: red">*</span></label>
                                                                        <input type="text" name="name[]"
                                                                            class="form-control plane-input" required>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> المتابعة
                                                                            <span style="color: red">*</span></label>
                                                                        <input type="text" name="follower[]"
                                                                            class="form-control plane-input" required>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> المسؤول
                                                                            <span style="color: red">*</span></label>
                                                                        <input type="text" name="responsible[]"
                                                                            class="form-control plane-input" required>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <a href="javascript:void(0)"
                                                                        style="float: left;background-color: seagreen;color: white;border-radius: 6px;width: 10%;"
                                                                        id="addplan-btn" class="btn btn-primary"
                                                                        onclick="addplanRow()">
                                                                        +
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="row"
                                                                style="justify-content: space-around;">
                                                                <button type="submit" name="formType"
                                                                    value="projectPlan" class="btn">حفظ -
                                                                    التالي</button>
                                                            </div>
                                                            <br>
                                                        </form>
                                                    @else
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <h3>تم تسجيل هذه البيانات</h3>
                                                                <h4>للتعديل <a
                                                                        href="{{ route('viewProject', $owner_id) }}">اضغط
                                                                        هنا</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @endif
                                                </div>
                                                <div class="tab-pane {{ session('template_active') ? 'active' : null }}"
                                                    id="template">
                                                    <div class="profile-head">
                                                        <h3> نموذج العمل </h3>
                                                    </div>
                                                    @if (!App\Models\Project_form::where('project_id', $owner_id)->exists('project_id'))
                                                        <form class="form-horizontal" style="font-family: system-ui;"
                                                            action="{{ route('project.data.store', $owner_id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row" dir="rtl">
                                                                <div class="col col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> فئات العملاء
                                                                            <span style="color: red">*</span></label>
                                                                        <textarea class="form-control" name="customer_categories" cols="3" rows="25" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> استراتيجية جذب
                                                                            العملاء:
                                                                            <span style="color: red">*</span></label>
                                                                        <textarea class="form-control" name="attract_clients" cols="3" rows="8" required></textarea>
                                                                    </div>
                                                                    <div class="w-100"></div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> قنوات الوصول
                                                                            للعملاء
                                                                            <span style="color: red">*</span></label>
                                                                        <textarea class="form-control" name="project_access" cols="3" rows="8" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> القيمة المقدمة:
                                                                            <span style="color: red">*</span></label>
                                                                        <textarea class="form-control" name="provided_value" cols="3" rows="15" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> الموارد الرئيسية:
                                                                            <span style="color: red">*</span></label>
                                                                        <textarea class="form-control" name="main_resorce" cols="3" rows="8" required></textarea>
                                                                    </div>
                                                                    <div class="w-100"></div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> الأنشطة الرئيسية:
                                                                            <span style="color: red">*</span></label>
                                                                        <textarea class="form-control" name="main_activity" cols="3" rows="8" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <label class="control-label"> الشركاء الرئيسين
                                                                            <span style="color: red">*</span></label>
                                                                        <textarea class="form-control" name="partners" cols="3" rows="15" required></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label class="control-label"> مصادر الدخل: <span
                                                                            style="color: red">*</span></label>
                                                                    <input class="form-control" name="income_source"
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label class="control-label"> التكاليف: <span
                                                                            style="color: red">*</span></label>
                                                                    <input class="form-control" name="cost"
                                                                        min="0" type="number" required>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row"
                                                                style="justify-content: space-around;">
                                                                <button type="submit" name="formType"
                                                                    value="workForm" class="btn">حفظ -
                                                                    التالي</button>
                                                            </div>
                                                            <br>
                                                        </form>
                                                    @else
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <h3>تم تسجيل هذه البيانات</h3>
                                                                <h4>للتعديل <a
                                                                        href="{{ route('viewProject', $owner_id) }}">اضغط
                                                                        هنا</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @endif
                                                </div>
                                                <div class="tab-pane {{ session('mosher_active') ? 'active' : null }}"
                                                    id="mosher">
                                                    <div class="profile-head">
                                                        <h3> مؤشرات أداء المشروع </h3>
                                                    </div>
                                                    @if (!App\Models\Project_performane::where('project_id', $owner_id)->exists('project_id'))
                                                        <form class="form-horizontal" style="font-family: system-ui;"
                                                            action="{{ route('project.data.store', $owner_id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div id="work_experience">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <label class="control-label col-sm-6"> مؤشر
                                                                            الأداء
                                                                            <span style="color: red">*</span></label>
                                                                        <textarea class="form-control work-xp-input" name="name[]" cols="3" rows="3" placeholder="  "
                                                                            required></textarea>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6 ">
                                                                        <label class="control-label "> آلية القياس
                                                                            <span style="color: red">*</span></label>
                                                                        <input type="text" name="measurement[]"
                                                                            class="form-control work-xp-input"
                                                                            required>
                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                        <label class="control-label "> المستهدف <span
                                                                                style="color: red">*</span></label>
                                                                        <input type="text" name="target[]"
                                                                            class="form-control work-xp-input"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6 ">
                                                                        <label class="control-label "> وحدة القياس
                                                                            <span style="color: red">*</span></label>
                                                                        <input type="text" name="unit[]"
                                                                            class="form-control work-xp-input"
                                                                            required>
                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                        <label class="control-label "> دورة القياس
                                                                            <span style="color: red">*</span></label>
                                                                        <input type="text" name="period[]"
                                                                            class="form-control work-xp-input"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <a href="javascript:void(0)"
                                                                        style="float: left;background-color: seagreen;color: white;border-radius: 6px;width: 10%;"
                                                                        id="addplan-btn" class="btn btn-primary"
                                                                        onclick="addWorkRow()">
                                                                        +
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="row"
                                                                style="justify-content: space-around;">
                                                                <button type="submit" name="formType"
                                                                    value="projectPeroformance" class="btn">حفظ -
                                                                    التالي</button>
                                                            </div>
                                                        </form>
                                                    @else
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <h3>تم تسجيل هذه البيانات</h3>
                                                                <h4>للتعديل <a
                                                                        href="{{ route('viewProject', $owner_id) }}">اضغط
                                                                        هنا</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h3>برجاء تسجيل المشروع اولا</h3>
                                            <h4>للتسجيل <a href="{{ route('project.create') }}">اضغط هنا</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @section('script')
            <script>
                function addplanRow() {
                    var elements = document.getElementsByClassName('plane-input');
                    var empty = "no"
                    for (var i = 0; i < elements.length; i++) {
                        if (elements[i].value == "") {
                            empty = "yes"
                        }
                    }
                    if (empty == "no" && document.getElementsByClassName("plane").length < 9) {
                        const div = document.createElement('div');
                        div.className = 'plane';
                        div.innerHTML =
                            `<hr><hr><h4>بيان جديد</h4>
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <label class="control-label "> البداية <span
                                    style="color: red">*</span></label>
                            <input type="date" name="start_date[]"
                                class="form-control plane-input" required>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <label class="control-label "> النهاية <span
                                    style="color: red">*</span></label>
                            <input type="date" name="end_date[]"
                                class="form-control plane-input" required>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label class="control-label"> المهام <span
                                    style="color: red">*</span></label>
                            <input type="text" name="name[]"
                                class="form-control plane-input" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label class="control-label"> المتابعة
                                <span style="color: red">*</span></label>
                            <input type="text" name="follower[]"
                                class="form-control plane-input" required>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label class="control-label"> المسؤول
                                <span style="color: red">*</span></label>
                            <input type="text" name="responsible[]"
                                class="form-control plane-input" required>
                        </div>
                    </div>
                    <br>
                    <input type="button" class="btn btn-danger" style="width:100%; height: 35px; background-color: red" value="x" onclick="removeplanRow(this)" /> `;
                        document.getElementById('plane').appendChild(div);
                        if (document.getElementsByClassName("work-xp").length == 9) {
                            document.getElementById("addplan-btn").style.display = "none";
                        }
                        if (document.getElementsByClassName("work-xp").length != 9) {
                            document.getElementById("addplan-btn").style.display = "block";
                        }
                    } else {
                        alert("برجاء ملء البيانات!");
                    }
                }

                function removeplanRow(input) {
                    confirm("متأكد؟") ? document.getElementById('plane').removeChild(input.parentNode) : 0;
                    if (document.getElementsByClassName("work-xp").length != 9) {
                        document.getElementById("addplan-btn").style.display = "block";
                    }
                }
            </script>
            <script>
                function addWorkRow() {
                    var elements = document.getElementsByClassName('work-xp-input');
                    var empty = "no"
                    for (var i = 0; i < elements.length; i++) {
                        if (elements[i].value == "") {
                            empty = "yes"
                        }
                    }

                    if (empty == "no" && document.getElementsByClassName("work-xp").length < 9) {
                        const div = document.createElement('div');
                        div.className = 'work-xp';
                        div.innerHTML =
                            `<hr><hr><h4>بيان جديد</h4>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label class="control-label col-sm-6"> مؤشر الأداء
                                            <span style="color: red">*</span></label>
                                        <textarea class="form-control" name="name[]" cols="3" rows="3" placeholder="  " required></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label class="control-label "> آلية القياس <span
                                                style="color: red">*</span></label>
                                        <input type="text" name="measurement[]"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label class="control-label "> المستهدف <span
                                                style="color: red">*</span></label>
                                        <input type="text" name="target[]"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label class="control-label "> وحدة القياس <span
                                                style="color: red">*</span></label>
                                        <input type="text" name="unit[]"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label class="control-label "> دورة القياس <span
                                                style="color: red">*</span></label>
                                        <input type="text" name="period[]"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <input type="button" class="btn btn-danger" style="width:100%; height: 35px; background-color: red" value="x" onclick="removeWorkRow(this)" /> `;
                        document.getElementById('work_experience').appendChild(div);
                        if (document.getElementsByClassName("work-xp").length == 9) {
                            document.getElementById("addWork-btn").style.display = "none";
                        }
                        if (document.getElementsByClassName("work-xp").length != 9) {
                            document.getElementById("addWork-btn").style.display = "block";
                        }
                    } else {
                        alert("برجاء ملء البيانات!");
                    }
                }

                function removeWorkRow(input) {
                    confirm("متأكد؟") ? document.getElementById('work_experience').removeChild(input.parentNode) : 0;
                    if (document.getElementsByClassName("work-xp").length != 9) {
                        document.getElementById("addWork-btn").style.display = "block";
                    }
                }
            </script>
            <script>
                var evalue = document.getElementById("evalue");
                var slider = document.getElementById("myRange");
                var slider1 = document.getElementById("myRange1");
                var output = document.getElementById("demo");
                var output1 = document.getElementById("demo1");
                output.innerHTML = slider.value;

                slider.oninput = function() {
                    output.innerHTML = this.value;
                }
                slider1.oninput = function() {
                    output1.innerHTML = this.value;
                }

                function divideBy() {
                    num1 = document.getElementById(
                        "myRange").value;
                    num2 = document.getElementById(
                        "myRange1").value;
                    document.getElementById(
                        "result").value = num1 * num2;
                }
            </script>
        @endsection
        @include('Site.includes.subfooter')
    </div>
    @include('Site.includes.Footer')
