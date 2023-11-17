@extends('admin.incloudes.admin')
@section('content')
    <div class="sb2-2-2">
        <ul>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> عودة </a>
            </li>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
            </li>
            <li class="active-bre"><a href="#"> الإحصائيات </a>
            </li>

        </ul>
    </div>


    <!--== User Details ==-->
    {{-- <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> جميع المتقدمين</h4>
                        <p> لرائدات أعمال </p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>اسم المستخدم</th>
                                        <th>الهاتف</th>
                                        <th>المركز / المدينة</th>
                                        <th>الحالة</th>
                                        <th>عرض</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($apply)
                                        @foreach ($apply as $num => $applys)
                                            <tr>
                                                <td><span class="list-img"><img src="images/icon/db1.png" alt=""></span>
                                                </td>
                                                <td><a href="#"><span class="list-enq-name">{{ $applys->name }}</span></a>
                                                </td>
                                                <td>{{ $applys->phone }}</td>
                                                <td>{{ $applys->address }}</td>
                                                <td>
                                                    <span class="label label-success">فعال</span>
                                                </td>
                                                <td><a href="{{ route('admin.apply.show', $applys->user_id) }}"
                                                        class="ad-st-view"> عرض </a></td>
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
    </div> --}}
@endsection
