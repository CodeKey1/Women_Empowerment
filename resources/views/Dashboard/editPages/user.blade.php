@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li>المستخدمين</li>
            </ul>
        </div>
        @include('Dashboard.includes.alertts.success')
        @include('Dashboard.includes.alertts.error')
        <form method="POST" action="{{ route('dashboard.users.update',$users->id) }}" class="needs-validation">
            @csrf
            <div class="widget-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="ml-auto">
                            <h3> تعديل بيانات المستخدم </h3>
                        </div>
                    </div>

                        <div class="form-group col-12">
                            <label class="col-form-label"> الإسم</label>
                            <div>
                                <input type="text" name="name" value="{{ $users->name }}" class="form-control" required>
                            </div>
                        </div>
                    <div class="form-group col-12">
                        <label class="col-form-label"> البريد الإلكتروني </label>
                        <div>
                            <input type="email" name="email" value="{{ $users->email }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="col-form-label"> الرقم السري </label>
                        <div>
                            <input class="form-control" type="password"  name="password" required />
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
