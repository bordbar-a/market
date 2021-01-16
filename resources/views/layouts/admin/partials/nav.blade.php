<nav id="sideNav"><!-- MAIN MENU -->
    <ul class="nav nav-list">
        {{--        dashboard--}}
        <li class="active"><!-- dashboard -->
            <a class="dashboard" href="{{route('admin.dashboard')}}">
                <!-- warning - url used by default by ajax (if eneabled) -->
                <i class="main-icon fa fa-dashboard"></i> <span>داشبورد</span>
            </a>
        </li>
        {{--        categories--}}
        <li>
            <a href="{{route('admin.category.list')}}">
                <i class="main-icon fa fa-bars"></i> <span>دسته‌بندی‌ها</span>
            </a>
        </li>
        {{--        users--}}
        <li>
            <a href="#">
                <i class="fa fa-menu-arrow pull-right"></i>
                <i class="main-icon fa fa-users"></i> <span>کاربران</span>
            </a>
            <ul><!-- submenus -->
                <li><a href="{{route('admin.user.list')}}">لیست</a></li>
                <li><a href="{{route('admin.user.create')}}">اضافه کردن کاربر</a></li>
            </ul>
        </li>
        {{--        products--}}
        <li>
            <a href="#">
                <i class="fa fa-menu-arrow pull-right"></i>
                <i class="main-icon fa fa-gift"></i> <span>محصولات</span>
            </a>
            <ul><!-- submenus -->
                <li><a href="{{route('admin.product.list')}}">لیست</a></li>
                <li><a href="{{route('admin.product.create')}}">اضافه کردن محصول</a></li>
            </ul>
        </li>
        {{--        orders--}}
        <li>
            <a href="#">
                <i class="fa fa-menu-arrow pull-right"></i>
                <i class="main-icon fa fa-cart-arrow-down"></i> <span>سفارشات</span>
            </a>
            <ul><!-- submenus -->
                <li><a href="{{route('admin.order.list')}}">لیست همه سفارشات</a></li>
            </ul>
        </li>

        {{--        menu--}}
        <li>
            <a href="#">
                <i class="fa fa-menu-arrow pull-right"></i>
                <i class="main-icon fa fa-bars"></i> <span>منوها</span>
            </a>
            <ul><!-- submenus -->
                <li><a href="{{route('admin.menu.list')}}">لیست همه منوها</a></li>
                <li><a href="{{route('admin.menu.create')}}">اضافه کردن منو</a></li>
            </ul>
        </li>

        {{--        comment--}}
        <li>
            <a href="#">
                <i class="fa fa-menu-arrow pull-right"></i>
                <i class="main-icon fa fa-comments"></i> <span>نظرات</span>
            </a>
            <ul><!-- submenus -->
                <li><a href="#">در انتظار تایید</a></li>
                <li><a href="{{route('admin.comment.list')}}">همه نظرات</a></li>
                <li><a href="#">نظرات تایید نشده</a></li>
            </ul>
        </li>

        {{--        slider--}}
        <li>
            <a href="#">
                <i class="fa fa-menu-arrow pull-right"></i>
                <i class="main-icon fa fa-sliders"></i> <span>اسلایدرها</span>
            </a>
            <ul><!-- submenus -->
                <li><a href="{{route('admin.slider.list')}}">لیست همه اسلایدرها</a></li>
                <li><a href="{{route('admin.slider.create')}}">اضافه کردن اسلایدر</a></li>
            </ul>
        </li>
    </ul>

    <!-- SECOND MAIN LIST -->
    <h3>دیگر قسمت ها</h3>
    <ul class="nav nav-list">
        {{--        settings--}}
        <li>
            <a href="{{route('admin.setting.list')}}">
                <i class="main-icon fa fa-cog"></i>
                <span>تنظیمات سایت</span>
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
