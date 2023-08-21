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

        #report {
            display: none;
        }
    </style>
@endsection
@section('profile')
    <div class="pro-menu">
        <div class="container" style="direction: rtl">
            <div class="col-md-9 col-md-offset-3">
                <ul>
                    <li><a href="{{ route('profile') }}">المشاريع</a></li>
                    <li><a href="#" class="pro-act">فرص النجاح</a></li>
                    <li><a href="#"> الإعدادات </a></li>

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
                        <h4><img src="images/icon/db3.png" alt="" /> اعرفي فرص نجاح مشروعك </h4>
                        <p> استشرفي المستقبل في فرص نجاح مشروعك </p>
                        <div class="pro-con-table">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group col-md-12">
                                            <label>مبلغ الاستثمار للمشروع (رأس المال المستثمر)</label>
                                            <input style="height: calc(2.25rem + 6px);" type="number" step="0.1"
                                                id="capital" class="form-control"placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>الربح المتوقع للعام الأول</label>
                                            <input style="height: calc(2.25rem + 6px);" type="number" step="0.1"
                                                id="f_year" class="form-control cashFlow"placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>الربح المتوقع للعام الثاني</label>
                                            <input style="height: calc(2.25rem + 6px);" type="number" step="0.1"
                                                id="s_year" class="form-control cashFlow"placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>الربح المتوقع للعام الثالث</label>
                                            <input style="height: calc(2.25rem + 6px);" type="number" step="0.1"
                                                id="t_year" class="form-control cashFlow"placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" onclick="calculateNPV()" class="btn btn-success"
                                        style="float: left;">احسب فرص النجاح</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="udb-sec udb-cour-stat" id="report">
                        <h4><img src="images/icon/db3.png" alt="" /> تقرير فرص نجاح مشروعك </h4>
                        <p> التقرير </p>
                        <div class="pro-con-table">
                            <table class="bordered responsive-table">
                                <thead>
                                    <tr>
                                        <th> المؤشر </th>
                                        <th> القيمة </th>
                                        <th> وصف </th>
                                        <th> توصيات </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>مؤشر صافي القيمة الحالية</td>
                                        <td id="NetPresentValue"></td>
                                        <td id="NetPresentValue_note"></td>
                                        <td id="NetPresentValue_desc"></td>
                                    </tr>
                                    <tr>
                                        <td>مؤشر ربحية المشروع</td>
                                        <td id="ProfitIndecator"></td>
                                        <td id="ProfitIndecator_note"></td>
                                        <td id="ProfitIndecator_desc"></td>
                                    </tr>
                                    <tr>
                                        <td>معدل العائد الداخلى</td>
                                        <td id="IRR"></td>
                                        <td id="IRR_note"></td>
                                        <td id="IRR_desc"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function calculateNPV() {
            var rate = 18;
            var initialCost = parseInt(document.getElementById('capital').value);
            var cashFlows = [];
            cashFlows[0] = parseInt(document.getElementById('f_year').value);
            cashFlows[1] = parseInt(document.getElementById('s_year').value);
            cashFlows[2] = parseInt(document.getElementById('t_year').value);
            var npv = 0;
            var NetPresentValue = (-initialCost);
            var ProfitIndecator = initialCost;
            for (var i = 0; i < cashFlows.length; i++) {
                npv += cashFlows[i] / Math.pow(rate / 100 + 1, i + 1);
            }
            NetPresentValue += npv;
            ProfitIndecator = npv / ProfitIndecator;
            document.getElementById("report").style.display = "block";
            /*=========================================================================*/
            /*=========================== IRR function ================================*/
            /*=========================================================================*/
            const flows = [-initialCost, cashFlows[0], cashFlows[1], cashFlows[2]];
            const irr = calculateIRR(flows) * 100;
            /*=========================================================================*/
            /*====================printing result in html==============================*/
            /*=========================================================================*/
            document.getElementById('NetPresentValue').innerHTML = Math.round(NetPresentValue);
            document.getElementById('ProfitIndecator').innerHTML = ProfitIndecator.toFixed(2);
            document.getElementById('IRR').innerHTML = Math.round(irr) + "%";
            /*=========================================================================*/
            /*====================printnig description in html=========================*/
            /*=========================================================================*/
            //NetPresentValue
            if (NetPresentValue > 0) {
                document.getElementById('NetPresentValue_desc').innerHTML =
                    "فكري في الاستثمار في هذا المشروع. كلما ارتفع صافي القيمة الحالية ، كان الاستثمار أكثر ربحية. من المرجح أن يكون المشروع ناجحًا.";
                document.getElementById('NetPresentValue_note').innerHTML = "سيحقق الاستثمار ربحًا";
            } else if (NetPresentValue < 0) {
                document.getElementById('NetPresentValue_desc').innerHTML =
                    "لا ننصحك بالمضى قدما في هذا المشروع من غير المحتمل أن يكون المشروع ناجحًا، وقد يولد خسائر ننصحك بمراجعة الدورات على منصتنا الذكية واكتشاف نفسك مرة أخرى "
                document.getElementById('NetPresentValue_note').innerHTML = "الاستثمار سوف يكسر";
            } else {
                document.getElementById('NetPresentValue_desc').innerHTML =
                    "لن يولد الاستثمار ربحًا أو خسارة. قد يكون المشروع ناجحً ا وقد لا يكون كذلك. راجعي دراسة جدوى المشروع والمخاطر المتوقعة وأعيدي النظر في تصميم المشروع "
                document.getElementById('NetPresentValue_note').innerHTML = "الاستثمار سيولد خسارة";
            }
            //ProfitIndecator
            if (ProfitIndecator > 3) {
                document.getElementById('ProfitIndecator_desc').innerHTML =
                    "من المتوقع أن يولد الاستثمار ربحًا كبيرًا جدًا. يكاد يكون من المؤكد أن يكون المشروع ناجحًا.";
                document.getElementById('ProfitIndecator_note').innerHTML = "الاستثمار المتميز";
            } else if (ProfitIndecator > 2 && ProfitIndecator <= 3) {
                document.getElementById('ProfitIndecator_desc').innerHTML =
                    "من المتوقع أن يولد الاستثمار ربحًا كبيرًا. من المحتمل جدًا أن يكون المشروع ناجحًا.";
                document.getElementById('ProfitIndecator_note').innerHTML = "استثمار ممتاز";
            } else if (ProfitIndecator > 1 && ProfitIndecator <= 2) {
                document.getElementById('ProfitIndecator_desc').innerHTML =
                    "من المتوقع أن يولد الاستثمار ربحًا. من المرجح أن يكون المشروع ناجحًا.";
                document.getElementById('ProfitIndecator_note').innerHTML = "استثمار جيد";
            } else {
                document.getElementById('ProfitIndecator_desc').innerHTML =
                    "المشروع سيولد خسارة  قد يكون المشروع ناجحًا وقد لا يكون كذلك.";
                document.getElementById('ProfitIndecator_note').innerHTML = "الاستثمار سيولد خسارة";
            }
            //IRR
            if (irr > 25) {
                document.getElementById('IRR_desc').innerHTML =
                    "استثمار نادر وعائد مرتفع للغاية. ضع في اعتبارك فقط إذا كنت من ذوي الخبرة والراحة في التعامل مع المخاطر.";
                document.getElementById('IRR_note').innerHTML = "استثنائي";
            } else if (irr > 20 && irr <= 25) {
                document.getElementById('IRR_desc').innerHTML =
                    "استثمار جيد للغاية ، ولكن كن على دراية بأن هناك دائمًا بعض المخاطر التي تنطوي عليها.";
                document.getElementById('IRR_note').innerHTML = "ممتاز";
            } else if (irr > 15 && irr <= 20) {
                document.getElementById('IRR_desc').innerHTML =
                    "ضع في اعتبارك الاستثمار إذا كنت مرتاحًا للمخاطر وكان الاستثمار متوافقًا مع أهدافك المالية.";
                document.getElementById('IRR_note').innerHTML = "جيد";
            } else if (irr > 10 && irr <= 15) {
                document.getElementById('IRR_desc').innerHTML =
                    "قد يكون استثمارًا جيدًا ، ولكن قم بأبحاثك للتأكد من أن المخاطرة مبررة.";
                document.getElementById('IRR_note').innerHTML = "متوسط";
            } else {
                document.getElementById('IRR_desc').innerHTML =
                    "يعتبر الاستثمار استثمارًا سيئًا. هذا يعني أن الاستثمار لن يولد ربحًا كافيًا لتعويض المستثمر عن المخاطر التي ينطوي عليها    في اعتبارك خيارات الاستثمار الأخرى ذات العوائد المرتفعة المحتملة.";
                document.getElementById('IRR_note').innerHTML = "قليل";
            }
        }

        function calculateIRR(cashFlows) {
            const epsilon = 0.000001; // Desired precision
            let irr = 0.1; // Initial guess for IRR
            let npv;
            do {
                npv = 0;
                for (let i = 0; i < cashFlows.length; i++) {
                    npv += cashFlows[i] / Math.pow(1 + irr, i);
                }
                irr += epsilon;
            } while (npv > 0);
            return irr;
        }
    </script>
@endsection
