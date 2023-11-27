@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')
<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li> عرض المشروع</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title" style="text-align: right">
                        <div class="row">
                            <div class="col-10">
                                <h4>{{ $projects->project_owner->name }}</h4>
                            </div>
                            <div class="col-2">
                                <h6 style="color: royalblue">{{ $projects->state }}</h6>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('dashboard.project.state.update', $projects->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row col-12">
                            <div class="col-10 m-t20">
                                <select class="form-control" name="new_state" style="text-align: right" required>
                                    <option value="جاري المراجعة "> جاري المراجعة </option>
                                    <option value="مقبول"> مقبول </option>
                                    <option value="مرفوض"> مرفوض </option>
                                </select>
                            </div>
                            <div class="col-2 m-t20">
                                <button type="submit" class="btn">حفظ</button>
                            </div>
                        </div>
                    </form>
                    <div class="widget-inner">
                        <form class="edit-profile m-b30">
                            <div class="row">

                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. بيانات المشروع</h3>
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label"> اسم المشروع </label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $projects->name }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group col-2">
                                    <label class="col-form-label">مجال المشروع</label>
                                    <div>
                                        <input class="form-control" type="text"
                                            value="{{ $projects->project_type->name }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-2">
                                    <label class="col-form-label"> ت: التقديم </label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $projects->date }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group col-2">
                                    <label class="col-form-label"> البريد الالكتروني </label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $projects->email }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label"> التخطيط والإبتكار </label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $projects->innovation }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label"> مقر التنفيذ </label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $projects->location }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label"> ذكاء المشروع </label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $projects->smart }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label"> الأثر المتوقع </label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $projects->trail }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label"> كيف يولد المشروع مستقبل أكثر استدامة </label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $projects->future }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label"> فكرة المشروع </label>
                                    <div>
                                        <textarea class="form-control" disabled>{{ $projects->idea }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label"> هدف المشروع </label>
                                    <div>
                                        <textarea class="form-control" disabled>{{ $projects->goal }}</textarea>
                                    </div>
                                </div>
                                {{-- المخاطر المحتملة للمشروع  --}}
                                <div class="col-12 m-t20">
                                    <div class="ml-auto">
                                        <h3 class="m-form__section">2.المخاطر المحتملة للمشروع </h3>
                                    </div>
                                </div>
                                @if ($Project_risk->count() > 0)
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>الخطر المحتمل</th>
                                                    <th>الشدة</th>
                                                    <th>الاحتمال</th>
                                                    <th>التقيم</th>
                                                    <th>اجرائات التعامل</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @isset($Project_risk)
                                                    @foreach ($Project_risk as $Pr)
                                                        <tr>
                                                            <td>{{ $Pr->name }}
                                                            </td>
                                                            <td>{{ $Pr->degree }}
                                                            </td>
                                                            <td>{{ $Pr->possibility }}
                                                            </td>
                                                            <td>{{ $Pr->evaluation }}
                                                            </td>
                                                            <td>{{ $Pr->procedures }}
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <div style="width: 100%;padding: 15px;border: 1px solid #000;background: #faebeb;border-radius: 36px;">
                                        <h2 style="text-align: center;color:brown;margin: 8px;">
                                           لم يتم تسجيل المخاطر المحتملة للمشروع </h2>
                                    </div>
                                @endif
                                {{-- خطة المشروع  --}}
                                <div class="col-12 m-t20">
                                    <div class="ml-auto">
                                        <h3 class="m-form__section">3.خطة المشروع </h3>
                                    </div>
                                </div>
                                @if ($Project_plan->count() > 0)
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>المهام</th>
                                                    <th>البداية</th>
                                                    <th>النهاية</th>
                                                    <th>المسؤل</th>
                                                    <th>المتابعة</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @isset($Project_plan)
                                                    @foreach ($Project_plan as $Pp)
                                                        <tr>
                                                            <td>{{ $Pp->name }}</td>
                                                            <td>{{ $Pp->start_date }}</td>
                                                            <td>{{ $Pp->end_date }}</td>
                                                            <td>{{ $Pp->responsible }}</td>
                                                            <td>{{ $Pp->follower }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <div
                                        style="width: 100%;padding: 15px;border: 1px solid #000;background: #faebeb;border-radius: 36px;">
                                        <h2 style="text-align: center;color:brown;margin: 8px;">
                                            لم يتم تسجيل خطة المشروع </h2>
                                    </div>
                                @endif
                                {{-- نموذج العمل  --}}
                                <div class="row col-12">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">4. نموذج العمل </h3>
                                        </div>
                                    </div>
                                    @isset($Project_form)
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="col-form-label"> القيمة المقدمة </label>
                                                <div>
                                                    <textarea class="form-control" disabled>{{ $Project_form->provided_value }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label"> فئات العملاء </label>
                                                <div>
                                                    <textarea class="form-control" disabled>{{ $Project_form->customer_categories }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label"> قنوات الوصول للعملاء </label>
                                                <div>
                                                    <textarea class="form-control" disabled>{{ $Project_form->project_access }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label"> جذب العملاء </label>
                                                <div>
                                                    <textarea class="form-control" disabled>{{ $Project_form->attract_clients }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label"> مصادر الدخل </label>
                                                <div>
                                                    <textarea class="form-control" disabled>{{ $Project_form->income_source }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label"> الموارد الرئيسية </label>
                                                <div>
                                                    <textarea class="form-control" disabled>{{ $Project_form->main_resorce }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <label class="col-form-label"> الانشطة الرئيسية </label>
                                                <div>
                                                    <textarea class="form-control" disabled>{{ $Project_form->main_activity }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label"> الشركاء </label>
                                                <div>
                                                    <input class="form-control" value="{{ $Project_form->partners }}"
                                                        disabled />
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label"> التكلفة </label>
                                                <div>
                                                    <input class="form-control" value="{{ $Project_form->cost }}"
                                                        disabled />
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div
                                            style="width: 100%;padding: 15px;border: 1px solid #000;background: #faebeb;border-radius: 36px;">
                                            <h2 style="text-align: center;color:brown;margin: 8px;">لم يتم تسجيل نموذج العمل
                                            </h2>
                                        </div>
                                    @endisset
                                </div>
                                {{-- مؤشرات أداء المشروع  --}}
                                <div class="row col-12">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">5. مؤشرات أداء المشروع </h3>
                                        </div>
                                    </div>
                                    @if ($Project_performane->count() > 0)

                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>مؤشر الأداء</th>
                                                        <th>دورة القياس</th>
                                                        <th>وحدة القياس</th>
                                                        <th>المستهدف</th>
                                                        <th>آلية القياس</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Project_performane as $Pff)
                                                        <tr>
                                                            <td>{{ $Pff->name }}</td>
                                                            <td>{{ $Pff->period }}</td>
                                                            <td>{{ $Pff->unit }}</td>
                                                            <td>{{ $Pff->target }}</td>
                                                            <td>{{ $Pff->measurement }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <div
                                            style="width: 100%;padding: 15px;border: 1px solid #000;background: #faebeb;border-radius: 36px;">
                                            <h2 style="text-align: center;color:brown;margin: 8px;"> لم يتم تسجيل
                                                مؤشرات أداء المشروع </h2>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
@include('Dashboard.includes.Footer')
