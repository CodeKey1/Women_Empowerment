@extends('site.sub_site')
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
            padding: 5px 10px;

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
@section('profile')
    @if (session('logged'))
        <script>
            setTimeout(function() {
                alert("loged in successfully");
            }, 100);
        </script>
    @endif
    <div class="pro-menu">
        <div class="container" style="direction: rtl">
            <div class="col-md-9 col-md-offset-3">
                <ul>
                    <li><a href="#" class="pro-act">المشاريع</a></li>
                    <li><a href="{{ route('success') }}">فرص النجاح</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="stu-db">
        <div class="container pg-inn">
            <div class="col-md-3">
                <div class="pro-user">
                    <img src="images/icon/seyasea.png" alt="user" style="background: #4c2d34;height: 220px;">
                </div>

                <div class="pro-user-bio">
                    <ul>
                        <li>
                            <h4>{{ Auth::user()->name }}</h4>
                        </li>
                        <div class="semi-deta">
                            <ul>
                                <li style="width: 100%;">رائدة أعمال </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="udb" style="direction: rtl">
                    <div class="udb-sec udb-cour-stat">
                        <h4><img src="images/icon/db3.png" alt="" /> المشاريع </h4>
                        <p> متابعة المشروع </p>
                        <div class="pro-con-table">
                            <table class="bordered responsive-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> اسم المشروع </th>
                                        <th> وقت التقديم </th>
                                        <th> فئة المشروع </th>
                                        <th> حالة </th>
                                        <th>View</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @isset($apply)
                                        @foreach ($project as $num => $projects)
                                            <tr>
                                                <td>{{ $num + 1 }}</td>
                                                <td>{{ $projects->name }}</td>
                                                <td>{{ $projects->created_at->format('Y-d-m') }}</td>
                                                <td>{{ $projects->category }}</td>
                                                <td>{{ $projects->state }}</td>
                                                <td><a href="{{ route('viewProject', $projects->id) }}" class="ad-st-view"> عرض
                                                    </a></td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="udb-sec udb-cour-stat">
                        <h4><img src="images/icon/db3.png" alt="" /> التسوق الشبكي </h4>
                        <p> جميع المتقدمين تحت بند التسوق الشبكي والتابعين لكي </p>
                        <div class="pro-con-table">
                            <table class="bordered responsive-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> اسم التابع </th>
                                        <th> فئة مشرعة </th>
                                        <th> العدد التابع له</th>
                                        <th> حالة </th>
                                        <th>View</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Software Testing</td>
                                        <td>12May 2018</td>
                                        <td> خدمي </td>
                                        <td><span class="pro-user-act">مقبول</span></td>
                                        <td><a href="sdb-course-view.html" class="pro-edit"> عرض </a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                    {{-- <div class="udb-sec udb-time">
                    <h4><img src="images/icon/db4.png" alt="" /> Class Time Line</h4>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <div class="tour_head1 udb-time-line days">
                        <ul>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <div class="sdb-cl-tim">
                                    <div class="sdb-cl-day">
                                        <h5>Today</h5>
                                        <span>10Sep 2018</span>
                                    </div>
                                    <div class="sdb-cl-class">
                                        <ul>
                                            <li>
                                                <div class="sdb-cl-class-tim tooltipped" data-position="top" data-delay="50" data-tooltip="Class timing">
                                                    <span>09:30 am</span>
                                                    <span>10:15 pm</span>
                                                </div>
                                                <div class="sdb-cl-class-name tooltipped" data-position="top" data-delay="50" data-tooltip="Class Details">
                                                    <h5>Software Testing <span>John Smith</span></h5>
                                                    <span class="sdn-hall-na">Apj Hall 112</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sdb-cl-class-tim tooltipped" data-position="top" data-delay="50" data-tooltip="Class timing">
                                                    <span>10:15 am</span>
                                                    <span>11:00 am</span>
                                                </div>
                                                <div class="sdb-cl-class-name tooltipped" data-position="top" data-delay="50" data-tooltip="Class Details">
                                                    <h5>Mechanical Design Classes <span>Stephanie</span></h5>
                                                    <span class="sdn-hall-na">Apj Hall 112</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sdb-cl-class-tim">
                                                    <span>11:00 am</span>
                                                    <span>11:45 am</span>
                                                </div>
                                                <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                    <h5>Board Exam Training Classes <span>Matthew</span></h5>
                                                    <span class="sdn-hall-na">Apj Hall 112</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <div class="sdb-cl-tim">
                                    <div class="sdb-cl-day">
                                        <h5>Tuesday</h5>
                                        <span>11Sep 2018</span>
                                    </div>
                                    <div class="sdb-cl-class">
                                        <ul>
                                            <li>
                                                <div class="sdb-cl-class-tim tooltipped" data-position="top" data-delay="50" data-tooltip="Class timing">
                                                    <span>9:30 am</span>
                                                    <span>10:15 am</span>
                                                </div>
                                                <div class="sdb-cl-class-name tooltipped" data-position="top" data-delay="50" data-tooltip="Class Details">
                                                    <h5>Agriculture <span>John Smith</span></h5>
                                                    <span class="sdn-hall-na">Apj Hall 112</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sdb-cl-class-tim">
                                                    <span>10:15 am</span>
                                                    <span>11:00 am</span>
                                                </div>
                                                <div class="sdb-cl-class-name">
                                                    <h5>Google Product Training <span>Stephanie</span></h5>
                                                    <span class="sdn-hall-na">Apj Hall 112</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sdb-cl-class-tim">
                                                    <span>11:00 am</span>
                                                    <span>11:45 am</span>
                                                </div>
                                                <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                    <h5>Web Design & Development <span>Matthew</span></h5>
                                                    <span class="sdn-hall-na">Apj Hall 112</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <div class="sdb-cl-tim">
                                    <div class="sdb-cl-day">
                                        <h5>Wednesday</h5>
                                        <span>12Sep 2018</span>
                                    </div>
                                    <div class="sdb-cl-class">
                                        <ul>
                                            <li>
                                                <div class="sdb-cl-class-tim">
                                                    <span>9:30 am</span>
                                                    <span>10:15 am</span>
                                                </div>
                                                <div class="sdb-cl-class-name">
                                                    <h5>Software Testing <span>John Smith</span></h5>
                                                    <span class="sdn-hall-na">Apj Hall 112</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sdb-cl-class-tim">
                                                    <span>10:15 am</span>
                                                    <span>11:00 am</span>
                                                </div>
                                                <div class="sdb-cl-class-name">
                                                    <h5>Mechanical Design Classes <span>Stephanie</span></h5>
                                                    <span class="sdn-hall-na">Apj Hall 112</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sdb-cl-class-tim">
                                                    <span>11:00 am</span>
                                                    <span>11:45 am</span>
                                                </div>
                                                <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                    <h5>Board Exam Training Classes <span>Matthew</span></h5>
                                                    <span class="sdn-hall-na">Apj Hall 112</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>Holiday: </span> Thursday </h4>
                                <p>After breakfast, proceed for tour of Dubai city. Visit Jumeirah Mosque, World Trade Centre, Palaces and Dubai Museum. Enjoy your overnight stay at the hotel.In the evening, enjoy a tasty dinner on the Dhow cruise.
                                    Later, head back to the hotel for a comfortable overnight stay.</p>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
