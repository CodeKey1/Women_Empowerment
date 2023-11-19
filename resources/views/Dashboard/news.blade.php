@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li>الاخبار</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> الاخبار </h4>
                    </div>
                    <a href="{{ route('dashboard.news.add') }}" class="btn"> اضافة جديد </a>
                    @include('Dashboard.includes.alertts.success')
                    @include('Dashboard.includes.alertts.error')
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>اسم الخبر</th>
                                        <th>موجز الخبر</th>
                                        <th>تفاصيل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($news)
                                        @foreach ($news as $num => $data)
                                            <tr>
                                                <td>{{ $num + 1 }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->brief }}</td>
                                                <td>
                                                    <a href="{{ route('dashboard.news.edit', $data->id) }}"
                                                        class="ad-st-view">
                                                        تعديل
                                                    </a><br>
                                                    <a href="{{ route('dashboard.news.delete', $data->id) }}"
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
