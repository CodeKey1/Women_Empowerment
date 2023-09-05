@extends('admin.incloudes.admin')
@section('content')
    <div class="sb2-2-2">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i> الرئيسية
            </li>
            <li class="active-bre">المستخدمين
            </li>

        </ul>
    </div>


    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> جميع المستخدمين</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>الاسم</th>
                                        <th>البريد الالكتروني</th>
                                        <th>الصلاحية</th>
                                        <th>تفاصيل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($users)
                                        @foreach ($users as $num => $user)
                                            <tr>
                                                <td>{{ ++$num }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role }}</td>
                                                <td><a href="{{ route('user.edit', $user->id) }}" class="ad-st-view">
                                                        تعديل </a><br>
                                                    @if ($user->role != 'admin')
                                                        <a href="{{ route('user.delete', $user->id) }}" class="ad-st-view"
                                                            onclick="return confirmSubmit()"> حذف </a>
                                                    @endif
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
