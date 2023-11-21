{{-- @extends('site.page')
@section('content')
    <!--SECTION START-->
    <section style="direction: rtl">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">

                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2> البيانات <span> المفتوحة </span></h2>
                            <p> استراتيجية مسرعات رائدات الاعمال للمشروعات الخضراء الذكيه </p>
                        </div>
                        <div class="pro-con-table">
                            <table class="bordered responsive-table" style="text-align: center">
                                <thead style="text-align: center">
                                    <tr style="text-align: center">
                                        <th style="text-align: center">#</th>
                                        <th style="text-align: center"> اسم البيان</th>
                                        <th style="text-align: center"> نوع البيان </th>
                                        <th style="text-align: center"> السنة</th>
                                        <th style="text-align: center"> عرض البيان </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @isset($data)
                                        @foreach ($data as $num => $dataopen)
                                            <tr>
                                                <td style="text-align: center"> {{ $num + 1 }} </td>
                                                <td style="text-align: center"> {{ $dataopen->name }} </td>
                                                <td style="text-align: center"> {{ $dataopen->type }} </td>
                                                <td style="text-align: center"> {{ $dataopen->date }} </td>
                                                <td style="text-align: center"><a
                                                        href="{{ URL::to('images/data/' . $dataopen->file) }}" target="_blank"
                                                        class="ad-st-view"> عرض </a></td>
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
    </section>
    <!--SECTION END-->
@endsection --}}

@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h2 class="text-white" style="margin-top: 130px;"> البيانـات المفتوحـة </h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- Your Faq -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <table class="table table-bordered" style="direction: rtl; ">
                                <thead>
                                    <tr>
                                        <th scope="col"> # </th>
                                        <th scope="col">اسم البيان</th>
                                        <th scope="col">نوع البيان</th>
                                        <th scope="col">السنة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($data)
                                        @foreach ($data as $num => $dataopen)
                                            <tr>
                                                <td style="text-align: center"> {{ $num + 1 }} </td>
                                                <td style="text-align: center"> {{ $dataopen->name }} </td>
                                                <td style="text-align: center"> {{ $dataopen->type }} </td>
                                                <td style="text-align: center"> {{ $dataopen->date }} </td>
                                                {{-- <td style="text-align: center"><a
                                                        href="{{ URL::to('images/data/' . $dataopen->file) }}"
                                                        target="_blank" class="ad-st-view"> عرض </a></td> --}}
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Your Faq End -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')
