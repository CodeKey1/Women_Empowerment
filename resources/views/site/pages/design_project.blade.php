@extends('site.page')
@section('css')
    <style>
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        * {
            position: relative;
            margin: 0;
            padding: 0;

            border: 0 none;

            -webkit-transition: all ease .4s;
            -moz-transition: all ease .4s;
            transition: all ease .4s;
        }

        h1 {
            padding-top: 40px;

            color: #ccc;
            text-align: center;
            font-size: 1.8rem;

            text-shadow: rgba(0, 0, 0, 0.6) 1px 0, rgba(0, 0, 0, 0.6) 1px 0, rgba(0, 0, 0, 0.6) 0 1px, rgba(0, 0, 0, 0.6) 0 1px;
        }

        .navP {
            margin: 20px;
            width: 455px;
            min-height: auto;
        }

        .navP ul {
            position: relative;
            padding-top: 20px;
        }

        .navP li {
            position: relative;
            padding: 20px 3px 0 3px;
            float: left;

            text-align: center;
            list-style-type: none;
        }

        .navP li::before,
        .navP li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            width: 50%;
            height: 20px;
            border-top: 1px solid #ccc;
        }

        .navP li::after {
            left: 50%;
            right: auto;

            border-left: 1px solid #ccc;
        }

        .navP li:only-child::after,
        .navP li:only-child::before {
            content: '';
            display: none;
        }

        .navP li:only-child {
            padding-top: 0;
        }

        .navP li:first-child::before,
        .navP li:last-child::after {
            border: 0 none;
        }

        .navP li:last-child::before {
            border-right: 1px solid #ccc;
            border-radius: 0 5px 0 0;
        }

        .navP li:first-child::after {
            border-radius: 5px 0 0 0;
        }

        .navP ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }

        .navP li a {
            display: inline-block;
            padding: 10px 20px;

            border-radius: 5px;
            border: 1px solid #ccc;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            color: #ffffff;
            font-family: system-ui;
            font-size: 15px;
            background: teal;
        }

        .navP li a:hover,
        .navP li a:hover+ul li a {
            color: #000;
            background: #c8e4f8;
            border: 1px solid #94a0b4;
        }

        .navP li a:hover+ul li::after,
        .navP li a:hover+ul li::before,
        .navP li a:hover+ul::before,
        .navP li a:hover+ul ul::before {
            content: '';
            border-color: #94a0b4;
        }
    </style>
@endsection
@section('content')
    <section class="c-all p-semi" style="direction: rtl">
        <div class="semi-inn">
            <div class="semi-com semi-left" style="display: none">
                <div class="all-title quote-title qu-new semi-text">
                    <h2> صمم مشروعك </h2>
                    <p> </p>
                    <p> </p>
                    <div class="semi-deta">
                        <ul>
                            {{-- <li>DATE:<span>Jan 01, 2018</span></li>
                        <li>Time:<span>02:00 PM GMT</span></li>
                        <li>Topic:<span>Feature Technology</span></li>
                        <li>Location:<span>illinois, united states</span></li> --}}
                        </ul>
                    </div>
                    <p class="help-line">Join this for free!</p>
                </div>
            </div>
            <div class="semi-com semi-right" style="display: none">
                <div class="n-form-com semi-form">
                    <div class="col s12">
                        <form class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="اسم المشروع" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" placeholder=" " required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Email id" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>
                            <div class="form-group mar-bot-0">
                                <div class="col-md-12">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input
                                            type="submit" value="APPLY NOW" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="navP" style="display: block">
                <ul style="width: max-content;">
                    <li>
                        <a href="#"> اسم المشروع</a>
                        <ul>
                            <li>
                                <a href="#"> النجاح </a>
                                <ul>
                                    <li>
                                        <a href="#"> 1 </a>

                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"> مرحلة النمو والانتشار </a>
                                <ul>
                                    <li>
                                        <a href="#"> النمو والانتشار</a>
                                        <ul>
                                            <li>
                                                <a href="#"> مرحلة </a>
                                            </li>
                                            <li>
                                                <a href="#">مرحلة</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"> مرحلة التنفيذ </a>
                                <ul>
                                    <li>
                                        <a href="#"> العمل</a>
                                        <ul>
                                            <li>
                                                <a href="#"> مرحلة </a>
                                            </li>
                                            <li>
                                                <a href="#">مرحلة</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"> مرحلة تخطيط الاعمال</a>
                                <ul>
                                    <li>
                                        <a href="#">التخطيط</a>
                                        <ul>
                                            <li>
                                                <a href="#">مرحلة</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">مرحلة</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">مرحلة</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">العمل</a>
                                        <ul>
                                            <li>
                                                <a href="#">مرحلة</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">مرحلة</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"> مرحلة التفكير</a>
                                <ul>
                                    <li>
                                        <a href="#">التفكير</a>
                                        <ul>
                                            <li>
                                                <a href="#">مرحلة</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">مرحلة</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">مرحلة</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"> التنفيذ </a>
                                        <ul>
                                            <li>
                                                <a href="#">مرحلة</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">مرحلة</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--SECTION START-->
    {{-- <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="col-md-12" >
                    <div class="navP" style="display: none">
                        <ul style="width: max-content;">
                            <li>
                                <a href="#">Home</a>
                                <ul>

                                    <li>
                                        <a href="#">Lab</a>
                                        <ul>
                                            <li>
                                                <a href="#">Code</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Html</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Css</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Jquery</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Graph</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Image</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Design</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Lab</a>
                                        <ul>
                                            <li>
                                                <a href="#">Code</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Html</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Css</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Jquery</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Graph</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Image</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Design</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="#">Category</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Code</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Graph</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="#">Category</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Code</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Graph</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">About</a>
                                        <ul>
                                            <li>
                                                <a href="#">Vcard</a>

                                            </li>
                                            <li>
                                                <a href="#">Map</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--SECTION END-->
@endsection
@section('script')
    <script></script>
@endsection
