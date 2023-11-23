@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li> جميع مشاريع المستخدم </li>
            </ul>
        </div>
        @include('Dashboard.includes.alertts.success')
        @include('Dashboard.includes.alertts.error')
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
                                    @isset($projects)
                                        @foreach ($projects as $num => $project)
                                            <tr>
                                                <td>{{ ++$num }}</td>
                                                <td>{{ $project->name }}</td>
                                                <td>{{ $project->email }}</td>
                                                <td>{{ $project->role }}</td>
                                                {{-- <td style="text-align: end;width">
                                                    <a href="{{ route('user.edit', $user->id) }}" class="btn blue inline" style="padding: 7px;">
                                                         المشاريع </a>
                                                    <a href="{{ route('user.edit', $user->id) }}" class="btn green inline"
                                                        style="padding: 7px;">تعديل</a>
                                                    @if ($user->role != 'admin')
                                                        <a href="{{ route('user.delete', $user->id) }}"
                                                            onclick="return confirmSubmit()"
                                                            class="btn red inline"style="padding: 7px;">حذف</a>
                                                    @endif
                                                </td> --}}
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
