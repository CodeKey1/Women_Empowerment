@extends('site.page')
@section('css')
    <style>
        .slidecontainer {
            width: 100%;
        }

        .slider {
            -webkit-appearance: none !important;
            width: 100% !important;
            height: 25px !important;
            background: #d3d3d3 !important;
            outline: none !important;
            opacity: 0.7 !important;
            -webkit-transition: .2s !important;
            transition: opacity .2s !important;
        }

        .slider:hover {
            opacity: 1 !important;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            appearance: none !important;
            width: 25px !important;
            height: 25px !important;
            background: #04AA6D !important;
            cursor: pointer !important;
        }

        .slider::-moz-range-thumb {
            width: 25px !important;
            height: 25px !important;
            background: #04AA6D !important;
            cursor: pointer !important;
        }
    </style>
@endsection
@section('content')
    <!--SECTION START-->

    <section class="h-quote">
        <div class="container" style="direction: rtl;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    @include('site.incloud.alertts.success')
                    @include('site.incloud.alertts.error')
                    <div class="col s12">
                        <div class="cor-p5">
                            <ul class="nav nav-tabs search-top">
                                <li class="{{ !session('menu1_active') ? 'in active' : null }}">
                                    <a data-toggle="tab" href="#home">
                                        <img src="images/icon/cor4.png" alt="">
                                        <span> بيانات رائدة الأعمال</span>
                                    </a>
                                </li>
                                <li class="{{ session('menu1_active') ? 'active' : null }}"><a data-toggle="tab"
                                        href="#menu1"><img src="images/icon/cor3.png" alt=""><span> المشروع
                                        </span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home"
                                    class="tab-pane fade {{ !session('menu1_active') ? 'in active' : null }}">
                                    @if (!App\Models\Project_owner::where('user_id', Auth::user()->id)->exists('user_id'))
                                        <form class="form-horizontal" style="font-family: system-ui;"
                                            action="{{ route('project.Initial_store') }}"
                                            method="POST"enctype="multipart/form-data">
                                            @csrf
                                            <h4 style="text-align: center;"> بيانات رائدة الأعمال </h4>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <label class="control-label col-sm-3"> رقم القومي <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" pattern="[0-9]{14,14}" maxlength="14"
                                                        minlength="14" title="رقم البطاقة مكون من 14 رقم"
                                                        class="form-control" name="nid" placeholder="" required>
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
                                                    <label class="control-label col-sm-3"> البريد الإلكتروني <span
                                                            style="color: red">*</span></label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="البريد الإلكتروني ان وجد" required>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <label class="control-label col-sm-3"> التليفون <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" pattern="[0-9]{10,11}" maxlength="11"
                                                        minlength="10" title="رقم الهاتف مكون من 11 رقم"
                                                        class="form-control" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <label class="control-label col-sm-3"> عنوان رائدة الأعمال (المدينة -
                                                        العنوان) <span style="color: red">*</span></label>
                                                    <input type="text" class="form-control" name="address" placeholder=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <label class="control-label col-sm-3"> الرغبة في الحصول على تمويل
                                                        <span style="color: red">*</span></label>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <input type="radio" id="yes" name="fund" value="1"
                                                        required>
                                                    <label for="yes"> نعم </label>
                                                    <input type="radio" id="no" name="fund" value="0">
                                                    <label for="no">لا </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                {{-- <a data-toggle="tab" class="btn btn-danger">عودة</a> --}}
                                                <button type="submit" name="formType" value="initial" class="btn">حفظ -
                                                    التالي</button>
                                            </div>
                                        </form>
                                    @else
                                        <h3>تم تسجيل بيانات رائدة الاعمال</h3>
                                        <a data-toggle="tab" class="btn" href="#menu1">سجل مشروع جديد</a>
                                    @endif
                                </div>
                                <div id="menu1"
                                    class="tab-pane fade tab {{ session('menu1_active') ? 'in active' : null }}">
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.store', $owner_id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <h4 style="text-align: center;"> بيانات المشروع </h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> اسم المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="name" required>
                                                <input type="text" class="form-control" name="owner_id"
                                                    value=" {{ Auth::user()->id }}" style="display: none;">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> مجال المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="category"
                                                    placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> ملخص فكرة المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="idea" required>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> تاريخ البدء المتوقع <span
                                                        style="color: red">*</span></label>
                                                <input type="date" class="form-control" name="date" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> أهداف المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="goal" required>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> التخطيط والابتكار في المشروع
                                                    <span style="color: red">*</span></label>
                                                <input type="text" name="innovation" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> كيف يولد المشروع مستقبل اكثر
                                                    خضرة
                                                    واستدامه <span style="color: red">*</span></label>
                                                <textarea class="form-control" name="future" cols="5" rows="5" required></textarea>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> ذكاء المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="smart" required>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الاثر المتوقع للمشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="trail" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> الموقع الألكتروني للمشروع
                                                </label>
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-6"> مقر تنفيذ المشروع <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="location" class="form-control" required>
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
                                                <textarea class="form-control"  name="name[]"   cols="3" rows="3" placeholder="  " required></textarea>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> آلية القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="measurement[]" class="form-control"  required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> المستهدف <span
                                                        style="color: red">*</span></label>
                                                <input type="text" name="target[]" class="form-control"  required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> وحدة القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text"  name="unit[]" class="form-control"  required>
                                            </div>
                                            <div class="col-md-3 ">
                                                <label class="control-label "> دورية القياس <span
                                                        style="color: red">*</span></label>
                                                <input type="text"  name="period[]" class="form-control"  required>
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
                div.className = 'row plane';
                div.innerHTML =
                    `
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

                                        <div class="row" >
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
                                            <a href="javascript:void(0)"
                                                style="float: left;background-color: seagreen;color: white;border-radius: 6px;width: 40px;"
                                                id="addplan-btn" class="btn btn-primary" onclick="addplanRow()"> + </a>

                                        </div>
                <input type="button" class="btn btn-danger" style="width:50px; height: 35px;" value="x" onclick="removeplanRow(this)" /> `;;
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
