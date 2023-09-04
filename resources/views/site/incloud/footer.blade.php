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
                     <p>الهاتف: <a href="#!">+20 97 2483112</a></p>
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
                         <li><a href="https://www.facebook.com/aswan.gov.eg?mibextid=ZbWKwL" target="_blank"><i
                                     class="fa fa-facebook" aria-hidden="true"></i></a>
                         </li>
                         <li><a href="https://www.youtube.com/@AswanGovernorate" target="_blank"><i
                                     class="fa fa-youtube" aria-hidden="true"></i></a>
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
     <script>
         function confirmSubmit() {
             return confirm("هل انت متأكد؟");
         }
     </script>
     @yield('script')
