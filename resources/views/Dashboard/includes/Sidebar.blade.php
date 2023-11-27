<!-- Left sidebar menu start -->
<div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
            <div class="ttr-sidebar-toggle-button">
                <i class="ti-arrow-right"></i>
            </div>

            <a href="#">مرحبا </a>

        </div>
        <!-- side menu logo end -->
        <nav class="ttr-sidebar-navi">
            <!-- sidebar menu start -->
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">الرئيسية</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-user"></i></span>
                        <span class="ttr-label">المستخدمين</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('dashboard.users') }}" class="ttr-material-button"><span
                                    class="ttr-label">المستخدمين</span></a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.projects.users') }}" class="ttr-material-button"><span class="ttr-label">مقدمي المشاريع </span></a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('dashboard.mopadrat') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-book"></i></span>
                        <span class="ttr-label">المبادرات</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.ershadat') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-email"></i></span>
                        <span class="ttr-label">الارشادات</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.courses') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-calendar"></i></span>
                        <span class="ttr-label">التدريب</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.project.model') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
                        <span class="ttr-label">نماذج المشاريع</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.data') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
                        <span class="ttr-label">البيانات المفتوحة</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.news') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-comments"></i></span>
                        <span class="ttr-label">الاخبار</span>
                    </a>
                </li>
                <li class="ttr-seperate"></li>
            </ul>
            <!-- sidebar menu end -->
        </nav>
        <!-- sidebar menu end -->
    </div>
</div>
<!-- Left sidebar menu end -->
