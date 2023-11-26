@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <div class="content-block">
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h2 class="text-white" style="margin-top: 130px;"> سجلي مشروعك الان</h2>
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
                                            <h4>خطوات تسجيل المشروع</h4>
                                        </div>
                                        <div class="profile-tabnav">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link {{ !session('project_active') ? 'active' : null }}"
                                                        data-toggle="tab" href="#info" style="float: right;"><i
                                                            class="ti-user"></i>بيانات
                                                        رائدة الأعمال</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link {{ session('project_active') ? 'active' : null }}"
                                                        data-toggle="tab" href="#project" style="float: right;"><i
                                                            class="ti-book"></i>المشروع</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                                    <div class="profile-content-bx">
                                        <div class="tab-content">
                                            <div class="tab-pane {{ !session('project_active') ? 'active' : null }}"
                                                id="info">
                                                <div class="profile-head">
                                                    <h3 style="text-align: center">بيانات رائدة الاعمال</h3>
                                                </div>
                                                @if (!App\Models\Project_owner::where('user_id', Auth::user()->id)->exists('user_id'))
                                                    <form class="form-horizontal" style="font-family: system-ui;"
                                                        action="{{ route('project.Initial_store') }}"
                                                        method="POST"enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> الإسم رباعي <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    name="name" placeholder="يرجي ادخال الإسم رباعي"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> رقم القومي <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" pattern="[0-9]{14,14}"
                                                                    maxlength="14" minlength="14"
                                                                    title="رقم البطاقة مكون من 14 رقم"
                                                                    class="form-control" name="nid"
                                                                    placeholder="رقم البطاقة مكون من 14 رقم" required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> البريد الإلكتروني
                                                                    <span style="color: red">*</span></label>
                                                                <input type="email" class="form-control"
                                                                    name="email"
                                                                    placeholder="البريد الإلكتروني ان وجد" required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> التليفون <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" pattern="[0-9]{10,11}"
                                                                    maxlength="11" minlength="10"
                                                                    title="رقم الهاتف مكون من 11 رقم"
                                                                    class="form-control" name="phone"
                                                                    placeholder="رقم الهاتف مكون من 11 رقم" required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> عنوان رائدة الأعمال
                                                                    (المدينة -
                                                                    العنوان) <span style="color: red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    name="address" placeholder="العنوان التفصيلي"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> الرغبة في الحصول
                                                                    على
                                                                    تمويل
                                                                    <span style="color: red">*</span></label>
                                                                <div style="text-align: justify">
                                                                    <input type="radio" id="yes" name="fund"
                                                                        value="1" required>
                                                                    <label for="yes"> نعم </label>
                                                                    <input type="radio" id="no"
                                                                        name="fund" value="0">
                                                                    <label for="no"> لا </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row" style="justify-content: space-around;">
                                                            <button type="submit" name="formType" value="initial"
                                                                class="btn">حفظ -
                                                                التالي</button>
                                                        </div>
                                                        <br>
                                                    </form>
                                                @else
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <h3>تم تسجيل بيانات رائدة الاعمال</h3>
                                                        </div>
                                                    </div>
                                                    <br>
                                                @endif
                                            </div>
                                            <div class="tab-pane {{ session('project_active') ? 'active' : null }}"
                                                id="project">
                                                <div class="profile-head">
                                                    <h3 style="text-align: center">بيانات المشروع جديد</h3>
                                                </div>
                                                @isset($owner_id)
                                                    <form class="form-horizontal" style="font-family: system-ui;"
                                                        action="{{ route('project.store', $owner_id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> اسم المشروع <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="اسم المشروع" name="name" required>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> مجال المشروع <span
                                                                        style="color: red">*</span></label>
                                                                <select name="type_id" class="form-control" required>
                                                                    <option value=" " selected disabled>اختر مجال
                                                                        المشروع</option>
                                                                    @foreach ($type as $types)
                                                                        <option value="{{ $types->id }}">
                                                                            {{ $types->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> المدينة المقام عليها
                                                                    <span style="color: red">*</span></label>
                                                                <select name="city_id" class="form-control" required>
                                                                    <option value=" " selected disabled>اختر
                                                                        المدينة</option>
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
                                                                    placeholder="فكرة المشروع" name="idea" required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> تاريخ البدء المتوقع
                                                                    <span style="color: red">*</span></label>
                                                                <input type="date" class="form-control" name="date"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> أهداف المشروع <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="اهداف المشروع" name="goal" required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> التخطيط والابتكار في
                                                                    المشروع
                                                                    <span style="color: red">*</span></label>
                                                                <input type="text" name="innovation"
                                                                    class="form-control" placeholder="تخطيط المشروع"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="control-label "> كيف يولد المشروع مستقبل اكثر
                                                                    خضرة واستدامه <span style="color: red">*</span></label>
                                                                <textarea class="form-control" name="future" cols="5" rows="5" required></textarea>
                                                            </div>
                                                            <br>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> ذكاء المشروع <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" class="form-control" name="smart"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> الاثر المتوقع للمشروع
                                                                    <span style="color: red">*</span></label>
                                                                <input type="text" class="form-control "
                                                                    name="trail" required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> مقر تنفيذ المشروع
                                                                    <span style="color: red">*</span></label>
                                                                <input type="text" name="location"
                                                                    class="form-control" required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> الموقع الألكتروني
                                                                    للمشروع
                                                                </label>
                                                                <input type="text" name="email"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row" style="justify-content: space-around;">
                                                            <button type="submit" name="formType" value="projectInitial"
                                                                class="btn">حفظ - التالي</button>
                                                        </div>
                                                        <br>
                                                    </form>
                                                @else
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <h3>برجاء تسجيل بيانات رائدة الاعمال</h3>
                                                        </div>
                                                    </div>
                                                    <br>
                                                @endisset
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
@include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
