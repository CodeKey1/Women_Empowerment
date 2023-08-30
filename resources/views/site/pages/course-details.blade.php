@extends('site.page')
@section('content')
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70 pg-inn" dir="rtl">
            <div class="row">
                <div class="cor">

                    <div class="col-md-12">
                        <div class="cor-mid-img">
                            <img src="images/slider/cover.jpg" alt="" style="height: 45vh; border-radius: 5px">
                        </div>
                        <div class="cor-con-mid">
                            @isset($details)
                                @foreach ($details as $item)
                                    <div class="cor-p1">
                                        <h2>تفاصيل التدريب</h2>
                                        <span>كل ما تحتاجه للتدريب</span>
                                    </div>
                                    <div class="cor-p4">
                                        <h3>متطلبات التدريب</h3>
                                        <p>{{ $item->pre_req }}</p>
                                    </div>
                                    <div class="cor-p5">
                                        <h3>التدريب</h3>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#desc">
                                                    <img src="images/icon/cor4.png" alt=""> <span> وصف التدريب </span>
                                                </a>
                                            </li>
                                            <li><a data-toggle="tab" href="#whom"><img src="images/icon/cor1.png"
                                                        alt="">
                                                    <span> لمن هذا التدريب </span> </a></li>
                                            <li><a data-toggle="tab" href="#place"><img src="images/icon/cor5.png"
                                                        alt="">
                                                    <span> مكان التدريب </span> </a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="desc" class="tab-pane fade in active">
                                                <h4>وصف التدريب</h4>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <div id="whom" class="tab-pane fade">
                                                <h4>لمن هذا التدريب</h4>
                                                <p>{{ $item->for_whom }}</p>
                                            </div>
                                            <div id="place" class="tab-pane fade">
                                                <h4>مكان التدريب</h4>
                                                <p>{{ $item->location }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="cor-p4">
                                        <h3>عرض تقديمي</h3>
                                        @if ($item->video)
                                            <video src="{{ $item->video }}" controls autoplay muted width="100%"></video>
                                        @endif
                                        <br>
                                        @if ($item->presentation)
                                            here presentation
                                        @endif
                                    </div>
                            </div>
                            @endforeach
                        @endisset
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
@section('script')
@endsection
