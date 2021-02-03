<!--
        AVAILABLE HEADER CLASSES

        Default nav height: 96px
        .header-md 		= 70px nav height
        .header-sm 		= 60px nav height

        .noborder 		= remove bottom border (only with transparent use)
        .transparent	= transparent header
        .translucent	= translucent header
        .sticky			= sticky header
        .static			= static header
        .dark			= dark header
        .bottom			= header on bottom

        shadow-before-1 = shadow 1 header top
        shadow-after-1 	= shadow 1 header bottom
        shadow-before-2 = shadow 2 header top
        shadow-after-2 	= shadow 2 header bottom
        shadow-before-3 = shadow 3 header top
        shadow-after-3 	= shadow 3 header bottom

        .clearfix		= required for mobile menu, do not remove!

        Example Usage:  class="clearfix sticky header-sm transparent noborder"
    -->
<div id="header" class="sticky clearfix">

    <!-- SEARCH HEADER -->
    <div class="search-box over-header">
        <a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>

        <form action="page-search-result-1.html" method="get">
            <input type="text" class="form-control" placeholder="SEARCH"/>
        </form>
    </div>
    <!-- /SEARCH HEADER -->


    <!-- TOP NAV -->
    <header id="topNav">
        <div class="container">

            <!-- Mobile Menu Button -->
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

            <!-- BUTTONS -->
            <ul class="pull-right nav nav-pills nav-second-main">

                <!-- SEARCH -->
                <li class="search">
                    <a href="javascript:;">
                        <i class="fa fa-search"></i>
                    </a>
                    <div class="search-box">
                        <form action="page-search-result-1.html" method="get">
                            <div class="input-group">
                                <input type="text" name="src" placeholder="تایپ کنید ..." class="form-control"/>
                                <span class="input-group-btn">
												<button class="btn btn-primary" type="submit">جستجو</button>
											</span>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- /SEARCH -->

                <!-- QUICK SHOP CART -->
                @widget('Front\Basket\Basket')
                <!-- /QUICK SHOP CART -->

            </ul>
            <!-- /BUTTONS -->


            <!-- Logo -->
            <a class="logo pull-left" href="{{route('front.home')}}">
                <img src="/front/images/logo_dark.png" alt=""/>
            </a>

            <!--
                Top Nav

                AVAILABLE CLASSES:
                submenu-dark = dark sub menu
            -->

            @if(!empty($data[0]))
                <div class="navbar-collapse pull-left nav-main-collapse collapse submenu-dark">
                    <nav class="nav-main">

                        <!--
                            NOTE

                            For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                            Direct Link Example:

                            <li>
                                <a href="#">HOME</a>
                            </li>
                        -->
                        <ul id="topMain" class="nav nav-pills nav-main">
                            @foreach($data[0]['root'] as $menuItem)
                                @include('widgets.front.headerMenu.items' ,['item'=>$menuItem , 'all_items'=>$data[0]])
                            @endforeach
                        </ul>

                    </nav>
                </div>
            @endif
        </div>
    </header>
    <!-- /Top Nav -->

</div>

