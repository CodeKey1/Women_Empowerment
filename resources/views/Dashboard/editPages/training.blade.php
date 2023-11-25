@include('Dashboard.includes.Header')
@include('Dashboard.includes.Sidebar')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">الرئيسية</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-user"></i></a></li>
                <li> تعديل تدريبات</li>
            </ul>
        </div>
        @include('Dashboard.includes.alertts.success')
        @include('Dashboard.includes.alertts.error')
        <form class="needs-validation" novalidate="" action="{{ route('dashboard.courses.update', $courses->id) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="widget-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="ml-auto">
                            <h3>تعديل التدريب</h3>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label"> اسم التدريب المشروع </label>
                        <div>
                            <input type="text" name="name" class="form-control" value="{{ $courses->name }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label"> تفاصيل التدريب المختصر </label>
                        <div>
                            <input type="text" name="details" class="form-control" value="{{ $courses->details }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label"> معاد التدريب </label>
                        <div>
                            <input type="date" name="date" class="form-control" value="{{ $courses->date }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label"> تخصص التدريب </label>
                        <div>
                            <select name="cat" class="form-control" required>
                                <option value="{{ $courses->type_id }}" selected hidden>{{ $courses->type_name->name }}
                                </option>
                                @isset($type)
                                    @foreach ($type as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="col-form-label"> صورة التدريب <span style="color: red">يجب اضافة الملف
                                مرة
                                اخرى </span></label>
                        <div>
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ml-auto">
                            <h3>تفاصيل التدريب</h3>
                        </div>
                    </div>
                    @if ($courses_details)
                        <div class="form-group col-6">
                            <label class="col-form-label"> متطلبات التدريب </label>
                            <div>
                                <textarea class="form-control" name="pre_req" required>{{ $courses_details->pre_req }}</textarea>
                                @error('pre_req')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> وصف التدريب </label>
                            <div>
                                <textarea class="form-control" name="description" required>{{ $courses_details->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> لمن هذا التدريب</label>
                            <div>
                                <input class="form-control" type="text" name="for_whom"
                                    value="{{ $courses_details->for_whom }}" required>
                                @error('for_whom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> مكان التدريب</label>
                            <div>
                                <input class="form-control" type="text" name="location"
                                    value="{{ $courses_details->location }}" required>
                                @error('location')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> فيديو التدريب (ان وجد) <span style="color: red">فيديو MP4
                                </span><br><span style="color: red">يجب اضافة الملف
                                    مرة
                                    اخرى </span></label>
                            <div>
                                <input class="form-control" type="file" name="video" accept="video/mp4">
                                @error('video')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> عرض تقديمي (ان وجد) <span style="color: red">PDF
                                </span><br><span style="color: red">يجب اضافة الملف
                                    مرة
                                    اخرى </span></label>
                            <div>
                                <input class="form-control" type="file" name="presentation" accept="application/pdf">
                                @error('presentation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="seperator"></div>
                        <div class="col-12">
                            <button type="submit" class="btn">تعديل </button>
                        </div>
                    @else
                        <div class="form-group col-6">
                            <label class="col-form-label"> متطلبات التدريب </label>
                            <div>
                                <textarea class="form-control" name="pre_req" required></textarea>
                                @error('pre_req')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> وصف التدريب </label>
                            <div>
                                <textarea class="form-control" name="description" required></textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> لمن هذا التدريب</label>
                            <div>
                                <input class="form-control" type="text" name="for_whom" value="" required>
                                @error('for_whom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> مكان التدريب</label>
                            <div>
                                <input class="form-control" type="text" name="location" value="" required>
                                @error('location')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> فيديو التدريب (ان وجد) <span style="color: red">فيديو MP4
                                </span><br><span style="color: red">يجب اضافة الملف
                                    مرة
                                    اخرى </span></label>
                            <div>
                                <input class="form-control" type="file" name="video" accept="video/mp4">
                                @error('video')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label"> عرض تقديمي (ان وجد) <span style="color: red">PDF
                                </span><br><span style="color: red">يجب اضافة الملف
                                    مرة
                                    اخرى </span></label>
                            <div>
                                <input class="form-control" type="file" name="presentation"
                                    accept="application/pdf">
                                @error('presentation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="seperator"></div>
                        <div class="col-12">
                            <button type="submit" class="btn">تعديل </button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div>
</main>

@include('Dashboard.includes.Footer')
