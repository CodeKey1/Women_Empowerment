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
                                <li class="active">
                                    <a data-toggle="tab" href="#home">
                                        <img src="images/icon/cor4.png" alt="">
                                        <span> بيانات رائدة الأعمال</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <form class="form-horizontal" style="font-family: system-ui;"
                                        action="{{ route('project.edit', $Project_owner->id) }}"
                                        onsubmit="return confirmSubmit();" method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <h4 style="text-align: center;"> بيانات رائدة الأعمال </h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> رقم القومي <span
                                                        style="color: red">*</span></label>
                                                <input type="text" pattern="[0-9]{14,14}" maxlength="14" minlength="14"
                                                    class="form-control" name="nid" value="{{ $Project_owner->nid }}"
                                                    title="رقم البطاقة مكون من 14 رقم">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> الإسم رباعي <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $Project_owner->name }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> البريد الإلكتروني <span
                                                        style="color: red">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ $Project_owner->email }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> التليفون <span
                                                        style="color: red">*</span></label>
                                                <input type="text" pattern="[0-9]{10,11}" maxlength="11" minlength="10"
                                                    class="form-control" name="phone" value="{{ $Project_owner->phone }}"
                                                    title="رقم الهاتف مكون من 11 رقم">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label col-sm-3"> عنوان رائدة الأعمال (المدينة -
                                                    العنوان) <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="address"
                                                    value="{{ $Project_owner->address }}">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @section('modal')
        @endsection
