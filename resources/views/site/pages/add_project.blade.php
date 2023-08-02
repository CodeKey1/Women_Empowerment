@extends('site.page')
@section('content')
    <!--SECTION START-->
    <section class="h-quote">
        <div class="container" style="direction: rtl;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                        <div class="cor-p5">
                            <ul class="nav nav-tabs search-top">
                                <li class="active">
                                    <a data-toggle="tab" href="#home">
                                        <img src="images/icon/cor4.png" alt="">
                                        <span> بيانات رائدة الأعمال</span>
                                    </a>
                                </li>
                                <li><a data-toggle="tab" href="#menu1"><img src="images/icon/cor3.png"
                                            alt=""><span> المشروع </span></a></li>
                                <li><a data-toggle="tab" href="#menu2"><img src="images/icon/cor1.png"
                                            alt=""><span> المخاطر المحتملة للمشروع </span></a></li>
                                <li><a data-toggle="tab" href="#drasa"><img src="images/icon/cor5.png"
                                            alt=""><span> دراسة جدوى المشروع </span></a></li>
                                <li><a data-toggle="tab" href="#plan"><img src="images/icon/cor5.png"
                                            alt=""><span> خطة المشروع </span></a></li>
                                <li><a data-toggle="tab" href="#template"><img src="images/icon/cor5.png"
                                            alt=""><span> نموذج العمل </span></a></li>
                                <li><a data-toggle="tab" href="#mosher"><img src="images/icon/cor5.png"
                                            alt=""><span> مؤشرات أداء المشروع </span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}" method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4 style="text-align: center;"> بيانات رائدة الأعمال </h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> رقم القومي <span
                                                        style="color: red">*</span></label>
                                                <input type="number" class="form-control" name="nationalId" placeholder=""
                                                    required>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> الإسم رباعي <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="يرجي ادخال الإسم رباعي" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> البريد الإلكتروني </label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="البريد الإلكتروني ان وجد">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> التليفون <span
                                                        style="color: red">*</span></label>
                                                <input type="number" class="form-control" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> عنوان رائدة الأعمال (المدينة -
                                                    العنوان) <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="city" placeholder=""
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> الرغبة في الحصول على تمويل
                                                    <span style="color: red">*</span></label>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="radio" id="yes" name="Tamuel" value="1" required>
                                                <label for="yes"> نعم </label>
                                                <input type="radio" id="no" name="Tamuel" value="0">
                                                <label for="no">لا </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            {{-- <a data-toggle="tab" class="btn btn-danger">عودة</a> --}}
                                            <button type="submit" name="formType" value="initial" class="btn">حفظ -
                                                التالي</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}"
                                        method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4 style="text-align: center;"> بيانات المشروع </h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> اسم المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> مجال المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> ملخص فكرة المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> تاريخ البدء المتوقع <span
                                                        style="color: red">*</span></label>
                                                <input type="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> أهداف المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> التخطيط والابتكار في المشروع
                                                    <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> كيف يولد المشروع مستقبل اكثر خضرة
                                                    واستدامه <span style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5" required></textarea>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> ذكاء المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الاثر المتوقع للمشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الموقع الألكتروني للمشروع </label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> مقر تنفيذ المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الاثر المتوقع للمشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <a data-toggle="tab" class="btn btn-danger" href="#home">عودة</a>
                                            <button type="submit" name="formType" value="projectInitial"
                                                class="btn">حفظ -
                                                التالي</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}"
                                        method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4> المخاطر المحتملة للمشروع </h4>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> التقيم <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الإحتمال <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الشدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> الخطر المحتمل <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> اجراءات التعامل مع الخطر <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> التقيم <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الإحتمال <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الشدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> الخطر المحتمل <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> اجراءات التعامل مع الخطر <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> التقيم <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الإحتمال <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الشدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> الخطر المحتمل <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> اجراءات التعامل مع الخطر <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> التقيم <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الإحتمال <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الشدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> الخطر المحتمل <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> اجراءات التعامل مع الخطر <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> التقيم <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الإحتمال <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> الشدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> الخطر المحتمل <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> اجراءات التعامل مع الخطر <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <a data-toggle="tab" class="btn btn-danger" href="#menu1">عودة</a>
                                            <button type="submit" name="formType" value="projectRisk"
                                                class="btn">حفظ -
                                                التالي</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="drasa" class="tab-pane fade">
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}"
                                        method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4>دراسة جدوى المشروع</h4>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> تحليل السوق <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5"
                                                    placeholder="تقييم حجم السوق المستهدف وإمكانيات نموه واتجاهاته" required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> التحليل التنافسي <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5" placeholder="تقييم نقاط القوة والضعف في المنافسة."
                                                    required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الجدوى الفنية <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5"
                                                    placeholder="الموارد والقدرات الفنية المطلوبة لتطوير وإطلاق المنتج أو الخدمة" required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الصالحيةاملالية تقييم التكاليف
                                                    وتدفقات
                                                    اإليرادات املحتملةلألعمال. <span style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5"
                                                    placeholder="رأس المال المستثمر تدفقات الايرادات المحتملة" required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> ملخص لنتائج الدراسةوتوصيات لستقبل
                                                    المشروع <span style="color: red">*</span></label>
                                                <textarea class="form-control" cols="5" rows="5" placeholder="" required></textarea>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <a data-toggle="tab" class="btn btn-danger" href="#menu2">عودة</a>
                                            <button type="submit" name="formType" value="projectStudy"
                                                class="btn">حفظ -
                                                التالي</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="plan" class="tab-pane fade">
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}"
                                        method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4> خطة المشروع </h4>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> المدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> النهاية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> البداية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المهام (1) <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المتابعة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المسؤول <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">

                                            <div class="col-md-2 ">
                                                <label class="control-label "> المدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> النهاية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> البداية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المهام (2) <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المتابعة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المسؤول <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> المدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> النهاية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> البداية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المهام (3) <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المتابعة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المسؤول <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> المدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> النهاية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> البداية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المهام (4) <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المتابعة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المسؤول <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label class="control-label "> المدة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> النهاية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="control-label "> البداية <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المهام (5) <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المتابعة <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="control-label col-sm-3"> المسؤول <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <a data-toggle="tab" class="btn btn-danger" href="#drasa">عودة</a>
                                            <button type="submit" name="formType" value="projectPlan"
                                                class="btn">حفظ -
                                                التالي</button>
                                        </div>
                                </div>
                                <div id="template" class="tab-pane fade">
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}"
                                        method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4> نموذج العمل </h4>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> القيمة المقدمة: <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3"
                                                    placeholder=" المنفعة أو الحل الذي يقدمه المشروع للعملاء لحل مشكلة أو احتياج معين " required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> فئات العملاء <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3"
                                                    placeholder=" المجموعات المستهدفة من العملاء الذين يستفيدون من القيمة المقدمة ويدفعون ثمنها" required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> قنوات وصول المشروع للعملاء <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3"
                                                    placeholder=" الطرق التي يصل بها المشروع إلى الفئات العملاء ويتواصل معهم ويسلم لهم القيمة المقدمة " required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> استراتيجية جذب العملاء: <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3"
                                                    placeholder=" الإستراتيجية التي يتبعها المشروع لجذب واسعاد العملاء" required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> مصادر الدخل: <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3"
                                                    placeholder=" آلية تحديد سعر وطريقة تحصيل الأموال من العملاء مقابل القيمة المقدمة " required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الموارد الرئيسية: <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3"
                                                    placeholder=" الأصول والأشخاص والأدوات والشركاء التي يحتاجها المشروع لتقديم وتسليم القيمة المقدمة" required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الأنشطة الرئيسية: <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3"
                                                    placeholder=" الخطوات والإجراءات التي يقوم بها المشروع لتوليد وتسليم القيمة المقدمة " required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الشركاء الرئيسين للمشروع <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3"
                                                    placeholder=" هي الجهات التي تساهم في تزويد المشروع بالموارد أو تسانده في تنفيذ الأنشطة أو تزيد من قيمته" required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> التكاليف: <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3"
                                                    placeholder=" المصروفات التي يتحملها المشروع لإنشاء وتشغيل نموذج العمل." required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <a data-toggle="tab" class="btn btn-danger" href="#plan">عودة</a>
                                            <button type="submit" name="formType" value="workForm" class="btn">حفظ -
                                                التالي</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="mosher" class="tab-pane fade">
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store') }}"
                                        method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4> مؤشرات أداء المشروع </h4>
                                        <div class="row" id="work_experience">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> مؤشر الأداء <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control" cols="3" rows="3" placeholder="  " required></textarea>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> آلية القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> المستهدف <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> وحدة القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> دورية القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <a href="javascript:void(0)"
                                                style="float: left;background-color: seagreen;color: white;border-radius: 6px;width: 40px;"
                                                id="addWork-btn" class="btn btn-primary" onclick="addWorkRow()"> + </a>

                                        </div>
                                        <div class="row">
                                            <a data-toggle="tab" class="btn btn-danger" href="#template">عودة</a>
                                            <button type="submit" name="formType" value="projectPeroformance"
                                                class="btn">حفظ -
                                                التالي</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
@section('script')
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
                div.className = 'row work-xp';
                div.innerHTML =
                    `
            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> مؤشر الأداء <span
                                                        style="color: red">*</span></label>
                                                <textarea class="form-control"  cols="3" rows="3" placeholder="  " required></textarea>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> آلية القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control"  required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> المستهدف <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control"  required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> وحدة القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control"  required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> دورية القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control"  required>
                                            </div>
                <input type="button" class="btn btn-danger" style="width:50px; height: 35px;" value="x" onclick="removeWorkRow(this)" /> `;;
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
@endsection
