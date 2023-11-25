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
                        <h4> جميع مقدمي المشاريع</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم المشروع </th>
                                        <th> مجال المشروع </th>
                                        <th> حالة المشروع </th>
                                        <th> ت : التقديم </th>
                                        <th> تفاصيل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($projects)
                                        @foreach ($projects as $num => $project)
                                            <tr>
                                                <td>{{ ++$num }}</td>
                                                <td>{{ $project->name }}</td>
                                                <td>{{ $project->project_type->name }}</td>
                                                <td>{{ $project->state }}</td>
                                                <td>{{ $project->date }}</td>
                                                <td>
                                                    <a href="{{ route('dashboard.project.single',$project->id) }}" class="btn green inline" style="padding: 7px;"> عرض المشروع </a>
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
