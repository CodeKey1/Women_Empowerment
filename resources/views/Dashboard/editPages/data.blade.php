@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li>تعديل بيان مفتوح</li>
            </ul>
        </div>
        @include('Dashboard.includes.alertts.success')
        @include('Dashboard.includes.alertts.error')
        <form class="needs-validation" novalidate="" action="{{ route('dashboard.data.update', $data->id) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="widget-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="ml-auto">
                            <h3>تعديل البيانات المفتوحة</h3>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label">اسم البيان</label>
                        <div>
                            <input type="text" name="name" class="form-control" value="{{ $data->name }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label">تفاصيل البيان </label>
                        <div>
                            <input class="form-control" name="type" type="text" value="{{ $data->type }}">
                        </div>
                    </div>
                    <div class="form-group
                                col-6">
                        <label class="col-form-label">التاريخ</label>
                        <div>
                            <input class="form-control" name="date" type="date" value="{{ $data->date }}">
                        </div>
                    </div>
                    <div class="form-group
                                    col-6">
                        <label class="col-form-label">ملف البيان <span style="color: red">يجب اضافة الملف
                                مرة
                                اخرى </span></label>
                        <div>
                            <input class="form-control" type="file" name="file[]">
                        </div>
                    </div>
                    <div class="seperator"></div>
                    <div class="col-12">
                        <button type="submit" class="btn">تعديل </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

@include('Dashboard.includes.Footer')
