@extends('admin.incloudes.admin')
@section('content')
<div class="sb2-2-2">
<!--== BODY INNER CONTAINER ==-->

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
            </li>
            <li class="active-bre"><a href="#"> عرض بيانات المتقدم </a>
            </li>
            <li class="page-back"><a href="{{ route('admin.apply') }}"><i class="fa fa-backward" aria-hidden="true"></i> عودة </a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4> بيانات رائدة الاعمال </h4>
                        <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                    </div>
                    <div class="tab-inn">
                        <form>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" value="John" class="validate" required disabled>
                                    <label class="">First name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" value="Smith" class="validate" required disabled>
                                    <label class="">Last name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="number" value="0198575241" class="validate" required disabled>
                                    <label class="">Phone number</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="email" class="validate" value="john_smith@gmail.com" required disabled>
                                    <label class="">Email is</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" value="New york" class="validate" disabled>
                                    <label class="">City</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" value="united states" class="validate" disabled>
                                    <label class="">Country</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="password" value="sdflg345609" class="validate" disabled>
                                    <label class="">Password</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="password" value="asfgdkl678" class="validate" disabled>
                                    <label class="">Confirm Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="ST17241" class="validate" disabled>
                                    <label>Student id</label>
                                </div>
                            </div>
                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
