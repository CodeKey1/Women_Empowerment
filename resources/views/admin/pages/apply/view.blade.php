@extends('admin.incloudes.admin')
@section('content')
    <div class="sb2-2-2">
        <!--== BODY INNER CONTAINER ==-->

        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
            <ul>
                <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
                </li>
                <li class="active-bre"><a href="#"> عرض بيانات المتقدم </a>
                </li>
                <li class="page-back"><a href="{{ route('admin.apply') }}"><i class="fa fa-backward" aria-hidden="true"></i>
                        عودة </a>
                </li>
            </ul>
        </div>

        <!--== User Details ==-->
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4> بيانات رائدة الاعمال </h4>
                        </div>
                        <div class="tab-inn">
                            @isset($apply)
                                @foreach ($apply as $num => $applys)
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <label class="control-label"> لاسم </label>
                                                <input type="text" value="{{ $applys->name }}" class="validate" required
                                                    disabled>
                                            </div>
                                            <div class="input-field col s6">
                                                <label class="control-label"> رقم القومي </label>
                                                <input type="number" value="{{ $applys->nid }}" class="validate" required
                                                    disabled>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <label class="control-label"> رقم الهاتف </label>
                                                <input type="number" value="{{ $applys->phone }}" class="validate" required
                                                    disabled>

                                            </div>
                                            <div class="input-field col s6">
                                                <label class="control-label"> البريد الإلكتروني </label>
                                                <input type="email" class="validate" value="{{ $applys->email }}" required
                                                    disabled>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label"> العنوان </label>
                                            <div class="input-field col s12">
                                                <input type="text" value="{{ $applys->address }}" class="validate" disabled>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4> بيانات المشروع </h4>
                        </div>
                        <div class="tab-inn">
                            @isset($apply1)
                                @foreach ($apply1 as $num => $Apply1)
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <label class="control-label"> اسم المشروع * </label>
                                                <input type="text" value="{{ $Apply1->name }}" class="validate" disabled>
                                            </div>
                                            <div class="input-field col s6">
                                                <label class="control-label"> مجال المشروع </label>
                                                <input type="text" value="{{ $Apply1->category }}" class="validate" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <label class="control-label"> ملخص فكرة المشروع * </label>
                                                <input type="text" value="{{ $Apply1->idea }}" class="validate" disabled>
                                            </div>
                                            <div class="input-field col s6">
                                                <label class="control-label"> أهداف المشروع * </label>
                                                <input type="email" class="validate" value="{{ $Apply1->goal }}" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> التخطيط والابتكار في المشروع * </label>
                                                <input type="text" value="{{ $Apply1->innovation }}" class="validate"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> كيف يولد المشروع مستقبل اكثر خضرة واستدامه *
                                                </label>
                                                <input type="text" value="{{ $Apply1->future }}" class="validate" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> مقر تنفيذ المشروع * </label>
                                                <input type="text" value="{{ $Apply1->location }}" class="validate"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> ذكاء المشروع * </label>
                                                <input type="text" value="{{ $Apply1->smart }}" class="validate" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> الاثر المتوقع للمشروع * </label>
                                                <input type="text" value="{{ $Apply1->trail }}" class="validate" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> الموقع الألكتروني للمشروع </label>
                                                <input type="text" value="{{ $Apply1->email }}" class="validate"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> تاريخ البدء المتوقع * </label>
                                                <input type="text" value="{{ $Apply1->date }}" class="validate" disabled>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4> المخاطر المحتملة للمشروع </h4>
                        </div>
                        <div class="tab-inn">
                            @isset($apply2)
                                @foreach ($apply2 as $num => $Apply2)
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s3">
                                                <label class="control-label"> الخطر المحتمل * </label>
                                                <input type="number" class="validate" value="{{ $Apply2->name }}" disabled>
                                            </div>
                                            <div class="input-field col s3">
                                                <label class="control-label"> الشدة </label>
                                                <input type="number" class="validate"disabled value="{{ $Apply2->degree }}">
                                            </div>


                                            <div class="input-field col s3">
                                                <label class="control-label"> الإحتمال </label>
                                                <input type="number" class="validate"disabled value="{{ $Apply2->possibility }}">
                                            </div>
                                            <div class="input-field col s3">
                                                <label class="control-label"> التقيم </label>
                                                <input type="number" class="validate" disabled value="{{ $Apply2->evaluation }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> اجراءات التعامل مع الخطر * </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply2->procedures }}</textarea>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4> دراسة جدوى المشروع </h4>
                        </div>
                        <div class="tab-inn">
                            @isset($apply3)
                                @foreach ($apply3 as $num => $Apply3)
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> تحليل السوق * </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply3->recommendation }}</textarea>
                                            </div>
                                            <div class="input-field col s12">
                                                <label class="control-label"> التحليل التنافسي * </label>
                                                <textarea type="number" class="validate"disabled>{{ $Apply3->finance }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label">الجدوى الفنية * </label>
                                                <textarea type="number" class="validate"disabled>{{ $Apply3->technical }}</textarea>
                                            </div>
                                            <div class="input-field col s12">
                                                <label class="control-label"> الصالحيةاملالية تقييم التكاليف وتدفقات اإليرادات
                                                    املحتملةلألعمال. * </label>
                                                <textarea type="email" class="validate" disabled> {{ $Apply3->competitive }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> ملخص لنتائج الدراسةوتوصيات لستقبل المشروع *
                                                </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply3->market }}</textarea>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4> نموذج العمل </h4>
                        </div>
                        <div class="tab-inn">
                            @isset($apply4)
                                @foreach ($apply4 as $num => $Apply4)
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label">القيمة المقدمة: *</label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply4->provided_value }}</textarea>
                                            </div>
                                            <div class="input-field col s12">
                                                <label class="control-label">فئات العملاء *</label>
                                                <textarea type="number" class="validate"disabled>{{ $Apply4->customer_categories }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label">قنوات وصول المشروع للعملاء *</label>
                                                <textarea type="number" class="validate"disabled>{{ $Apply4->project_access }}</textarea>
                                            </div>
                                            <div class="input-field col s12">
                                                <label class="control-label">استراتيجية جذب العملاء: </label>
                                                <textarea type="email" class="validate" disabled> {{ $Apply4->attract_clients }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label">مصادر الدخل: </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply4->income_source }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> الموارد الرئيسية: </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply4->main_resorce }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> الأنشطة الرئيسية: </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply4->main_activity }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> الشركاء الرئيسين للمشروع * </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply4->partners }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> التكاليف: </label>
                                                <input type="number" class="validate" value="{{ $Apply4->cost }}" disabled>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4> خطة المشروع </h4>
                        </div>
                        <div class="tab-inn">
                            @isset($apply5)
                                @foreach ($apply5 as $num => $Apply5)
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> المهام : </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply5->name }}</textarea>
                                            </div>
                                            <div class="input-field col s6">
                                                <label class="control-label"> البداية </label>
                                                <input type="date" value="{{ $Apply5->start_date }}" class="validate"
                                                    disabled>
                                            </div>
                                            <div class="input-field col s6">
                                                <label class="control-label"> النهاية </label>
                                                <input type="date" value="{{ $Apply5->end_date }}"
                                                    class="validate"disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> المسؤل </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply5->responsible }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label"> المتابعة </label>
                                                <textarea type="text" class="validate" disabled>{{ $Apply5->follower }}</textarea>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4> مؤشرات أداء المشروع </h4>
                        </div>
                        <div class="tab-inn">
                            @isset($apply6)
                                @foreach ($apply6 as $num => $apply6)
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label">مؤشر الأداء </label>
                                                <textarea type="text" class="validate" disabled>{{ $apply6->name }}</textarea>
                                            </div>
                                            <div class="input-field col s12">
                                                <label class="control-label">دورة القياس </label>
                                                <textarea type="number" class="validate" disabled>{{ $apply6->period }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label">وحدة القياس </label>
                                                <textarea type="number" class="validate" disabled>{{ $apply6->unit }}</textarea>
                                            </div>
                                            <div class="input-field col s12">
                                                <label class="control-label">المستهدف </label>
                                                <textarea type="email" class="validate" disabled>{{ $apply6->target }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label class="control-label">آلية القياس </label>
                                                <textarea type="text" class="validate" disabled>{{ $apply6->measurement }}</textarea>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                        <div class="inn-title">
                            <h4> قبول او رفض المشروغ </h4>
                        </div>
                        <div class="tab-inn">

                            <form class="needs-validation" novalidate=""
                                action="{{ route('admin.oldproject.update', $applys->user_id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="input-field col s12">
                                        <label class="control-label"> قبول او رفض المشروع </label>
                                        <select name="state">
                                            <option value="" disabled selected> اختر التقييم
                                            </option>
                                            <option value="1"> مقبول </option>
                                            <option value="2"> جاري المراجعة </option>
                                            <option value="0"> مرفوض </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="waves-effect waves-light btn-large waves-input-wrapper" style="">
                                            <input type="submit" class="waves-button-input" value="حفظ"> </i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
