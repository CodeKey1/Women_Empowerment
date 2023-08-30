<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="{{ route('site') }}" class="logo"><img src="images/3.jpeg" alt="" style="width: 50px;"/>
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li style="width: 50%;">
                            <h5>مرحبا :  {{ Auth::user()->name }} </h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                @include('admin.incloudes.sidebar')
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                @yield('content')
                <!--== breadcrumbs ==-->

            </div>

        </div>
    </div>
