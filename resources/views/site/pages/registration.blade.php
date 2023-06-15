@extends('site.page')
@section('content')
    <!--SECTION START-->
    <section class="c-all h-quote">
        <div class="container" style="direction: rtl;">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="all-title quote-title qu-new">
                    <h2> سجلي مشروعك </h2>
                    <p>
                    </p>
                    <p></p>
                    <p class="help-line"> لدعم الفني <span>+010 4561 32145</span> </p> <span class="help-arrow pulse"><i
                            class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                        <form class="form-horizontal" style="font-family: system-ui;" action="{{ route('project.store') }}"
                        method="POST"enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-3"> الإسم ثلاثي </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" placeholder="يرجي ادخال الإسم ثلاثي"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3"> رقم الموبايل </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="phone" placeholder=" رقم الموبايل الخاص بكي "
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3"> البريد الإلكتروني </label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني ان وجد">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3"> مركز / مدينة </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="city" placeholder=" ادخل العنوان ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3"> عن المشروع </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="about" placeholder="كلمة عن المشروع ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3"> نوع المشروع </label>
                                <div class="col-sm-9">
                                    <select name="type_id">
                                        <option>-- اختر نوع المشروع --</option>
                                        @isset($type)
                                            @if ($type && $type->count() > 0)
                                                @foreach ($type as $types)
                                                    <option value="{{ $types->id }}">
                                                        {{ $types->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        @endisset
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper">
                                        <input type="submit" value=" سجل مشروعك الان " class="waves-button-input" data-toggle="modal" data-target="#modal5"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
