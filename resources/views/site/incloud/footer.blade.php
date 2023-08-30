     <!-- FOOTER COURSE BOOKING -->
     <section>
         <div class="full-bot-book">
             <div class="container">
                 <div class="row">
                     <div class="bot-book">
                         <div class="col-md-3 bb-link">
                             <a href="{{ route('project.create') }}"> سجل مشروعك </a>
                         </div>
                         <div class="col-md-7 bb-text" style="text-align: right;">
                             <h4> منصة مسرعات المشروعات الخضراء الذكية لرائدات الاعمال </h4>
                             <p> تحتوى المنصه على الكثير من المواضيع التى تحتاجيها لتاسيس مشروعك الريادي خاصة المشروعات
                                 المهتمه بمعالجة القضيه البيئية . </p>
                         </div>

                         <div class="col-md-2 bb-img">
                             <img src="images/3.png" alt="">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- FOOTER -->
     <section class="wed-hom-footer">
         <div class="container">
             <!--<div class="row">
    <div class="col-md-12">
    <h4>About Wedding Planner</h4>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
    <p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
    <p></p>
   </div>
   </div>-->
             <div class="row wed-foot-link">
                 <div class="col-md-4 foot-tc-mar-t-o">
                     <h4> اهم الصفحات </h4>
                     <ul>
                         <li><a href="#!"> الإرشادات </a></li>
                         <li><a href="#!"> ارشادات التسريع </a></li>
                         <li><a href="#!"> الاستراتيجية </a></li>
                         <li><a href="#!"> نماذج ناجحة </a></li>

                     </ul>
                 </div>
                 <div class="col-md-4">
                     <h4> المشاريع </h4>
                     <ul>
                         <li><a href="#!"> خدمي </a></li>
                         <li><a href="#!"> تجاري </a></li>
                         <li><a href="#!"> صناعي </a></li>
                         <li><a href="#!"> صناعات يدوية </a></li>

                     </ul>
                 </div>
                 <div class="col-md-4">
                     <h4>المساعدة & الدعم </h4>
                     <ul>
                         <li><a href="#!">24x7 مساعدة</a>
                         </li>
                         <li><a href="#!"> تواصل معنا </a>
                         </li>
                         <li><a href="#!"> </a>
                         </li>
                         <li><a href="#!"> الأسئلة الشائعة </a>
                         </li>
                         <li><a href="#!"> التقديم </a>
                         </li>
                     </ul>!
                 </div>
             </div>
             <div class="row wed-foot-link-1">
                 <div class="col-md-4 foot-tc-mar-t-o">
                     <h4> العنوان </h4>
                     <p> أسوان ديوان عام المحافظة </p>
                     <p>الهاتف: <a href="#!">+101-1231-4321</a></p>
                     <p>البريد: <a href="#!">info@edu.com</a></p>
                 </div>
                 {{-- <div class="col-md-4">
                    <h4>DOWNLOAD OUR FREE MOBILE APPS</h4>
                    <ul>
                        <li><a href="#"><span class="sprite sprite-android"></span></a>
                        </li>
                        <li><a href="#"><span class="sprite sprite-ios"></span></a>
                        </li>
                    </ul>
                </div> --}}
                 <div class="col-md-4">
                     <h4> التواصل الإجتماعي</h4>
                     <ul>
                         <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                         </li>
                         <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                         </li>
                         <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                         </li>
                         <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                         </li>
                         <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </section>
     <!-- COPY RIGHTS -->
     <section class="wed-rights">
         <div class="container">
             <div class="row">
                 <div class="copy-right">
                     <a target="_blank" href="#"> جميع الحقوق محفوظة مركز المعلومات والتحول الرقمي | محافظة أسوان
                         @ 2023 </a>
                 </div>
             </div>
         </div>
     </section>
     <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
     <section>
         <!-- LOGIN SECTION -->
         <div id="modal1" class="modal fade" role="dialog">
             <div class="log-in-pop">
                 <div class="log-in-pop-right" dir="rtl">
                     <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png"
                             alt="" />
                     </a>
                     <h4>تسجيل الدخول</h4>
                     <form class="s12" method="POST" action="{{ route('login') }}">
                         @csrf
                         <div>
                             <div class="input-field s12">
                                 <input type="email" data-ng-model="name" name="email" class="validate">
                                 <label>البريد الالكتروني</label>
                             </div>
                         </div>
                         <div>
                             <div class="input-field s12">
                                 <input type="password" name="password" class="validate">
                                 <label>الرقم السري</label>
                             </div>
                         </div>
                         <div dir="rtl">
                             <div class="input-field s4">
                                 <input type="submit" value="تسجيل الدخول" class="waves-effect waves-light log-in-btn">
                             </div>
                         </div>
                         <div>
                             <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal"
                                     data-target="#modal3">نسيت كلمة السر</a> | <a href="#" data-dismiss="modal"
                                     data-toggle="modal" data-target="#modal2">انشاء حساب جديد</a> </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <!-- REGISTER SECTION -->
         <div id="modal2" class="modal fade" dir="rtl" role="dialog">
             <div class="log-in-pop">
                 <form method="POST" action="{{ route('register') }}">
                     @csrf
                     <div class="log-in-pop-right">
                         <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png"
                                 alt="" />
                         </a>
                         <h4>تسجيل جديد</h4>
                         <p>ستأخد بضع ثواني لانشاء حساب جديد</p>
                         <form class="s12">
                             <div>
                             <div class="input-field s12">
                                 <input type="text" data-ng-model="name" name="name" class="validate">
                                 <label>اسم المستخدم</label>
                             </div>
                         </div>
                         <div>
                             <div class="input-field s12">
                                 <input type="email" name="email" class="validate">
                                 <label>البريد الالكتروني</label>
                             </div>
                         </div>
                         <div>
                             <div class="input-field s12">
                                 <input type="password" class="validate" name="password">
                                 <label>الرقم السري</label>
                             </div>
                         </div>
                         <div>
                             <div class="input-field s12">
                                 <input type="password" class="validate" name="password_confirmation">
                                 <label>تأكيد الرقم السري</label>
                             </div>
                         </div>
                         <div>
                             <div class="input-field s4">
                                 <input type="submit" value="تسجيل" class="waves-effect waves-light log-in-btn">
                             </div>
                         </div>
                         <div>
                             <div class="input-field s12"> <a href="#" data-dismiss="modal"
                                     data-toggle="modal" data-target="#modal1">لديك حساب بالفعل ! سجل دخول الان</a>
                             </div>
                         </div>
                             <!-- Name -->
                             {{-- <div>
                                 <label for="name" :value="__('Name')"></label>
                                 <input id="name" class="block mt-1 w-full" type="text"
                                     name="name" :value="old('name')" required autofocus autocomplete="name" />
                                 <x-input-error :messages="$errors->get('name')" class="mt-2" />
                             </div>

                             <!-- Email Address -->
                             <div class="input-field s12">
                                 <label for="email" :value="__('Email')"></label>
                                 <input id="email" class="block mt-1 w-full" type="email"
                                     name="email" :value="old('email')" required autocomplete="username" />
                                 <x-input-error :messages="$errors->get('email')" class="mt-2" />
                             </div>

                             <!-- Password -->
                             <div class="input-field s12">
                                 <label for="password" :value="__('Password')" ></label>

                                 <input id="password" class="block mt-1 w-full" type="password"
                                     name="password" required autocomplete="new-password" />

                                 <x-input-error :messages="$errors->get('password')" class="mt-2" />
                             </div>

                             <!-- Confirm Password -->
                             <div class="input-field s12">
                                 <label for="password_confirmation" :value="__('Confirm Password')" ></label>

                                 <input id="password_confirmation" class="block mt-1 w-full" type="password"
                                     name="password_confirmation" required autocomplete="new-password" />

                                 <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                             </div>

                             <div class="flex items-center justify-end mt-4">
                                 <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                     href="{{ route('login') }}">
                                     {{ __('Already registered?') }}
                                 </a>

                                 <button class="input-field s12">
                                     {{ __('Register') }}
                                 <button>
                             </div> --}}
                         </form>
                     </div>
                 </form>
             </div>
         </div>
         <!-- FORGOT SECTION -->
         @yield('modal')
         <div id="modal3" class="modal fade" role="dialog">
             <div class="log-in-pop">
                 <div class="log-in-pop-right">
                     <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png"
                             alt="" />
                     </a>
                     <h4>Forgot password</h4>
                     <p>Don't have an account? Create your account. It's take less then a minutes</p>
                     <form class="s12">
                         <div>
                             <div class="input-field s12">
                                 <input type="text" data-ng-model="name3" class="validate">
                                 <label>User name or email id</label>
                             </div>
                         </div>
                         <div>
                             <div class="input-field s4">
                                 <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn">
                             </div>
                         </div>
                         <div>
                             <div class="input-field s12"> <a href="#" data-dismiss="modal"
                                     data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> |
                                 <a href="#" data-dismiss="modal" data-toggle="modal"
                                     data-target="#modal2">Create a new
                                     account</a>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         @include('site.incloud.alertts.error')
         @include('site.incloud.alertts.success')

     </section>
     <div class="chat-icon" id="chatIcon" onclick="displayChat(1);">
         <h4>تحدث مع سولا</h4>
         <img src="images/sola.png" alt="">
     </div>
     <div class="chat-container" id="chatContainer">
         <div class="header">
             <button class="close-button" onclick="displayChat(0);">
                 <span aria-hidden="true">&times;</span>
             </button>
             <h3>تحدث مع <span style="color: var(--main_color);">سولا</span></h3>
         </div>
         <hr style="width: 80%;">
         <div class="body" id="dialog">
         </div>
         <hr style="width: 80%;">
         <div class="footer">
             <form>
                 <button id="submit">ارسال</button>
                 <input id="message" placeholder="اكتب استفسارك " autocomplete="off">
             </form>
         </div>
     </div>
     <!--Import jQuery before materialize.js-->
     <script src="js/main.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/materialize.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/chat.js"></script>
     @yield('script')
