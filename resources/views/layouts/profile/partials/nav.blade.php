<nav id="sideNav"><!-- MAIN MENU -->
    <ul class="nav nav-list">
        <li class="active"><!-- dashboard -->
            <a class="dashboard" href="{{route('profile.dashboard')}}"><!-- warning - url used by default by ajax (if eneabled) -->
                <i class="main-icon fa fa-dashboard"></i> <span>داشبورد</span>
            </a>
        </li>

{{--        <li class="active"><!-- dashboard -->--}}
{{--            <a class="dashboard" href="">--}}
{{--                <!-- warning - url used by default by ajax (if eneabled) -->--}}
{{--                <i class="main-icon fa fa-dashboard"></i> <span>اطلاعات شخصی</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        <li>
            <a href="#">
                <i class="fa fa-menu-arrow pull-right"></i>
                <i class="main-icon fa fa-user"></i> <span>پروفایل</span>
            </a>
            <ul><!-- submenus -->
                <li><a href="{{route('profile.personal.index')}}">اطلاعات شخصی</a></li>
                <li><a href="{{route('profile.personal.changePassword' , ['user_id'=>\Illuminate\Support\Facades\Auth::user()])}}">تغییر رمز عبور</a></li>
            </ul>
        </li>

        <li class="active"><!-- dashboard -->
            <a class="dashboard" href="{{route('profile.order.list')}}">
                <i class="main-icon fa fa-cart-arrow-down"></i> <span>سفارشات من</span>
            </a>
        </li>
        <li class="active"><!-- dashboard -->
            <a class="dashboard" href="#">
                <i class="main-icon fa fa-money"></i> <span>پرداخت‌های من</span>
            </a>
        </li>

    </ul>

    <!-- SECOND MAIN LIST -->
    <h3>دیگر قسمت ها</h3>
    <ul class="nav nav-list">
        <li>
            <a href="calendar.html">
                <i class="main-icon fa fa-calendar"></i>
                <span class="label label-warning pull-right">3 رویداد</span> <span>تقویم</span>
            </a>
        </li>
        <li>
            <a href="../../HTML/start.html">
                <i class="main-icon fa fa-link"></i>
                <span class="label label-danger pull-right">خانه</span> <span>مجموعه قالب ها</span>
            </a>
        </li>
    </ul>

</nav>
