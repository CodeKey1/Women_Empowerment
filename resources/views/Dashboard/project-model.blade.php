@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li>نماذج المشاريع</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> نماذج المشاريع </h4>
                    </div>
                    <a href="{{ route('dashboard.project.model.add') }}" class="btn"> اضافة جديد </a>
                    @include('Dashboard.includes.alertts.success')
                    @include('Dashboard.includes.alertts.error')
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
                                    @isset($projects)
                                        @foreach ($projects as $num => $project)
                                            <tr>
                                                <td>{{ $num + 1 }}
                                                </td>
                                                <td>{{ $project->name }}</a>
                                                </td>
                                                <td style="text-align: end;">
                                                    <a href="{{ route('dashboard.project.model.edit', $project->id) }}" class="btn green inline" style="padding: 7px;">تعديل</a>
                                                    <a href="{{ route('dashboard.project.model.delete', $project->id) }}" class="btn red inline"style="padding: 7px;" onclick="return confirmSubmit()">حذف</a>

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
