@extends('admin.incloudes.admin')
@section('content')
    <div class="sb2-2-2">
        <!--== BODY INNER CONTAINER ==-->

        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i> الرئيسية
                </li>
                <li class="active-bre"> اضافة بيانات مفتوحة
                </li>
                <li class="page-back"><a href="{{ route('admin.data') }}"><i class="fa fa-backward" aria-hidden="true"></i>
                        عودة </a>
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
                            <h4> اضافة بيان المفتوحة </h4>
                        </div>
                        <div class="tab-inn">
                            <form class="needs-validation" novalidate="" action="{{ route('admin.data.store') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label class="control-label"> اسم البيان </label>
                                        <input type="text" name="name" class="validate" required>
                                    </div>
                                    <div class="input-field col s12">
                                        <label class="control-label"> نوع البيان </label>
                                        <textarea name="type" class="validate" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <label class="control-label"> التاريخ </label>
                                        <input type="date" name="date" class="validate" required>
                                    </div>
                                    <div class="input-field col s6">
                                        <label class="control-label"> ملف البيان </label>
                                        <input type="file" name="file[]" class="validate" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button type="submit" class="btn">حفظ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
