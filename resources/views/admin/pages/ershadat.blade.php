@extends('admin.incloudes.admin')
@section('content')
    <div class="sb2-2-2">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i> الرئيسية
            </li>
            <li class="active-bre"> ارشادات
            </li>
        </ul>
    </div>
    <div>

        <a href="{{ route('admin.ershadat.create') }}" class="ad-st-view" style=" "> اضافة ارشادات جديدة </a>
    </div>
    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> ارشادات </h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>الاسم</th>
                                        <th>تفاصيل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($ershadat)
                                        @foreach ($ershadat as $num => $mopadras)
                                            <tr>
                                                <td>{{ $num + 1 }}
                                                </td>
                                                <td><a href="#"><span
                                                            class="list-enq-name">{{ $mopadras->name }}</span></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.ershadat.edit', $mopadras->id) }}"
                                                        class="ad-st-view"> تعديل </a><br>
                                                    <a href="{{ route('admin.ershadat.delete', $mopadras->id) }}"
                                                        class="ad-st-view" onclick="return confirmSubmit()"> حذف </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection