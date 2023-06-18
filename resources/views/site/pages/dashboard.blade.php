@extends('site.sub_site')
@section('profile')
<div class="pro-menu">
    <div class="container" style="direction: rtl">
        <div class="col-md-9 col-md-offset-3">
            <ul>
                <li><a href="dashboard.html" class="pro-act">My Dashboard</a></li>
                <li><a href="db-profile.html"> الصفحة الشخصية </a></li>
                <li><a href="db-courses.html">المشروعات</a></li>
                <li><a href="db-exams.html">رأدات اعمال</a></li>
                <li><a href="db-time-line.html"> مواقيت </a></li>
                {{-- <li><a href="#">Entry</a></li>
                <li><a href="#">Notifications</a></li> --}}
            </ul>
        </div>
    </div>
</div>
<div class="stu-db">
    <div class="container pg-inn">
        <div class="col-md-3">
            <div class="pro-user">
                <img src="images/icon/profile.png" alt="user" style="background: burlywood;">
            </div>
            <div class="pro-user-bio">
                <ul>
                    <li>
                        <h4>{{ Auth::user()->name }}</h4>
                    </li>
                    <li>Student Id: ST17241</li>
                    <li><a href="#!"><i class="fa fa-facebook"></i> Facebook: my sample</a></li>
                    <li><a href="#!"><i class="fa fa-google-plus"></i> Google: my sample</a></li>
                    <li><a href="#!"><i class="fa fa-twitter"></i> Twitter: my sample</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="udb" style="direction: rtl">

                <div class="udb-sec udb-prof">
                    <h4><img src="images/icon/db1.png" alt="" /> بياناتك  </h4>
                    <p> كلمة عن المتقدمة </p>
                </div>
                <div class="udb-sec udb-cour">
                    <h4><img src="images/icon/db2.png" alt="" /> المشاريع </h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.The point of using Lorem Ipsummaking it look like readable English.</p>
                    <div class="sdb-cours">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="list-mig-like-com com-mar-bot-30">
                                        <div class="list-mig-lc-img"> <img src="images/course/3.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:150 Days</span> </div>
                                        <div class="list-mig-lc-con">
                                            <h5>Master of Science</h5>
                                            <p>Illinois City,</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="list-mig-like-com com-mar-bot-30">
                                        <div class="list-mig-lc-img"> <img src="images/course/4.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:60 Days</span> </div>
                                        <div class="list-mig-lc-con">
                                            <h5>Java Programming</h5>
                                            <p>Illinois City,</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="list-mig-like-com com-mar-bot-30">
                                        <div class="list-mig-lc-img"> <img src="images/course/5.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:30 Days</span> </div>
                                        <div class="list-mig-lc-con">
                                            <h5>Aeronautical Engineering</h5>
                                            <p>Illinois City,</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="list-mig-like-com com-mar-bot-30">
                                        <div class="list-mig-lc-img"> <img src="images/course/3.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:20 Days</span> </div>
                                        <div class="list-mig-lc-con">
                                            <h5>Master of Science</h5>
                                            <p>Illinois City,</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="udb-sec udb-cour-stat">
                    <h4><img src="images/icon/db3.png" alt="" /> حالة المشاريع </h4>
                    <p> متابعة حالة التقديم بالمشروع  </p>
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
                                <tr>
                                    <td>01</td>
                                    <td>Software Testing</td>
                                    <td>12May 2018</td>
                                    <td> خدمي </td>
                                    <td><span class="ad-st-view">جاري</span></td>
                                    <td><a href="sdb-course-view.html" class="pro-edit"> عرض </a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="udb-sec udb-cour-stat">
                    <h4><img src="images/icon/db3.png" alt="" />  التسوق الشبكي </h4>
                    <p> جميع المتقدمين تحت بند التسوق الشبكي والتابعين لكي </p>
                    <div class="pro-con-table">
                        <table class="bordered responsive-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> اسم التابع  </th>
                                    <th>  فئة مشرعة </th>
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
                </div>
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
