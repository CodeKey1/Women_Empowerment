@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li>تعديل الاخبار</li>
            </ul>
        </div>
        @include('Dashboard.includes.alertts.success')
        @include('Dashboard.includes.alertts.error')
        <form class="needs-validation" novalidate="" action="{{ route('dashboard.news.update', $news->id) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="widget-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="ml-auto">
                            <h3>تعديل الاخبار</h3>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label"> اسم الخبر </label>
                        <div>
                            <input type="text" name="name" class="form-control" value="{{ $news->name }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label"> موجز الخبر </label>
                        <div>
                            <input type="text" name="brief" class="form-control" value="{{ $news->brief }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="col-form-label"> تفاصيل الخبر </label>
                        <div>
                            <textarea class="form-control" name="details" required>{{ $news->details }}</textarea>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label"> تاريخ الخبر </label>
                        <div>
                            <input type="date" name="date" class="form-control" value="{{ $news->date }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <label class="col-form-label"> صورة الخبر <span style="color: red">يجب اضافة الصورة
                                مرة
                                اخرى </span></label>
                        <div>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <label class="col-form-label"> فيديو <span style="color: red">MP4 لا
                                يتعدي 10 ميجا</span><br><span style="color: red">يجب اضافة الفيديو
                                مرة
                                اخرى </span></label>
                        <div>
                            <input type="file" name="video" class="form-control" accept="video/mp4">
                            @error('video')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
