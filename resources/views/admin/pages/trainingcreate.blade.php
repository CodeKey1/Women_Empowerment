@extends('admin.incloudes.admin')
@section('content')
<div class="sb2-2-2">
<!--== BODY INNER CONTAINER ==-->

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
            </li>
            <li class="active-bre"><a href="#"> اضافة تدريب</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.apply') }}"><i class="fa fa-backward" aria-hidden="true"></i> عودة </a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    @include('site.incloud.alertts.success')
    @include('site.incloud.alertts.error')
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4> اضافة تدريب</h4>
                    </div>
                    <div class="tab-inn">
                        <form class="needs-validation" novalidate=""
                        action="{{ route('admin.courses.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="name" class="validate" required >
                                    <label class=""> اسم التدريب المشروع </label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea name="details" class="validate" required ></textarea>
                                    <label > تفاصيل التدريب </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <label class=""> معاد التدريب </label>
                                    <input type="date" name="date" class="validate" required >
                                </div>
                                <div class="input-field col s6">
                                    <label class=""> تخصص التدريب </label>
                                    <input type="text" name="cat" class="validate" required >
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label class=""> صورة للتدريب </label>
                                    <input type="file" name="image[]" class="validate" required >
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