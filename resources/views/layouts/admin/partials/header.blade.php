<header id="header">

    <!-- Mobile Button -->
    <button id="mobileMenuBtn"></button>

    <!-- Logo -->
    <span class="logo pull-left">
        <a href="{{route('admin.dashboard')}}">
					<img src="/assets/images/logo_light.png" alt="admin panel" height="35"/>
	    </a>
    </span>

    <form method="get" action="page-search.html" class="search pull-left hidden-xs">
        <input type="text" class="form-control" name="k" placeholder="جستجو در سایت ..."/>
    </form>

    <nav>

        <!-- OPTIONS LIST -->
        <ul class="nav pull-right">

            <!-- USER OPTIONS -->
            <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <img class="user-avatar" alt="" src="/assets/images/noavatar.jpg" height="34"/>
                    <span class="user-name">
									<span class="hidden-xs">
										کاربر ادمین <i class="fa fa-angle-down"></i>
									</span>
								</span>
                </a>
                <ul class="dropdown-menu hold-on-click">
                    <li><!-- my calendar -->
                        <a href="calendar.html"><i class="fa fa-calendar"></i> تقویم کاربری</a>
                    </li>
                    <li><!-- my inbox -->
                        <a href="#"><i class="fa fa-envelope"></i> صندوق ورودی
                            <span class="pull-right label label-default">10</span>
                        </a>
                    </li>
                    <li><!-- settings -->
                        <a href="page-user-profile.html"><i class="fa fa-cogs"></i> تنظیمات</a>
                    </li>

                    <li class="divider"></li>

                    <li><!-- lockscreen -->
                        <a href="page-lock.html"><i class="fa fa-lock"></i> قفل صفحه</a>
                    </li>
                    <li><!-- logout -->
                        <a href="{{ route('admin.dashboard') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            خروج
                        </a>

                        <form id="logout-form" action="{{ route('admin.dashboard') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            <!-- /USER OPTIONS -->

        </ul>
        <!-- /OPTIONS LIST -->

    </nav>

</header>