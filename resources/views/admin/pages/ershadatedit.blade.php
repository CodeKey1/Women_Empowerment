@extends('admin.incloudes.admin')
@section('content')
    <div class="sb2-2-2">
        <!--== BODY INNER CONTAINER ==-->

        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i> الرئيسية
                </li>
                <li class="active-bre">تعديل ارشاد
                </li>
                <li class="page-back"><a href="{{ route('admin.ershadat') }}"><i class="fa fa-backward" aria-hidden="true"></i>
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
                            <h4> تعديل ارشاد</h4>
                        </div>
                        <div class="tab-inn">
                            @isset($ershadat)
                                <form class="needs-validation" novalidate=""
                                    action="{{ route('admin.ershadat.update', $ershadat->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label class=""> اسم المبادرة </label>
                                            <input type="text" name="name" class="validate" value="{{ $ershadat->name }}"
                                                required>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-field col s12">
                                            <label> تفاصيل المبادرة </label>
                                            <textarea name="details" class="validate" required>{{ $ershadat->description }}</textarea>
                                            @error('details')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
