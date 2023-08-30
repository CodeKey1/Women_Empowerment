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
                    <div class="col s12">
                        <form class="s12" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <div class="input-field s12">
                                    <input type="email" data-ng-model="name" name="email" class="validate">
                                    <label>البريد الالكتروني</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="password" name="password" class="validate">
                                    <label>الرقم السري</label>
                                </div>
                            </div>
                            <div dir="rtl">
                                <div class="input-field s4">
                                    <input type="submit" value="تسجيل الدخول" class="waves-effect waves-light log-in-btn">
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal"
                                        data-target="#modal3">نسيت كلمة السر</a> | <a href="#" data-dismiss="modal"
                                        data-toggle="modal" data-target="#modal2">انشاء حساب جديد</a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
