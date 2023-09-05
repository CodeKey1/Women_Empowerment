@extends('admin.incloudes.admin')
@section('content')
    <div class="sb2-2-2">
        <!--== BODY INNER CONTAINER ==-->

        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i> الرئيسية
                </li>
                <li class="active-bre">تعديل المستخدم
                </li>
                <li class="page-back"><a href="{{ route('users') }}"><i class="fa fa-backward" aria-hidden="true"></i>
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
                            <h4> تعديل المستخدم</h4>
                        </div>
                        <div class="tab-inn">
                            @isset($users)
                                <form class="needs-validation" novalidate="" action="{{ route('user.update', $users->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label class=""> اسم المستخدم </label>
                                            <input type="text" name="name" class="validate" value="{{ $users->name }}"
                                                required>
                                        </div>
                                        <div class="input-field col s12">
                                            <label> الايميل </label>
                                            <input type="email" name="email" class="validate" value="{{ $users->email }}"
                                                required>
                                        </div>
                                        <div class="input-field col s12">
                                            <label> كلمة السر <span style="color: red">يجب ادخال كلمة سر جديدة</span></label>
                                            <input type="password" name="password" class="validate" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button type="submit" class="btn">تعديل</button>
                                        </div>
                                    </div>
                                </form>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
