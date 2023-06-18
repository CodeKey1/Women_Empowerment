@extends('admin.incloudes.admin')
@section('content')
    <div class="sb2-2-2">
        <ul>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> عودة </a>
            </li>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
            </li>
            <li class="active-bre"><a href="#"> الإحصائيات </a>
            </li>

        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2> احصائيات المنصة </h2>
        <p></p>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5> كل المتقدمين</h5>
                        <h4>948</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5>  التسوق الشبكي </h5>
                        <h4>672</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>المقبولين  </h5>
                        <h4>689</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-4">
                        <h5> الجاري </h5>
                        <h4>24</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> جميع المتقدمين</h4>
                        <p> لرائدات أعمال </p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>الاسم</th>
                                        <th>الهاتف</th>
                                        <th>البريد الالكتروني</th>
                                        <th>المركز / المدينة</th>
                                        <th>Id</th>
                                        <th> تاريخ الميلاد </th>
                                        <th>الحالة</th>
                                        <th>عرض</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>united states</td>
                                        <td>ST17241</td>
                                        <td>03 Jun 1990</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>lucas@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST10231</td>
                                        <td>16 Feb 1987</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>united states</td>
                                        <td>ST17241</td>
                                        <td>03 Jun 1990</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>lucas@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST10231</td>
                                        <td>16 Feb 1987</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span
                                                    class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
