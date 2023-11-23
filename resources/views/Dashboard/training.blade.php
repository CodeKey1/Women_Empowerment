@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li>التدريبات</li>
            </ul>
        </div>
        <div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> التدريبات </h4>
                    </div>
                    <a href="{{ route('dashboard.courses.add') }}" class="btn"> اضافة جديد </a>
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
                                    @isset($training)
                                        @foreach ($training as $num => $train)
                                            <tr>
                                                <td>{{ $num + 1 }}
                                                </td>
                                                <td><a href="#"><span
                                                            class="list-enq-name">{{ $train->name }}</span></a>
                                                </td>
                                                <td style="text-align: end;">
                                                    <a href="{{ route('dashboard.courses.edit', $train->id) }}" class="btn green inline" style="padding: 7px;">تعديل</a>
                                                    <a href="{{ route('dashboard.courses.delete', $train->id) }}" class="btn red inline"style="padding: 7px;" onclick="return confirmSubmit()">حذف</a>

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
