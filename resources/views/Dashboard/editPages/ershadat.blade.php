@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li>تعديل ارشادات</li>
            </ul>
        </div>
        @include('Dashboard.includes.alertts.success')
        @include('Dashboard.includes.alertts.error')
        <form class="needs-validation" novalidate="" action="{{ route('dashboard.ershadat.update', $ershadat->id) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="widget-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="ml-auto">
                            <h3>تعديل الارشادات</h3>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label"> اسم الارشاد </label>
                        <div>
                            <input type="text" name="name" class="form-control" value="{{ $ershadat->name }}"
                                required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label"> تفاصيل الارشاد </label>
                        <div>
                            <textarea class="form-control" name="details" required>{{ $ershadat->description }}</textarea>
                            @error('details')
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
