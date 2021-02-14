<nav id="sideNav"><!-- MAIN MENU -->
    <ul class="nav nav-list">


        {{--        dashboard--}}
        <li class="active"><!-- dashboard -->
            <a class="dashboard" href="{{route('admin.dashboard')}}">
                <!-- warning - url used by default by ajax (if eneabled) -->
                <i class="main-icon fa fa-dashboard"></i> <span>داشبورد</span>
            </a>
        </li>

        @can(\App\Models\Permission::CATEGORIES)
            {{--        categories--}}
            <li>
                <a href="{{route('admin.category.list')}}">
                    <i class="main-icon fa fa-bars"></i> <span>دسته‌بندی‌ها</span>
                </a>
            </li>

        @endcan


        @can(\App\Models\Permission::UPDATE_USERS)
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

        @endcan

        @can(\App\Models\Permission::UPDATE_PRODUCTS)
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

        @endcan

        @can(\App\Models\Permission::ORDERS)
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
        @endcan


        @can(\App\Models\Permission::MENU)
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
        @endcan


        @can(\App\Models\Permission::COMMENTS)
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


        @endcan


        @can(\App\Models\Permission::SLIDERS)
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

        @endcan


        @can(\App\Models\Permission::PERMISSIONS)
            {{--        Permission--}}
            <li>
                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-sliders"></i> <span>دسترسی‌ها و نقش‌ها</span>
                </a>
                <ul><!-- submenus -->
                    <li><a href="{{route('admin.permission.list')}}">لیست دسترسی‌ها</a></li>
                    <li><a href="{{route('admin.role.list')}}">لیست نقش‌ها</a></li>
                </ul>
            </li>

        @endcan
    </ul>

    <!-- SECOND MAIN LIST -->
    <h3>دیگر قسمت ها</h3>
    <ul class="nav nav-list">

        @can(\App\Models\Permission::SETTINGS)
            {{--        settings--}}
            <li>
                <a href="{{route('admin.setting.list')}}">
                    <i class="main-icon fa fa-cog"></i>
                    <span>تنظیمات سایت</span>
                </a>
            </li>

        @endcan
        <li>
            <a href="../../HTML/start.html">
                <i class="main-icon fa fa-link"></i>
                <span class="label label-danger pull-right">خانه</span> <span>مجموعه قالب ها</span>
            </a>
        </li>
    </ul>

</nav>
