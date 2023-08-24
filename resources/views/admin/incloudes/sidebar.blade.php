<!--== LEFT MENU ==-->
<div class="sb2-13">
    <ul class="collapsible" data-collapsible="accordion">
        <li><a href="{{ route('dashboard') }}" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> الرئيسية </a>
        </li>
        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> جميع المتقدمين </a>
            <div class="collapsible-body left-sub-menu">
                <ul>
                    <li><a href="{{ route('admin.apply') }}"> المتقدمين </a>
                    </li>
                </ul>
            </div>
        </li>

        <li><a href="{{ route('admin.mopdara') }}"><i class="fa fa-image" aria-hidden="true"></i> المبادرات </a>
        </li>
        <li><a href="{{ route('admin.oldproject') }}"><i class="fa fa-external-link-square" aria-hidden="true"></i> نمازج مشاريع </a>
        </li>

        <li><a href="{{ route('admin.courses') }}" class="collapsible-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> التدريب</a>
        </li>
        <li><a href="{{ route('admin.data') }}" class="collapsible-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> البيانات المفتوحة</a>
        </li>
    </ul>
</div>
