@extends('site.sub_site')
@section('css')
    <style>
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        * {
            position: relative;
            margin: 0;
            padding: 0;

            border: 0 none;

            -webkit-transition: all ease .4s;
            -moz-transition: all ease .4s;
            transition: all ease .4s;
        }

        h1 {
            padding-top: 40px;

            color: #ccc;
            text-align: center;
            font-size: 1.8rem;

            text-shadow: rgba(0, 0, 0, 0.6) 1px 0, rgba(0, 0, 0, 0.6) 1px 0, rgba(0, 0, 0, 0.6) 0 1px, rgba(0, 0, 0, 0.6) 0 1px;
        }

        .navP {
            margin: 20px;
            width: 455px;
            min-height: auto;
        }

        .navP ul {
            position: relative;
            padding-top: 20px;
        }

        .navP li {
            position: relative;
            padding: 20px 3px 0 3px;
            float: left;

            text-align: center;
            list-style-type: none;
        }

        .navP li::before,
        .navP li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            width: 50%;
            height: 20px;
            border-top: 1px solid #ccc;
        }

        .navP li::after {
            left: 50%;
            right: auto;

            border-left: 1px solid #ccc;
        }

        .navP li:only-child::after,
        .navP li:only-child::before {
            content: '';
            display: none;
        }

        .navP li:only-child {
            padding-top: 0;
        }

        .navP li:first-child::before,
        .navP li:last-child::after {
            border: 0 none;
        }

        .navP li:last-child::before {
            border-right: 1px solid #ccc;
            border-radius: 0 5px 0 0;
        }

        .navP li:first-child::after {
            border-radius: 5px 0 0 0;
        }

        .navP ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }

        .navP li a {
            display: inline-block;
            padding: 5px 10px;

            border-radius: 5px;
            border: 1px solid #ccc;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            color: #ffffff;
            font-family: system-ui;
            font-size: 15px;
            background: teal;
        }

        .navP li a:hover,
        .navP li a:hover+ul li a {
            color: #000;
            background: #c8e4f8;
            border: 1px solid #94a0b4;
        }

        .navP li a:hover+ul li::after,
        .navP li a:hover+ul li::before,
        .navP li a:hover+ul::before,
        .navP li a:hover+ul ul::before {
            content: '';
            border-color: #94a0b4;
        }
    </style>
@endsection
@section('profile')
    <div class="pro-menu">
        <div class="container" style="direction: rtl">
            <div class="col-md-9 col-md-offset-3">
                <ul>
                    <li><a href="{{ route('profile') }}" class="pro-act">المشاريع</a></li>
                    <li><a href="{{ route('success') }}">فرص النجاح</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="h-quote">
        <div class="container" style="direction: rtl;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    @include('site.incloud.alertts.success')
                    @include('site.incloud.alertts.error')
                    <div class="col s12">
                        <div class="cor-p5">
                            <ul class="nav nav-tabs search-top">
                                <li class="{{ !session('active') ? 'active' : null }} ">
                                    <a data-toggle="tab" href="#home">
                                        <img src="images/icon/cor4.png" alt="">
                                        <span> بيانات رائدة الأعمال</span>
                                    </a>
                                </li>
                                <li class="{{ session('menu1_active') ? 'active' : null }}"><a data-toggle="tab"
                                        href="#menu1"><img src="images/icon/cor3.png" alt=""><span> المشروع
                                        </span></a></li>
                                <li class="{{ session('menu2_active') ? 'active' : null }}"><a data-toggle="tab"
                                        href="#menu2"><img src="images/icon/cor1.png" alt=""><span> المخاطر
                                            المحتملة للمشروع </span></a></li>
                                <li class="{{ session('drasa_active') ? 'active' : null }}"><a data-toggle="tab"
                                        href="#drasa"><img src="images/icon/cor5.png" alt=""><span> دراسة جدوى
                                            المشروع </span></a></li>
                                <li class="{{ session('plan_active') ? 'active' : null }}"><a data-toggle="tab"
                                        href="#plan"><img src="images/icon/cor5.png" alt=""><span> خطة المشروع
                                        </span></a></li>
                                <li class="{{ session('template_active') ? 'active' : null }}"><a data-toggle="tab"
                                        href="#template"><img src="images/icon/cor5.png" alt=""><span> نموذج العمل
                                        </span></a></li>
                                <li class="{{ session('mosher_active') ? 'active' : null }}"><a data-toggle="tab"
                                        href="#mosher"><img src="images/icon/cor5.png" alt=""><span> مؤشرات أداء
                                            المشروع </span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade {{ !session('active') ? 'in active' : null }}">
                                    @isset($Project_owner)
                                        @foreach ($Project_owner as $PO)
                                            <form class="form-horizontal" style="font-family: system-ui;"
                                                action="{{ route('project.edit', $PO->id) }}"
                                                onsubmit="return confirmSubmit();" method="POST"enctype="multipart/form-data">
                                                @csrf
                                                <h4 style="text-align: center;"> بيانات رائدة الأعمال </h4>
                                                <h4 style="text-align: center;">حالة المشروع "
                                                    @if ($PO->state == 0)
                                                        مرفوض
                                                    @elseif($PO->state == 1)
                                                        مقبول
                                                    @else
                                                        جاري
                                                    @endif
                                                    "
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> رقم القومي <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" pattern="[0-9]{14,14}" maxlength="14"
                                                            minlength="14" class="form-control" name="nid"
                                                            value="{{ $PO->nid }}" title="رقم البطاقة مكون من 14 رقم">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> الإسم رباعي <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $PO->name }}">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> البريد الإلكتروني <span
                                                                style="color: red">*</span></label>
                                                        <input type="email" class="form-control" name="email"
                                                            value="{{ $PO->email }}">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> التليفون <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" pattern="[0-9]{10,11}" maxlength="11"
                                                            minlength="10" class="form-control" name="phone"
                                                            value="{{ $PO->phone }}" title="رقم الهاتف مكون من 11 رقم">
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> عنوان رائدة الأعمال (المدينة -
                                                            العنوان) <span style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="address"
                                                            value="{{ $PO->address }}">
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> الرغبة في الحصول على تمويل
                                                            <span style="color: red">*</span></label>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="radio" id="yes" name="fund" value="1">
                                                        <label for="yes"> نعم </label>
                                                        <input type="radio" id="no" name="fund" value="0">
                                                        <label for="no">لا </label>
                                                    </div>
                                                    <button type="submit" name="formType" value="initial"
                                                        class="btn">تعديل</button>
                                                </div>
                                            </form>
                                        @endforeach
                                    @endisset
                                </div>
                                <div id="menu1"
                                    class="tab-pane fade tab {{ session('menu1_active') ? 'in active' : null }}">
                                    @isset($Project)
                                        @foreach ($Project as $P)
                                            <form class="form-horizontal" style="font-family: system-ui;"
                                                action="{{ route('project.edit', $P->id) }}"
                                                onsubmit="return confirmSubmit();"
                                                method="POST"enctype="multipart/form-data">
                                                @csrf
                                                <h4 style="text-align: center;"> بيانات المشروع </h4>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> اسم المشروع <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $P->name }}">
                                                        <input type="text" class="form-control" name="owner_id"
                                                            value=" {{ Auth::user()->id }}" style="display: none;">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> مجال المشروع <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="category"
                                                            value="{{ $P->category }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> ملخص فكرة المشروع <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="idea"
                                                            value="{{ $P->idea }}">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> تاريخ البدء المتوقع <span
                                                                style="color: red">*</span></label>
                                                        <input type="date" class="form-control" name="date"
                                                            value="{{ $P->date }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> أهداف المشروع <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="goal"
                                                            value="{{ $P->goal }}">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> التخطيط والابتكار في المشروع
                                                            <span style="color: red">*</span></label>
                                                        <input type="text" name="innovation" class="form-control"
                                                            value="{{ $P->innovation }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> كيف يولد المشروع مستقبل اكثر
                                                            خضرة
                                                            واستدامه <span style="color: red">*</span></label>
                                                        <textarea class="form-control" name="future" cols="5" rows="5"> {{ $P->future }}</textarea>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-3"> ذكاء المشروع <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="smart"
                                                            value="{{ $P->smart }}">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> الاثر المتوقع للمشروع <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="trail"
                                                            value="{{ $P->trail }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> الموقع الألكتروني للمشروع
                                                        </label>
                                                        <input type="text" name="email" value="{{ $P->email }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> مقر تنفيذ المشروع <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" name="location" value="{{ $P->location }}"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <button type="submit" name="formType" value="projectInitial"
                                                        class="btn">تعديل</button>
                                                </div>
                                            </form>
                                        @endforeach
                                    @endisset
                                </div>
                                <div id="menu2"
                                    class="tab-pane fade tab {{ session('menu2_active') ? 'in active' : null }}">
                                    <h4> المخاطر المحتملة </h4>
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}"
                                        method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4>اضافة مخاطر محتملة للمشروع </h4>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> التقيم </label>
                                                <div class="slidecontainer">
                                                    <input id="result" name="evaluation" type="button"
                                                        Value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الإحتمال <span
                                                        style="color: red">*</span></label>
                                                <div class="slidecontainer">
                                                    <input type="range" min="1" max="5" value="0"
                                                        name="possibility" style="margin: 0" id="myRange1"
                                                        onchange="divideBy()" required>
                                                    <p>الاحتمالية: <span id="demo1" onkeyup="calculate()"></span>
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الشدة <span
                                                        style="color: red">*</span></label>
                                                <div class="slidecontainer">
                                                    <input type="range" name="degree" min="1" max="5"
                                                        value="0" style="margin: 0" id="myRange"
                                                        onchange="divideBy()" required>
                                                    <p>الشدة: <span id="demo" onkeyup="calculate()"></span></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> الخطر المحتمل <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> اجراءات التعامل مع الخطر <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" name="procedures" cols="5" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <button type="submit" name="formType" value="projectRisk"
                                                class="btn">حفظ</button>
                                        </div>
                                    </form>
                                    <h4>المخاطر السابقة</h4>
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
                                                            <form class="form-horizontal" style="font-family: system-ui;"
                                                                action="{{ route('project.edit', $Pr->id) }}"
                                                                method="POST"enctype="multipart/form-data">
                                                                @csrf
                                                                <tr>
                                                                    <td><input type="text" name="name"
                                                                            value="{{ $Pr->name }}">
                                                                    </td>
                                                                    <td><input type="number" name="degree"
                                                                            value="{{ $Pr->degree }}" min="1"
                                                                            max="5">
                                                                    </td>
                                                                    <td><input type="number" name="possibility"
                                                                            value="{{ $Pr->possibility }}" min="1"
                                                                            max="5">
                                                                    </td>
                                                                    <td><input name="evaluation" type="button"
                                                                            Value="{{ $Pr->evaluation }}">
                                                                    </td>
                                                                    <td><input type="text" name="procedures"
                                                                            value="{{ $Pr->procedures }}">
                                                                    </td>
                                                                    <td><button type="submit" name="formType"
                                                                            value="projectRisk" class="btn">تعديل</button>
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
                                <div id="drasa"
                                    class="tab-pane fade tab {{ session('drasa_active') ? 'in active' : null }}">
                                    @isset($Project_study)
                                        @foreach ($Project_study as $Py)
                                            <form class="form-horizontal" style="font-family: system-ui;"
                                                action="{{ route('project.edit', $Py->id) }}"
                                                onsubmit="return confirmSubmit();"
                                                method="POST"enctype="multipart/form-data">
                                                @csrf
                                                <h4>دراسة جدوى المشروع</h4>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> تحليل السوق <span
                                                                style="color: red">*</span></label>
                                                        <textarea class="form-control" name="market" cols="5" rows="5"
                                                            placeholder="تقييم حجم السوق المستهدف وإمكانيات نموه واتجاهاته"> {{ $Py->market }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> التحليل التنافسي <span
                                                                style="color: red">*</span></label>
                                                        <textarea class="form-control" name="competitive" cols="5" rows="5"
                                                            placeholder="تقييم نقاط القوة والضعف في المنافسة."> {{ $Py->competitive }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> الجدوى الفنية <span
                                                                style="color: red">*</span></label>
                                                        <textarea class="form-control" name="technical" cols="5" rows="5"> {{ $Py->technical }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> الصالحيةاملالية تقييم
                                                            التكاليف
                                                            وتدفقات
                                                            اإليرادات املحتملةلألعمال. <span
                                                                style="color: red">*</span></label>
                                                        <textarea class="form-control" name="finance" cols="5" rows="5"
                                                            placeholder="رأس المال المستثمر تدفقات الايرادات المحتملة">{{ $Py->finance }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> ملخص لنتائج الدراسةوتوصيات
                                                            لستقبل
                                                            المشروع <span style="color: red">*</span></label>
                                                        <textarea class="form-control" name="recommendation" cols="5" rows="5" placeholder=""> {{ $Py->recommendation }}</textarea>
                                                    </div>
                                                    <button type="submit" name="formType" value="projectStudy"
                                                        class="btn">تعديل</button>
                                                </div>
                                            </form>
                                        @endforeach
                                    @endisset
                                </div>
                                <div id="plan"
                                    class="tab-pane fade tab {{ session('plan_active') ? 'in active' : null }}">
                                    <h4> خطة المشروع </h4>
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}"
                                        method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4> اضافة خطة المشروع </h4>
                                        <div class="row" id="plane">
                                            <div class="col-md-3 ">
                                                <label class="control-label "> النهاية <span
                                                        style="color: red">*</span></label>
                                                <input type="date" name="end_date[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> البداية <span
                                                        style="color: red">*</span></label>
                                                <input type="date" name="start_date[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المهام <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="name[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المتابعة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="follower[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المسؤول <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="responsible[]" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <button type="submit" name="formType" value="projectPlan"
                                                class="btn">حفظ</button>
                                        </div>
                                    </form>
                                    <h4>الخطط السابقة</h4>
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
                                                            <form class="form-horizontal" style="font-family: system-ui;"
                                                                action="{{ route('project.edit', $Pp->id) }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <tr>
                                                                    <td><input type="text" name="name"
                                                                            value="{{ $Pp->name }}"></td>
                                                                    <td><input type="date" name="start_date"
                                                                            value="{{ $Pp->start_date }}"></td>
                                                                    <td><input type="date" name="end_date"
                                                                            value="{{ $Pp->end_date }}"></td>
                                                                    <td><input type="text" name="responsible"
                                                                            value="{{ $Pp->responsible }}"></td>
                                                                    <td><input type="text" name="follower"
                                                                            value="{{ $Pp->follower }}"></td>
                                                                    <td>
                                                                        <button type="submit" name="formType"
                                                                            value="projectPlan" class="btn">تعديل</button>
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
                                <div id="template"
                                    class="tab-pane fade tab {{ session('template_active') ? 'in active' : null }}">
                                    @isset($Project_form)
                                        @foreach ($Project_form as $Pf)
                                            <form class="form-horizontal" style="font-family: system-ui;"
                                                action="{{ route('project.edit', $Pf->id) }}"
                                                onsubmit="return confirmSubmit();"
                                                method="POST"enctype="multipart/form-data">
                                                @csrf
                                                <h4> نموذج العمل </h4>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> القيمة المقدمة: <span
                                                                style="color: red">*</span></label>
                                                        <textarea class="form-control" name="provided_value" cols="3" rows="3"> {{ $Pf->provided_value }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> فئات العملاء <span
                                                                style="color: red">*</span></label>
                                                        <textarea class="form-control" name="customer_categories" cols="3" rows="3">{{ $Pf->customer_categories }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> قنوات وصول المشروع
                                                            للعملاء
                                                            <span style="color: red">*</span></label>
                                                        <textarea class="form-control" name="project_access" cols="3" rows="3">{{ $Pf->project_access }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> استراتيجية جذب العملاء:
                                                            <span style="color: red">*</span></label>
                                                        <textarea class="form-control" name="attract_clients" cols="3" rows="3">{{ $Pf->attract_clients }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> مصادر الدخل: <span
                                                                style="color: red">*</span></label>
                                                        <textarea class="form-control" name="income_source" cols="3" rows="3">{{ $Pf->income_source }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> الموارد الرئيسية: <span
                                                                style="color: red">*</span></label>
                                                        <textarea class="form-control" name="main_resorce" cols="3" rows="3">{{ $Pf->main_resorce }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> الأنشطة الرئيسية: <span
                                                                style="color: red">*</span></label>
                                                        <textarea class="form-control" name="main_activity" cols="3" rows="3">{{ $Pf->main_activity }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> الشركاء الرئيسين للمشروع
                                                            <span style="color: red">*</span></label>
                                                        <textarea class="form-control" name="partners" cols="3" rows="3">{{ $Pf->partners }}</textarea>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <label class="control-label col-sm-6"> التكاليف: <span
                                                                style="color: red">*</span></label>
                                                        <input class="form-control" name="cost" type="number"
                                                            value="{{ $Pf->cost }}">
                                                    </div>
                                                    <button type="submit" name="formType" value="workForm"
                                                        class="btn">تعديل</button>
                                                </div>
                                            </form>
                                        @endforeach
                                    @endisset
                                </div>
                                <div id="mosher"
                                    class="tab-pane fade tab {{ session('mosher_active') ? 'in active' : null }}">
                                    <h4> مؤشرات أداء المشروع </h4>
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}"
                                        method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4>اضافة مؤشر أداء المشروع </h4>
                                        <div class="row" id="work_experience">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> مؤشر الأداء <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" name="name[]" cols="3" rows="3" placeholder="  " required></textarea>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> آلية القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="measurement[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> المستهدف <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="target[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> وحدة القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="unit[]" class="form-control" required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> دورة القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="period[]" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <button type="submit" name="formType" value="projectPeroformance"
                                                class="btn">حفظ</button>
                                        </div>
                                    </form>
                                    <h4>المؤشرات السابقة</h4>
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
                                                            <form class="form-horizontal" style="font-family: system-ui;"
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
                                                                    <td><input type="text" name="measurement"
                                                                            value="{{ $Pff->measurement }}"></td>
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
        @section('modal')
        @endsection
