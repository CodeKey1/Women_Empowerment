@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <div class="content-block">
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h2 class="text-white" style="margin-top: 130px;"> عدلي بيانات مشروعك </h2>
                    </div>
                </div>
            </div>
            <div class="page-content bg-white">
                <div class="content-block">
                    <div class="section-area section-sp1">
                        <div class="container">
                            <div class="row" dir="rtl">
                                <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                                    <div class="profile-bx text-center">
                                        <div class="profile-info">
                                            <h4>خطوات تعديل المشروع</h4>
                                        </div>
                                        <div class="profile-tabnav">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#project"
                                                        style="float: right;"><i class="ti-book"></i> المشروع </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#risk"
                                                        style="float: right;"><i class="ti-user"></i> المخاطر
                                                        المحتملة </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#drasa"
                                                        style="float: right;"><i class="ti-book"></i> دراسة
                                                        الجدوى </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#plan"
                                                        style="float: right;"><i class="ti-book"></i> خطة
                                                        المشروع </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#template"
                                                        style="float: right;"><i class="ti-book"></i> نموذج
                                                        العمل </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#mosher"
                                                        style="float: right;"><i class="ti-book"></i> مؤشرات
                                                        الاداء </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                                    <div class="profile-content-bx">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="project">
                                                <div class="profile-head">
                                                    <h3>بيانات المشروع </h3>
                                                </div>
                                                <form class="form-horizontal" style="font-family: system-ui;"
                                                    action="{{ route('project.edit', $Project->id) }}" method="POST"
                                                    enctype="multipart/form-data" onsubmit="return confirmSubmit();">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> اسم المشروع <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $Project->name }}" name="name" required>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> مجال المشروع <span
                                                                    style="color: red">*</span></label>
                                                            <select name="type_id" required>
                                                                <option value="{{ $Project->type_id }}" selected hidden>
                                                                    {{ $Project->project_type->name }}</option>
                                                                @foreach ($type as $types)
                                                                    <option value="{{ $types->id }}">
                                                                        {{ $types->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> المدينة المقام عليها
                                                                <span style="color: red">*</span></label>
                                                            <select name="city_id" required>
                                                                <option value="{{ $Project->city_id }}" selected hidden>
                                                                    {{ $Project->project_city->name }}</option>
                                                                @foreach ($city as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> ملخص فكرة المشروع
                                                                <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $Project->idea }}" name="idea" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> تاريخ البدء المتوقع
                                                                <span style="color: red">*</span></label>
                                                            <input type="date" class="form-control" name="date"
                                                                value="{{ $Project->date }}" required>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> أهداف المشروع <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $Project->goal }}" name="goal" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> التخطيط والابتكار
                                                                في
                                                                المشروع
                                                                <span style="color: red">*</span></label>
                                                            <input type="text" name="innovation"
                                                                class="form-control"
                                                                value="{{ $Project->innovation }}" required>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <label class="control-label "> كيف يولد المشروع
                                                                مستقبل اكثر
                                                                خضرة
                                                                واستدامه <span style="color: red">*</span></label>
                                                            <textarea class="form-control" name="future" cols="5" rows="5" required>{{ $Project->future }}</textarea>
                                                        </div>
                                                        <br>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> ذكاء المشروع <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="smart"
                                                                value="{{ $Project->smart }}" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> الاثر المتوقع
                                                                للمشروع <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control "
                                                                name="trail" value="{{ $Project->trail }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> مقر تنفيذ المشروع
                                                                <span style="color: red">*</span></label>
                                                            <input type="text" name="location"
                                                                class="form-control" value="{{ $Project->location }}"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> الموقع الألكتروني
                                                                للمشروع
                                                            </label>
                                                            <input type="text" name="email" class="form-control"
                                                                value="{{ $Project->email }}">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row" style="justify-content: space-around;">
                                                        <button type="submit" name="formType" value="projectInitial"
                                                            class="btn">تعديل</button>
                                                    </div>
                                                    <br>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="risk">
                                                <div class="profile-head">
                                                    <h3> المخاطر المحتملة للمشروع </h3>
                                                </div>
                                                <form class="form-horizontal" style="font-family: system-ui;"
                                                    action="{{ route('project.edit.store', $Project->id) }}"
                                                    method="POST" enctype="multipart/form-data"
                                                    onsubmit="return confirmSubmit();">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <label class="control-label col-12"> الخطر المحتمل
                                                                <span style="color: red">*</span></label>
                                                            <input type="text" name="name" class="form-control"
                                                                required>
                                                        </div>
                                                        <div class="col-md-2 col-sm-6 col-xs-6">
                                                            <label class="control-label col-12"> الشدة <span
                                                                    style="color: red">*</span></label>
                                                            <div class="slidecontainer">
                                                                <input type="range" name="degree" min="1"
                                                                    max="5" value="0" style="margin: 0"
                                                                    id="myRange" onchange="divideBy()" required>
                                                                <p>الشدة: <span id="demo"
                                                                        onkeyup="calculate()"></span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-6 col-xs-6">
                                                            <label class="control-label col-12"> الإحتمال <span
                                                                    style="color: red">*</span></label>
                                                            <div class="slidecontainer">
                                                                <input type="range" min="1" max="5"
                                                                    value="0" name="possibility"
                                                                    style="margin: 0" id="myRange1"
                                                                    onchange="divideBy()" required>
                                                                <p>الاحتمالية: <span id="demo1"
                                                                        onkeyup="calculate()"></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-6 col-xs-6">
                                                            <label class="control-label col-12"> التقيم
                                                            </label>
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
                                                                مع الخطر <span style="color: red">*</span></label>
                                                            <textarea class="form-control" name="procedures" cols="5" rows="5" required></textarea>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row" style="justify-content: space-around;">
                                                        <button type="submit" name="formType" value="projectRisk"
                                                            class="btn">حفظ</button>
                                                    </div>
                                                    <br>
                                                </form>
                                                <h4>سجل المخاطر </h4>
                                                <div class="tab-inn">
                                                    <div class="table-responsive table-desi">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>الخطر المحتمل</th>
                                                                    <th>الشدة</th>
                                                                    <th>الاحتمال</th>
                                                                    <th>التقيم</th>
                                                                    <th>اجرائات التعامل</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @isset($Project_risk)
                                                                    @foreach ($Project_risk as $Pr)
                                                                        <form class="form-horizontal"
                                                                            style="font-family: system-ui;"
                                                                            action="{{ route('project.edit', $Pr->id) }}"
                                                                            method="POST"enctype="multipart/form-data"
                                                                            onsubmit="return confirmSubmit();">
                                                                            @csrf
                                                                            <tr>
                                                                                <td><input type="text" name="name"
                                                                                        value="{{ $Pr->name }}">
                                                                                </td>
                                                                                <td><input type="number" name="degree"
                                                                                        value="{{ $Pr->degree }}"
                                                                                        min="1" max="5">
                                                                                </td>
                                                                                <td><input type="number"
                                                                                        name="possibility"
                                                                                        value="{{ $Pr->possibility }}"
                                                                                        min="1" max="5">
                                                                                </td>
                                                                                <td><input name="evaluation"
                                                                                        type="button"
                                                                                        Value="{{ $Pr->evaluation }}">
                                                                                </td>
                                                                                <td><input type="text"
                                                                                        name="procedures"
                                                                                        value="{{ $Pr->procedures }}">
                                                                                </td>
                                                                                <td><button type="submit" name="formType"
                                                                                        value="projectRisk"
                                                                                        class="btn">تعديل</button>
                                                                                </td>
                                                                            </tr>
                                                                        </form>
                                                                    @endforeach
                                                                @endisset
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="drasa">
                                                <div class="profile-head">
                                                    <h3> دراسة الجدوى </h3>
                                                </div>
                                                @if ($Project_study == null)
                                                    <form class="form-horizontal" style="font-family: system-ui;"
                                                        action="{{ route('project.edit.store', $Project->id) }}"
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
                                                                    المشروع <span style="color: red">*</span></label>
                                                                <textarea class="form-control" name="recommendation" cols="5" rows="5" placeholder="" required></textarea>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row" style="justify-content: space-around;">
                                                            <button type="submit" name="formType"
                                                                value="projectStudy" class="btn">حفظ -
                                                                التالي</button>
                                                        </div>
                                                        <br>
                                                    </form>
                                                @else
                                                    <form class="form-horizontal" style="font-family: system-ui;"
                                                        action="{{ route('project.edit', $Project_study->id) }}"
                                                        onsubmit="return confirmSubmit();"
                                                        method="POST"enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="control-label col-sm-6"> تحليل السوق
                                                                    <span style="color: red">*</span></label>
                                                                <textarea class="form-control" name="market" cols="5" rows="5"
                                                                    placeholder="تقييم حجم السوق المستهدف وإمكانيات نموه واتجاهاته" required>{{ $Project_study->market }}</textarea>
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
                                                                    placeholder="تقييم نقاط القوة والضعف في المنافسة." required>{{ $Project_study->competitive }}</textarea>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="control-label col-sm-6"> الجدوى
                                                                    الفنية
                                                                    <span style="color: red">*</span></label>
                                                                <textarea class="form-control" name="technical" cols="5" rows="5"
                                                                    placeholder="الموارد والقدرات الفنية المطلوبة لتطوير وإطلاق المنتج أو الخدمة" required>{{ $Project_study->technical }}</textarea>
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
                                                                    placeholder="رأس المال المستثمر تدفقات الايرادات المحتملة" required>{{ $Project_study->finance }}</textarea>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="control-label col-sm-6"> ملخص لنتائج
                                                                    الدراسةوتوصيات
                                                                    لستقبل
                                                                    المشروع <span style="color: red">*</span></label>
                                                                <textarea class="form-control" name="recommendation" cols="5" rows="5" placeholder="" required>{{ $Project_study->recommendation }}</textarea>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row" style="justify-content: space-around;">
                                                            <button type="submit" name="formType"
                                                                value="projectStudy" class="btn">تعديل</button>
                                                        </div>
                                                    </form>
                                                @endif
                                            </div>
                                            <div class="tab-pane" id="plan">
                                                <div class="profile-head">
                                                    <h3> خطة المشروع </h3>
                                                </div>
                                                <form class="form-horizontal" style="font-family: system-ui;"
                                                    action="{{ route('project.edit.store', $Project->id) }}"
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
                                                    <div class="row" style="justify-content: space-around;">
                                                        <button type="submit" name="formType" value="projectPlan"
                                                            class="btn">حفظ</button>
                                                    </div>
                                                    <br>
                                                </form>
                                                <h4>سجل الخطط </h4>
                                                <div class="tab-inn">
                                                    <div class="table-responsive table-desi">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>المهام</th>
                                                                    <th>البداية</th>
                                                                    <th>النهاية</th>
                                                                    <th>المسؤل</th>
                                                                    <th>المتابعة</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @isset($Project_Plan)
                                                                    @foreach ($Project_Plan as $Pp)
                                                                        <form class="form-horizontal"
                                                                            style="font-family: system-ui;"
                                                                            action="{{ route('project.edit', $Pp->id) }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <tr>
                                                                                <td><input type="text" name="name"
                                                                                        value="{{ $Pp->name }}"></td>
                                                                                <td><input type="date"
                                                                                        name="start_date"
                                                                                        value="{{ $Pp->start_date }}">
                                                                                </td>
                                                                                <td><input type="date" name="end_date"
                                                                                        value="{{ $Pp->end_date }}"></td>
                                                                                <td><input type="text"
                                                                                        name="responsible"
                                                                                        value="{{ $Pp->responsible }}">
                                                                                </td>
                                                                                <td><input type="text" name="follower"
                                                                                        value="{{ $Pp->follower }}"></td>
                                                                                <td>
                                                                                    <button type="submit" name="formType"
                                                                                        value="projectPlan"
                                                                                        class="btn">تعديل</button>
                                                                                </td>
                                                                            </tr>
                                                                        </form>
                                                                    @endforeach
                                                                @endisset
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="template">
                                                <div class="profile-head">
                                                    <h3> نموذج العمل </h3>
                                                </div>
                                                @if ($Project_form == null)
                                                    <form class="form-horizontal" style="font-family: system-ui;"
                                                        action="{{ route('project.edit.store', $Project->id) }}"
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
                                                        <div class="row" style="justify-content: space-around;">
                                                            <button type="submit" name="formType" value="workForm"
                                                                class="btn">حفظ -
                                                                التالي</button>
                                                        </div>
                                                        <br>
                                                    </form>
                                                @else
                                                    <form class="form-horizontal" style="font-family: system-ui;"
                                                        action="{{ route('project.edit', $Project_form->id) }}"
                                                        onsubmit="return confirmSubmit();" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row" dir="rtl">
                                                            <div class="col col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label"> فئات العملاء
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="customer_categories" cols="3" rows="25" required>{{ $Project_form->customer_categories }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label"> استراتيجية جذب
                                                                        العملاء:
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="attract_clients" cols="3" rows="8" required>{{ $Project_form->attract_clients }}</textarea>
                                                                </div>
                                                                <div class="w-100"></div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label"> قنوات الوصول
                                                                        للعملاء
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="project_access" cols="3" rows="8" required>{{ $Project_form->project_access }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label"> القيمة المقدمة:
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="provided_value" cols="3" rows="15" required>{{ $Project_form->provided_value }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label"> الموارد الرئيسية:
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="main_resorce" cols="3" rows="8" required>{{ $Project_form->main_resorce }}</textarea>
                                                                </div>
                                                                <div class="w-100"></div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label"> الأنشطة الرئيسية:
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="main_activity" cols="3" rows="8" required>{{ $Project_form->main_activity }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label"> الشركاء الرئيسين
                                                                        <span style="color: red">*</span></label>
                                                                    <textarea class="form-control" name="partners" cols="3" rows="15" required>{{ $Project_form->partners }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <label class="control-label"> مصادر الدخل: <span
                                                                        style="color: red">*</span></label>
                                                                <input class="form-control" name="income_source"
                                                                    class="form-control"
                                                                    value="{{ $Project_form->income_source }}"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <label class="control-label"> التكاليف: <span
                                                                        style="color: red">*</span></label>
                                                                <input class="form-control" name="cost"
                                                                    min="0" type="number"
                                                                    value="{{ $Project_form->cost }}" required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row" style="justify-content: space-around;">
                                                            <button type="submit" name="formType" value="workForm"
                                                                class="btn">تعديل</button>
                                                        </div>
                                                        <br>
                                                    </form>
                                                @endif
                                            </div>
                                            <div class="tab-pane" id="mosher">
                                                <div class="profile-head">
                                                    <h3> مؤشرات أداء المشروع </h3>
                                                </div>
                                                <form class="form-horizontal" style="font-family: system-ui;"
                                                    action="{{ route('project.edit.store', $Project->id) }}"
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
                                                                    class="form-control work-xp-input" required>
                                                            </div>
                                                            <div class="col-md-6 ">
                                                                <label class="control-label "> المستهدف <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" name="target[]"
                                                                    class="form-control work-xp-input" required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 ">
                                                                <label class="control-label "> وحدة القياس
                                                                    <span style="color: red">*</span></label>
                                                                <input type="text" name="unit[]"
                                                                    class="form-control work-xp-input" required>
                                                            </div>
                                                            <div class="col-md-6 ">
                                                                <label class="control-label "> دورة القياس
                                                                    <span style="color: red">*</span></label>
                                                                <input type="text" name="period[]"
                                                                    class="form-control work-xp-input" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row" style="justify-content: space-around;">
                                                        <button type="submit" name="formType"
                                                            value="projectPeroformance" class="btn">حفظ</button>
                                                    </div>
                                                </form>
                                                <h4> سجل المؤشرات </h4>
                                                <div class="tab-inn">
                                                    <div class="table-responsive table-desi">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>مؤشر الأداء</th>
                                                                    <th>دورة القياس</th>
                                                                    <th>وحدة القياس</th>
                                                                    <th>المستهدف</th>
                                                                    <th>آلية القياس</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @isset($Project_performane)
                                                                    @foreach ($Project_performane as $Pff)
                                                                        <form class="form-horizontal"
                                                                            style="font-family: system-ui;"
                                                                            action="{{ route('project.edit', $Pff->id) }}"
                                                                            method="POST"enctype="multipart/form-data">
                                                                            @csrf
                                                                            <tr>
                                                                                <td><input type="text" name="name"
                                                                                        value="{{ $Pff->name }}"></td>
                                                                                <td><input type="text" name="period"
                                                                                        value="{{ $Pff->period }}"></td>
                                                                                <td><input type="text" name="unit"
                                                                                        value="{{ $Pff->unit }}"></td>
                                                                                <td><input type="text" name="target"
                                                                                        value="{{ $Pff->target }}"></td>
                                                                                <td><input type="text"
                                                                                        name="measurement"
                                                                                        value="{{ $Pff->measurement }}">
                                                                                </td>
                                                                                <td><button type="submit" name="formType"
                                                                                        value="projectPeroformance"
                                                                                        class="btn">تعديل</button></td>
                                                                            </tr>
                                                                        </form>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @section('script')
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
