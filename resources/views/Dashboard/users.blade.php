@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li>المستخدمين</li>
            </ul>
        </div>
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
                                                        عرض </a><br>
                                                    <a href="{{ route('user.edit', $user->id) }}" class="ad-st-view">
                                                        عرض المشاريع </a><br>
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
</main>

@include('Dashboard.includes.Footer')
