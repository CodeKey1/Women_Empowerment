@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li> اضافة نماذج مشاريع</li>
            </ul>
        </div>
        @include('Dashboard.includes.alertts.success')
        @include('Dashboard.includes.alertts.error')
        <form class="needs-validation" novalidate="" action="{{ route('dashboard.project.model.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="widget-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="ml-auto">
                            <h3>نماذج المشاريع</h3>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label">اسم نموذج المشروع </label>
                        <div>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="col-form-label">تفاصيل المشروع </label>
                        <div>
                            <textarea class="form-control" name="details" required></textarea>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label">صورة المشروع </label>
                        <div>
                            <input class="form-control" type="file" name="image">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="seperator"></div>
                    <div class="col-12">
                        <button type="submit" class="btn">حفظ</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

@include('Dashboard.includes.Footer')
