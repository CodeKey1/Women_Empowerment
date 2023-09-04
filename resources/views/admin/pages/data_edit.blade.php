@extends('admin.incloudes.admin')
@section('content')
<div class="sb2-2-2">
<!--== BODY INNER CONTAINER ==-->

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
            </li>
            <li class="active-bre"><a href="#"> اضافة بيانات مفتوحة</a>
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
                        <h4> اضافة بيان المفتوحة </h4>
                    </div>
                    <div class="tab-inn">
                        <form class="needs-validation" novalidate=""
                        action="{{ route('admin.data.update',$data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <label class="control-label"> اسم البيان </label>
                                    <input type="text" name="name" value="{{ $data->name }}" class="validate" required >
                                    @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                                <div class="input-field col s12">
                                    <label class="control-label">  نوع البيان </label>
                                    <textarea name="type"  class="validate" required >{{ $data->type }}</textarea>
                                    @error('type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <label class="control-label"> التاريخ </label>
                                    <input type="date" name="date" value="{{ $data->date }}" class="validate" required >
                                    @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                                <div class="input-field col s6">
                                    <label class="control-label">  ملف البيان </label>
                                    <input type="file" name="file[]" value="{{ $data->file }}" class="validate" required >
                                    @error('file')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
