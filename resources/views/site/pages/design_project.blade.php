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
            margin: 20px auto;
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
            padding: 5px 10px;

            border-radius: 5px;
            border: 1px solid #ccc;

            text-decoration: none;
            text-transform: uppercase;
            color: #ffffff;
            font-family: arial, verdana, tahoma;
            font-size: 11px;
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
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="col-md-12" >
                    <div class="navP">
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
    </section>

    <!--SECTION END-->
@endsection
@section('script')
    <script></script>
@endsection
