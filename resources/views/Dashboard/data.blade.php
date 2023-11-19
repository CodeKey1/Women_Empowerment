@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li>البيانات المفتوحة</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> البيانات المفتوحة </h4>
                    </div>
                    <a href="{{ route('dashboard.data.add') }}" class="btn"> اضافة جديد </a>
                    @include('Dashboard.includes.alertts.success')
                    @include('Dashboard.includes.alertts.error')
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>اسم البيان</th>
                                        <th>تفاصيل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($openData)
                                        @foreach ($openData as $num => $data)
                                            <tr>
                                                <td>{{ $num + 1 }}</td>
                                                <td>{{ $data->name }}</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('dashboard.data.edit', $data->id) }}"
                                                        class="ad-st-view">
                                                        تعديل
                                                    </a><br>
                                                    <a href="{{ route('dashboard.data.delete', $data->id) }}"
                                                        class="ad-st-view" onclick="return confirmSubmit()">
                                                        حذف
                                                    </a>
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
