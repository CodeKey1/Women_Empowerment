@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <div class="content-block">
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h2 class="text-white" style="margin-top: 130px;">{{ $course->name }}</h2>
                        <h2 class="text-white"> سجلي في التدريب الان</h2>
                    </div>
                </div>
            </div>
            @include('site.includes.alertts.success')
            @include('site.includes.alertts.error')
            <div class="page-content bg-white">
                <div class="content-block">
                    <div class="section-area section-sp1">
                        <div class="container">
                            <div class="row" dir="rtl">
                                <div class="col-lg-12 col-md-12 col-sm-12 m-b30">
                                    <div class="profile-content-bx">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="info">
                                                <div class="profile-head">
                                                    <h3 style="text-align: center">بيانات رائدة الاعمال</h3>
                                                </div>
                                                @isset($is_register)
                                                    <h3>لقد قمت بالتسجيل سابقا في نفس الدورة</h3>
                                                @else
                                                    <form class="form-horizontal" style="font-family: system-ui;"
                                                        action="{{ route('course.register.store', $course->id) }}"
                                                        method="POST"enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> الإسم رباعي <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" class="form-control" name="name"
                                                                    placeholder="يرجي ادخال الإسم رباعي" required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> رقم القومي <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" pattern="[0-9]{14,14}" maxlength="14"
                                                                    minlength="14" title="رقم البطاقة مكون من 14 رقم"
                                                                    class="form-control" name="nid"
                                                                    placeholder="رقم البطاقة مكون من 14 رقم" required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> البريد الإلكتروني
                                                                    <span style="color: red">*</span></label>
                                                                <input type="email" class="form-control" name="email"
                                                                    placeholder="البريد الإلكتروني ان وجد" required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> رقم الواتس اب <span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" pattern="[0-9]{10,11}" maxlength="11"
                                                                    minlength="10" title="رقم الهاتف مكون من 11 رقم"
                                                                    class="form-control" name="mobile"
                                                                    placeholder="رقم الهاتف مكون من 11 رقم" required>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12"> المؤهل<span
                                                                        style="color: red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    name="qualification" placeholder="نوع المؤهل" required>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <label class="control-label col-12">طبيعة التدريب
                                                                    <span style="color: red">*</span></label>
                                                                <div style="text-align: justify">
                                                                    <input type="radio" id="yes" name="is_online"
                                                                        value="1" required>
                                                                    <label for="yes"> اونلاين </label>
                                                                    <input type="radio" id="no" name="is_online"
                                                                        value="0">
                                                                    <label for="no"> مركز التدريب </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row" style="justify-content: space-around;">
                                                            <button type="submit" name="formType" value="initial"
                                                                class="btn">حفظ</button>
                                                        </div>
                                                        <br>
                                                    </form>
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
