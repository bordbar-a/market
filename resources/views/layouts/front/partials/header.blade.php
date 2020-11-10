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
           @widget('Front\Basket')
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
                        <li class="dropdown"><!-- HOME -->
                            <a class="dropdown-toggle" href="#">
                                صفحه اصلی
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        سایت های شرکتی
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-corporate-1.html">طرح شرکتی 1</a></li>
                                        <li><a href="index-corporate-2.html">طرح شرکتی 2</a></li>
                                        <li><a href="index-corporate-3.html">طرح شرکتی 3</a></li>
                                        <li><a href="index-corporate-4.html">طرح شرکتی 4</a></li>
                                        <li><a href="index-corporate-5.html">طرح شرکتی 5</a></li>
                                        <li><a href="index-corporate-6.html">طرح شرکتی 6</a></li>
                                        <li><a href="index-corporate-7.html">طرح شرکتی 7</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        سایت های نمونه کار
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-portfolio-1.html">طرح نمونه کار 1</a></li>
                                        <li><a href="index-portfolio-2.html">طرح نمونه کار 2</a></li>
                                        <li><a href="index-portfolio-masonry.html">طرح نمونه کار 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        سایت های شخصی و وبلاگ
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-blog-1.html">طرح وبلاگ شخصی 1</a></li>
                                        <li><a href="index-blog-2.html">طرح وبلاگ شخصی 2</a></li>
                                        <li><a href="index-blog-3.html">طرح وبلاگ شخصی 3</a></li>
                                        <li><a href="index-blog-4.html">طرح وبلاگ شخصی 4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        سایت های فروشگاهی
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-shop-1.html">طرح فروشگاه 1</a></li>
                                        <li><a href="index-shop-2.html">طرح فروشگاه 2</a></li>
                                        <li><a href="index-shop-3.html">طرح فروشگاه 3</a></li>
                                        <li><a href="index-shop-4.html">طرح فروشگاه 4</a></li>
                                        <li><a href="index-shop-5.html">طرح فروشگاه 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        سایت های خبری و مجله
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-magazine-1.html">طرح مجله خبری 1</a></li>
                                        <li><a href="index-magazine-2.html">طرح مجله خبری 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        هاستینگ ، معرفی محصول
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-landing-1.html">طرح معرفی و فرود 1</a></li>
                                        <li><a href="index-landing-2.html">طرح معرفی و فرود 2</a></li>
                                        <li><a href="index-landing-3.html">طرح معرفی و فرود 3</a></li>
                                        <li><a href="index-landing-4.html">طرح معرفی و فرود 4</a></li>
                                        <li><a href="index-landing-5.html">طرح معرفی و فرود 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        تمام صفحه تک قسمتی
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-fullscreen-revolution.html">طرح تمام صفحه 1</a></li>
                                        <li><a href="index-fullscreen-youtube.html">طرح تمام صفحه 2</a></li>
                                        <li><a href="index-fullscreen-local-video.html">طرح تمام صفحه 3</a></li>
                                        <li><a href="index-fullscreen-image.html">طرح تمام صفحه 4</a></li>
                                        <li><a href="index-fullscreen-txt-rotator.html">طرح تمام صفحه 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        سایت های تک صفحه ای
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-onepage-default.html">طرح تک صفحه ای 1</a></li>
                                        <li><a href="index-onepage-revolution.html">طرح تک صفحه ای 2</a></li>
                                        <li><a href="index-onepage-image.html">طرح تک صفحه ای 3</a></li>
                                        <li><a href="index-onepage-parallax.html">طرح تک صفحه ای 4</a></li>
                                        <li><a href="index-onepage-youtube.html">طرح تک صفحه ای 5</a></li>
                                        <li><a href="index-onepage-text-rotator.html">طرح تک صفحه ای 6</a></li>
                                        <li><a href="start.html#onepage"><span
                                                    class="label label-success pull-right">جدید</span> طرح های بیشتر</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        برای کسب و کارهای مختلف <i class="fa fa-heart margin-left-10"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-thematics-restaurant.html">طرح سایت رستورانی</a></li>
                                        <li><a href="index-thematics-education.html">طرح سایت آموزشگاه</a></li>
                                        <li><a href="index-thematics-construction.html">طرح سایت ساخت و ساز</a></li>
                                        <li><a href="index-thematics-medical.html">طرح سایت پزشکی</a></li>
                                        <li><a href="index-thematics-church.html">طرح سایت کلیسا</a></li>
                                        <li><a href="index-thematics-fashion.html">طرح سایت مد و فشن</a></li>
                                        <li><a href="index-thematics-wedding.html">طرح سایت ازدواج و تالار</a></li>
                                        <li><a href="index-thematics-events.html">طرح سایت مراسم و کنسرت</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li><a href="start.html#newrevslider" data-toggle="tooltip" data-placement="top"
                                       title="32 More Revolution Slider V5"><span
                                            class="label label-danger pull-right">ویژه</span> طرح های جدیدتر</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="index-simple-revolution.html">همراه با روولوشن اسلایدر</a></li>
                                <li><a href="index-simple-layerslider.html">همراه با لایر اسلایدر</a></li>
                                <li><a href="index-simple-parallax.html">همراه با اسکرول پارالاکسی</a></li>
                                <li><a href="index-simple-youtube.html">همراه با ویدیو</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><!-- PAGES -->
                            <a class="dropdown-toggle" href="#">
                                صفحات
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحه درباره ما
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-about-us-1.html">صفحه درباره ما 1</a></li>
                                        <li><a href="page-about-us-2.html">صفحه درباره ما 2</a></li>
                                        <li><a href="page-about-us-3.html">صفحه درباره ما 3</a></li>
                                        <li><a href="page-about-us-4.html">صفحه درباره ما 4</a></li>
                                        <li><a href="page-about-us-5.html">صفحه درباره ما 5</a></li>
                                        <li><a href="page-about-me-1.html">صفحه درباره ما 6</a></li>
                                        <li><a href="page-about-me-2.html">صفحه درباره ما 7</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحه معرفی تیم و پرسنل
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-team-1.html">طرح پرسنل سایت 1</a></li>
                                        <li><a href="page-team-2.html">طرح پرسنل سایت 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحه خدمات ما
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-services-1.html">صفحه خدمات ما 1</a></li>
                                        <li><a href="page-services-2.html">صفحه خدمات ما 2</a></li>
                                        <li><a href="page-services-3.html">صفحه خدمات ما 3</a></li>
                                        <li><a href="page-services-4.html">صفحه خدمات ما 4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحه سوالات متداول
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-faq-1.html">طرح سوالات متداول 1</a></li>
                                        <li><a href="page-faq-2.html">طرح سوالات متداول 2</a></li>
                                        <li><a href="page-faq-3.html">طرح سوالات متداول 3</a></li>
                                        <li><a href="page-faq-4.html">طرح سوالات متداول 4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحه تماس با ما
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-contact-1.html">طرح صفحه تماس با ما 1</a></li>
                                        <li><a href="page-contact-2.html">طرح صفحه تماس با ما 2</a></li>
                                        <li><a href="page-contact-3.html">طرح صفحه تماس با ما 3</a></li>
                                        <li><a href="page-contact-4.html">طرح صفحه تماس با ما 4</a></li>
                                        <li><a href="page-contact-5.html">طرح صفحه تماس با ما 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحات خطا و ارور
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-404-1.html">طرح خطای 404 - 1</a></li>
                                        <li><a href="page-404-2.html">طرح خطای 404 - 2</a></li>
                                        <li><a href="page-404-3.html">طرح خطای 404 - 3</a></li>
                                        <li><a href="page-404-4.html">طرح خطای 404 - 4</a></li>
                                        <li><a href="page-404-5.html">طرح خطای 404 - 5</a></li>
                                        <li><a href="page-404-6.html">طرح خطای 404 - 6</a></li>
                                        <li><a href="page-404-7.html">طرح خطای 404 - 7</a></li>
                                        <li><a href="page-404-8.html">طرح خطای 404 - 8</a></li>
                                        <li class="divider"></li>
                                        <li><a href="page-500-1.html">طرح خطای 500 - 1</a></li>
                                        <li><a href="page-500-2.html">طرح خطای 500 - 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحات دارای سایدبار
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-sidebar-left.html">سایدبار سمت راست</a></li>
                                        <li><a href="page-sidebar-right.html">سایدبار سمت چپ</a></li>
                                        <li><a href="page-sidebar-both.html">سایدبار دو طرفه</a></li>
                                        <li><a href="page-sidebar-no.html">بدون سایدبار</a></li>
                                        <li class="divider"></li>
                                        <li><a href="page-sidebar-dark-left.html">سایدبار راست - طرح مشکی</a></li>
                                        <li><a href="page-sidebar-dark-right.html">سایدبار چپ - طرح مشکی</a></li>
                                        <li><a href="page-sidebar-dark-both.html">جفت سایدبار - طرح مشکی</a></li>
                                        <li><a href="page-sidebar-dark-no.html">بدون سایدبار - طرح مشکی</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحات ورود/ثبت نام
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-login-1.html">صفحه ورود - طرح 1</a></li>
                                        <li><a href="page-login-2.html">صفحه ورود - طرح 2</a></li>
                                        <li><a href="page-login-3.html">صفحه ورود - طرح 3</a></li>
                                        <li><a href="page-login-4.html">صفحه ورود - طرح 4</a></li>
                                        <li><a href="page-login-5.html">صفحه ورود - طرح 5</a></li>
                                        <li><a href="page-login-register-1.html">صفحه ورود + ثبت نام 1</a></li>
                                        <li><a href="page-login-register-2.html">صفحه ورود + ثبت نام 2</a></li>
                                        <li><a href="page-login-register-3.html">صفحه ورود + ثبت نام 3</a></li>
                                        <li><a href="page-register-1.html">صفحه ثبت نام - طرح 1</a></li>
                                        <li><a href="page-register-2.html">صفحه ثبت نام - طرح 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحات همکاران و مشتریان
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-clients-1.html">طرح 1 - سایدبار راست</a></li>
                                        <li><a href="page-clients-2.html">طرح 2 - سایدبار چپ</a></li>
                                        <li><a href="page-clients-3.html">طرح 3 - تمام صفحه</a></li>
                                        <li class="divider"></li>
                                        <li><a href="page-clients-4.html">طرح 4 - سایدبار راست</a></li>
                                        <li><a href="page-clients-5.html">طرح 5 - سایدبار چپ</a></li>
                                        <li><a href="page-clients-6.html">طرح 6 - تمام صفحه</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحه نتایج جستجو
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-search-result-1.html">طرح 1 - سایدبار راست</a></li>
                                        <li><a href="page-search-result-2.html">طرح 2 - سایدبار چپ</a></li>
                                        <li><a href="page-search-result-3.html">طرح 3 - تمام صفحه</a></li>
                                        <li class="divider"></li>
                                        <li><a href="page-search-result-4.html">طرح 4 - سایدبار راست</a></li>
                                        <li><a href="page-search-result-5.html">طرح 5 - سایدبار چپ</a></li>
                                        <li class="divider"></li>
                                        <li><a href="page-search-result-6.html">طرح 6 - همراه با جدول</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحه پروفایل
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-profile.html">صفحه پروفایل کاربر</a></li>
                                        <li><a href="page-profile-projects.html">صفحه پروژه های کاربر</a></li>
                                        <li><a href="page-profile-comments.html">صفحه دیدگاه های کاربر</a></li>
                                        <li><a href="page-profile-history.html">صفحه تاریخچه کاربری</a></li>
                                        <li><a href="page-profile-settings.html">صفحه تنظیمات کاربری</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحات در دست ساخت
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-maintenance-1.html">در دست ساخت - طرح 1</a></li>
                                        <li><a href="page-maintenance-2.html">در دست ساخت - طرح 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحات بزودی میایم
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-coming-soon-1.html">بزودی میایم - طرح 1</a></li>
                                        <li><a href="page-coming-soon-2.html">بزودی میایم - طرح 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        مخصوص سایت های انجمنی
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page-forum-home.html">انجمن - صفحه اصلی</a></li>
                                        <li><a href="page-forum-topic.html">انجمن - قسمت تاپیک ها</a></li>
                                        <li><a href="page-forum-post.html">انجمن - صفحه یک پست</a></li>
                                    </ul>
                                </li>
                                <li><a href="page-careers.html">صفحه دریافت اطلاعات</a></li>
                                <li><a href="page-sitemap.html">صفحه نقشه سایت</a></li>
                                <li><a href="page-blank.html">صفحه خالی و آزاد</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><!-- FEATURES -->
                            <a class="dropdown-toggle" href="#">
                                امکانات
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-browser"></i> بخش اسلایدرها
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-toggle" href="#">روولوشن اسلایدر نسخه 4</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-slider-revolution-fullscreen.html">اسلایدر تمام
                                                        صفحه</a></li>
                                                <li><a href="feature-slider-revolution-fullwidth.html">اسلایدر
                                                        متحرک</a></li>
                                                <li><a href="feature-slider-revolution-fixedwidth.html">اسلایدر با
                                                        عرض ثابت</a></li>
                                                <li><a href="feature-slider-revolution-kenburns.html">اسلایدر
                                                        انیمیشنی</a></li>
                                                <li><a href="feature-slider-revolution-videobg.html">اسلایدر با
                                                        ویدیو پلیر</a></li>
                                                <li><a href="feature-slider-revolution-captions.html">اسلایدر همراه
                                                        با نوشته</a></li>
                                                <li><a href="feature-slider-revolution-smthumb.html">اسلایدر با
                                                        تصویر شاخص 1</a></li>
                                                <li><a href="feature-slider-revolution-lgthumb.html">اسلایدر با
                                                        تصویر شاخص 2</a></li>
                                                <li class="divider"></li>
                                                <li><a href="feature-slider-revolution-prev1.html">اسلایدر طرح
                                                        متفاوت 1</a></li>
                                                <li><a href="feature-slider-revolution-prev2.html">اسلایدر طرح
                                                        متفاوت 2</a></li>
                                                <li><a href="feature-slider-revolution-prev3.html">اسلایدر طرح
                                                        متفاوت 3</a></li>
                                                <li><a href="feature-slider-revolution-prev4.html">اسلایدر طرح
                                                        متفاوت 4</a></li>
                                                <li><a href="feature-slider-revolution-prev0.html">اسلایدر طرح
                                                        متفاوت 5</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">لایر اسلایدر</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-slider-layer-fullwidth.html">لایر اسلایدر - طرح
                                                        1</a></li>
                                                <li><a href="feature-slider-layer-fixed.html">لایر اسلایدر - طرح
                                                        2</a></li>
                                                <li><a href="feature-slider-layer-captions.html">لایر اسلایدر - طرح
                                                        3</a></li>
                                                <li><a href="feature-slider-layer-carousel.html">لایر اسلایدر - طرح
                                                        4</a></li>
                                                <li><a href="feature-slider-layer-2d3d.html">لایر اسلایدر - طرح
                                                        5</a></li>
                                                <li><a href="feature-slider-layer-thumb.html">لایر اسلایدر - طرح
                                                        6</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">فلکس اسلایدر</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-slider-flexslider-fullwidth.html">فلکس اسلایدر
                                                        - طرح 1</a></li>
                                                <li><a href="feature-slider-flexslider-content.html">فلکس اسلایدر -
                                                        طرح 2</a></li>
                                                <li><a href="feature-slider-flexslider-thumbs.html">فلکس اسلایدر -
                                                        طرح 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">آول اسلایدر</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-slider-owl-fullwidth.html">آول اسلایدر - طرح
                                                        1</a></li>
                                                <li><a href="feature-slider-owl-fixed.html">آول اسلایدر - طرح 2</a>
                                                </li>
                                                <li><a href="feature-slider-owl-fixed+progress.html">آول اسلایدر -
                                                        طرح 3</a></li>
                                                <li><a href="feature-slider-owl-carousel.html">آول اسلایدر - طرح
                                                        4</a></li>
                                                <li><a href="feature-slider-owl-fade.html">آول اسلایدر - طرح 5</a>
                                                </li>
                                                <li><a href="feature-slider-owl-backslide.html">آول اسلایدر - طرح
                                                        6</a></li>
                                                <li><a href="feature-slider-owl-godown.html">آول اسلایدر - طرح 7</a>
                                                </li>
                                                <li><a href="feature-slider-owl-fadeup.html">آول اسلایدر - طرح 8</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">سوایپ اسلایدر</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-slider-swipe-full.html">سوایپ اسلایدر - طرح
                                                        1</a></li>
                                                <li><a href="feature-slider-swipe-fixed-height.html">سوایپ اسلایدر -
                                                        طرح 2</a></li>
                                                <li><a href="feature-slider-swipe-autoplay.html">سوایپ اسلایدر - طرح
                                                        3</a></li>
                                                <li><a href="feature-slider-swipe-fade.html">سوایپ اسلایدر - طرح
                                                        4</a></li>
                                                <li><a href="feature-slider-swipe-slide.html">سوایپ اسلایدر - طرح
                                                        5</a></li>
                                                <li><a href="feature-slider-swipe-coverflow.html">سوایپ اسلایدر -
                                                        طرح 6</a></li>
                                                <li><a href="feature-slider-swipe-html5-video.html">سوایپ اسلایدر -
                                                        طرح 7</a></li>
                                                <li><a href="feature-slider-swipe-3columns.html">سوایپ اسلایدر - طرح
                                                        8</a></li>
                                                <li><a href="feature-slider-swipe-4columns.html">سوایپ اسلایدر - طرح
                                                        9</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="feature-slider-nivo.html">نیوا اسلایدر</a></li>
                                        <li><a href="feature-slider-camera.html">دوربین اسلایدر</a></li>
                                        <li><a href="feature-slider-elastic.html">الاستیک اسلایدر</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-hotairballoon"></i> بخش هِدِرها
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-header-light.html">هدر سایت - طرح روشن</a></li>
                                        <li><a href="feature-header-dark.html">هدر سایت - طرح مشکی</a></li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">هدر سایت وسیع</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-header-large.html">بزرگ</a></li>
                                                <li><a href="feature-header-medium.html">متوسط</a></li>
                                                <li><a href="feature-header-small.html">کوچک</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">هدر سایت سایه دار</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-header-shadow-after-1.html">هدر طرح سایه 1</a>
                                                </li>
                                                <li><a href="feature-header-shadow-before-1.html">هدر طرح سایه 2</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="feature-header-shadow-after-2.html">هدر طرح سایه 3</a>
                                                </li>
                                                <li><a href="feature-header-shadow-before-2.html">هدر طرح سایه 4</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="feature-header-shadow-after-3.html">هدر طرح سایه 5</a>
                                                </li>
                                                <li><a href="feature-header-shadow-before-3.html">هدر طرح سایه 6</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="feature-header-shadow-dark-1.html">نمونه صفحه هدر طرح
                                                        سایه</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="feature-header-transparent.html">هدر طرح شفاف 1</a></li>
                                        <li><a href="feature-header-transparent-line.html">هدر طرح شفاف 2</a></li>
                                        <li><a href="feature-header-translucent.html">هدر طرح نیمه شفاف</a></li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">قسمت پایین هدر</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-header-bottom-light.html">طرح سفید</a></li>
                                                <li><a href="feature-header-bottom-dark.html">طرح مشکی</a></li>
                                                <li><a href="feature-header-bottom-transp.html">طرح شفاف</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">هدر سمت راست</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-header-side-left-1.html">ثابت باشد</a></li>
                                                <li><a href="feature-header-side-left-2.html">با یک کلیک باز شود</a>
                                                </li>
                                                <li><a href="feature-header-side-left-3.html">طرح مشکی</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">هدر سمت چپ</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-header-side-right-1.html">ثابت باشد</a></li>
                                                <li><a href="feature-header-side-right-2.html">با یک کلیک باز
                                                        شود</a></li>
                                                <li><a href="feature-header-side-right-3.html">طرح مشکی</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">هدر استاتیک</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-header-static-top-light.html">استاتیک بالا -
                                                        طرح روشن</a></li>
                                                <li><a href="feature-header-static-top-dark.html">استاتیک بالا - طرح
                                                        تیره</a></li>
                                                <li class="divider"></li>
                                                <li><a href="feature-header-static-bottom-light.html">استاتیک پایین
                                                        - طرح روشن</a></li>
                                                <li><a href="feature-header-static-bottom-dark.html">استاتیک پایین -
                                                        طرح تیره</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="feature-header-nosticky.html">هدر بدون قفل</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-anchor"></i> بخش فوترها
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-footer-1.html#footer">فوتر - طرح 1</a></li>
                                        <li><a href="feature-footer-2.html#footer">فوتر - طرح 2</a></li>
                                        <li><a href="feature-footer-3.html#footer">فوتر - طرح 3</a></li>
                                        <li><a href="feature-footer-4.html#footer">فوتر - طرح 4</a></li>
                                        <li><a href="feature-footer-5.html#footer">فوتر - طرح 5</a></li>
                                        <li><a href="feature-footer-6.html#footer">فوتر - طرح 6</a></li>
                                        <li><a href="feature-footer-7.html#footer">فوتر - طرح 7</a></li>
                                        <li><a href="feature-footer-8.html#footer">فوتر - طرح 8</a></li>
                                        <li><a href="feature-footer-0.html#footer">فوتر - طرح 9</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-circle-compass"></i> انواع منوها
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-menu-0.html">منو - طرح 1</a></li>
                                        <li><a href="feature-menu-1.html">منو - طرح 2</a></li>
                                        <li><a href="feature-menu-2.html">منو - طرح 3</a></li>
                                        <li><a href="feature-menu-3.html">منو - طرح 4</a></li>
                                        <li><a href="feature-menu-4.html">منو - طرح 5</a></li>
                                        <li><a href="feature-menu-5.html">منو - طرح 6</a></li>
                                        <li><a href="feature-menu-6.html">منو - طرح 7</a></li>
                                        <li><a href="feature-menu-7.html">منو - طرح 8</a></li>
                                        <li><a href="feature-menu-8.html">منو - طرح 9</a></li>
                                        <li><a href="feature-menu-9.html">منو - طرح 10</a></li>
                                        <li><a href="feature-menu-10.html">منو - طرح 11</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-genius"></i> منو رها شونده
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-menu-dd-light.html">طرح روشن</a></li>
                                        <li><a href="feature-menu-dd-dark.html">طرح تاریک</a></li>
                                        <li><a href="feature-menu-dd-color.html">طرح رنگی</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-beaker"></i> بخش عناوین
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-title-left.html">سمت راست</a></li>
                                        <li><a href="feature-title-right.html">سمت چپ</a></li>
                                        <li><a href="feature-title-center.html">وسط چین</a></li>
                                        <li><a href="feature-title-light.html">روشن</a></li>
                                        <li><a href="feature-title-dark.html">تاریک</a></li>
                                        <li><a href="feature-title-tabs.html">همراه با جدول</a></li>
                                        <li><a href="feature-title-breadcrumbs.html">طرحی دیگر</a></li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">اسکرول پارالاکسی</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="feature-title-parallax-small.html">افکت کوچک</a></li>
                                                <li><a href="feature-title-parallax-medium.html">افکت متوسط</a></li>
                                                <li><a href="feature-title-parallax-large.html">افکت بزرگ</a></li>
                                                <li><a href="feature-title-parallax-2xlarge.html">افکت خیلی بزرگ</a>
                                                </li>
                                                <li><a href="feature-title-parallax-transp.html">هدر پایین رونده
                                                        1</a></li>
                                                <li><a href="feature-title-parallax-transp-large.html">هدر پایین
                                                        رونده 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="feature-title-short-height.html">ارتفاع کم</a></li>
                                        <li><a href="feature-title-rotative-text.html">متن چرخنده</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-layers"></i> زیر مجموعه صفحات
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-page-submenu-light.html">طرح روشن</a></li>
                                        <li><a href="feature-page-submenu-dark.html">طرح تاریک</a></li>
                                        <li><a href="feature-page-submenu-color.html">طرح رنگی</a></li>
                                        <li><a href="feature-page-submenu-transparent.html">طرح پایین رونده</a></li>
                                        <li><a href="feature-page-submenu-below-title.html">زیرمجموعه زیر عنوان</a>
                                        </li>
                                        <li><a href="feature-page-submenu-scrollto.html">طرح اسکرولی</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-trophy"></i> آیکون های قالب
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-icons-fontawesome.html">آیکون های : FONTAWESOME</a>
                                        </li>
                                        <li><a href="feature-icons-glyphicons.html">آیکون های : GLYPHICONS</a></li>
                                        <li><a href="feature-icons-etline.html">آیکون های : ET LINE</a></li>
                                        <li><a href="feature-icons-flags.html">پرچم ها</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-flag"></i> بخش پس زمینه ها
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-content-bg-grey.html">پس زمینه طرح 1</a></li>
                                        <li><a href="feature-content-bg-ggrey.html">پس زمینه طرح 2</a></li>
                                        <li><a href="feature-content-bg-gblue.html">پس زمینه طرح 3</a></li>
                                        <li><a href="feature-content-bg-ggreen.html">پس زمینه طرح 4</a></li>
                                        <li><a href="feature-content-bg-gorange.html">پس زمینه طرح 5</a></li>
                                        <li><a href="feature-content-bg-gyellow.html">پس زمینه طرح 6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-magnifying-glass"></i> قسمت جستجو
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-search-default.html">بخش جستجو - طرح 1</a></li>
                                        <li><a href="feature-search-fullscreen-light.html">بخش جستجو - طرح 2</a>
                                        </li>
                                        <li><a href="feature-search-fullscreen-dark.html">بخش جستجو - طرح 3</a></li>
                                        <li><a href="feature-search-header-light.html">بخش جستجو - طرح 4</a></li>
                                        <li><a href="feature-search-header-dark.html">بخش جستجو - طرح 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="shortcode-animations.html"><i class="et-expand"></i> انیمیشن ها</a>
                                </li>
                                <li><a href="feature-grid.html"><i class="et-grid"></i> حالت شبکه ای</a></li>
                                <li><a href="feature-essentials.html"><i class="et-heart"></i> حالت اصولی</a></li>
                                <li><a href="page-changelog.html"><i class="et-alarmclock"></i> تغییر لوگو</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        <i class="et-newspaper"></i> پنل کناری
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="feature-sidepanel-dark-right.html">طرح تاریک - سمت راست</a>
                                        </li>
                                        <li><a href="feature-sidepanel-dark-left.html">طرح تاریک - سمت چپ</a></li>
                                        <li class="divider"></li>
                                        <li><a href="feature-sidepanel-light-right.html">طرح روشن - سمت راست</a>
                                        </li>
                                        <li><a href="feature-sidepanel-light-left.html">طرح روشن - سمت چپ</a></li>
                                        <li class="divider"></li>
                                        <li><a href="feature-sidepanel-color-right.html">طرح رنگی - سمت راست</a>
                                        </li>
                                        <li><a href="feature-sidepanel-color-left.html">طرح رنگی - سمت چپ</a></li>
                                    </ul>
                                </li>
                                <li><a target="_blank" href="../Admin/HTML/"><span
                                            class="label label-success pull-right">ویژه!</span><i
                                            class="et-gears"></i> پنل ادمین</a></li>
                            </ul>
                        </li>
                        <li class="dropdown mega-menu"><!-- PORTFOLIO -->
                            <a class="dropdown-toggle" href="#">
                                بخش نمونه کارها
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><span>شبکه ای</span></li>
                                                <li><a href="portfolio-grid-1-columns.html">طرح 1</a></li>
                                                <li><a href="portfolio-grid-2-columns.html">طرح 2</a></li>
                                                <li><a href="portfolio-grid-3-columns.html">طرح 3</a></li>
                                                <li><a href="portfolio-grid-4-columns.html">طرح 4</a></li>
                                                <li><a href="portfolio-grid-5-columns.html">طرح 5</a></li>
                                                <li><a href="portfolio-grid-6-columns.html">طرح 6</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><span>ساختمانی</span></li>
                                                <li><a href="portfolio-masonry-2-columns.html">طرح 1</a></li>
                                                <li><a href="portfolio-masonry-3-columns.html">طرح 2</a></li>
                                                <li><a href="portfolio-masonry-4-columns.html">طرح 3</a></li>
                                                <li><a href="portfolio-masonry-5-columns.html">طرح 4</a></li>
                                                <li><a href="portfolio-masonry-6-columns.html">طرح 5</a></li>

                                            </ul>
                                        </div>

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><span>کاربرد تنها</span></li>
                                                <li><a href="portfolio-single-extended.html">آیتم گسترشی</a></li>
                                                <li><a href="portfolio-single-parallax.html">تصویر پارالاکسی</a>
                                                </li>
                                                <li><a href="portfolio-single-slider.html">گالری اسلایدری</a></li>
                                                <li><a href="portfolio-single-html5-video.html">ویدیو پلیر</a></li>
                                                <li><a href="portfolio-single-masonry-thumbs.html">ساختار متفاوت</a>
                                                </li>
                                                <li><a href="portfolio-single-embed-video.html">قرار دادن ویدیو</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><span>استایل</span></li>
                                                <li><a href="portfolio-layout-default.html">پیشفرض</a></li>
                                                <li><a href="portfolio-layout-aside-left.html">سایدبار راست</a></li>
                                                <li><a href="portfolio-layout-aside-right.html">سایدبار چپ</a></li>
                                                <li><a href="portfolio-layout-aside-both.html">جفت سایدبار</a></li>
                                                <li><a href="portfolio-layout-fullwidth.html">کاملا تمام صفحه</a>
                                                </li>
                                                <li><a href="portfolio-layout-tabfilter.html">جداسازی کردن صفحات</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><span>بارگذاری</span></li>
                                                <li><a href="portfolio-loading-pagination.html">توابع صفحه گذاری</a>
                                                </li>
                                                <li><a href="portfolio-loading-jpagination.html">توابع جی کوئری</a>
                                                </li>
                                                <li><a href="portfolio-loading-infinite-scroll.html">اسکرول بی
                                                        نهایت</a></li>
                                                <li><a href="portfolio-loading-ajax-page.html">توابع آژاکس صفحات
                                                        1</a></li>
                                                <li><a href="portfolio-loading-ajax-modal.html">توابع آژاکس صفحات
                                                        2</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><!-- BLOG -->
                            <a class="dropdown-toggle" href="#">
                                وبلاگ
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        پیشفرض
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-default-aside-left.html">سایدبار راست</a></li>
                                        <li><a href="blog-default-aside-right.html">سایدبار چپ</a></li>
                                        <li><a href="blog-default-aside-both.html">سایدبار دو طرف</a></li>
                                        <li><a href="blog-default-fullwidth.html">تمام صفحه</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        شبکه ای
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-column-2colums.html">طرح 1</a></li>
                                        <li><a href="blog-column-3colums.html">طرح 2</a></li>
                                        <li><a href="blog-column-4colums.html">طرح 3</a></li>
                                        <li class="divider"></li>
                                        <li><a href="blog-column-aside-left.html">سایدبار راست</a></li>
                                        <li><a href="blog-column-aside-right.html">سایدبار چپ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        ساختمانی
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-masonry-2colums.html">دو ستونه</a></li>
                                        <li><a href="blog-masonry-3colums.html">سه ستونه</a></li>
                                        <li><a href="blog-masonry-4colums.html">چهار ستونه</a></li>
                                        <li><a href="blog-masonry-fullwidth.html">تمام صفحه</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        دارای خط زمان
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-timeline-aside-left.html">سایدبار راست</a></li>
                                        <li><a href="blog-timeline-aside-right.html">سایدبار چپ</a></li>
                                        <li><a href="blog-timeline-right-aside-right.html">طرح 3</a></li>
                                        <li><a href="blog-timeline-right-aside-left.html">طرح 4</a></li>
                                        <li><a href="blog-timeline-fullwidth-left.html">طرح 5</a></li>
                                        <li><a href="blog-timeline-fullwidth-right.html">طرح 6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        دارای تصاویر کوچک
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-smallimg-aside-left.html">سایدبار راست</a></li>
                                        <li><a href="blog-smallimg-aside-right.html">سایدبار چپ</a></li>
                                        <li><a href="blog-smallimg-aside-both.html">سایدبار دوطرفه</a></li>
                                        <li><a href="blog-smallimg-fullwidth.html">تمام صفحه</a></li>
                                        <li class="divider"></li>
                                        <li><a href="blog-smallimg-alternate-1.html">طرح متفاوت 1</a></li>
                                        <li><a href="blog-smallimg-alternate-2.html">طرح متفاوت 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        مطلب وبلاگ
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-single-default.html">طرح پیشفرض</a></li>
                                        <li><a href="blog-single-aside-left.html">طرح سایدبار راست</a></li>
                                        <li><a href="blog-single-aside-right.html">طرح سایدبار چپ</a></li>
                                        <li><a href="blog-single-fullwidth.html">طرح تمام صفحه</a></li>
                                        <li><a href="blog-single-small-image-left.html">تصویر کوچک سمت چپ</a></li>
                                        <li><a href="blog-single-small-image-right.html">تصویر کوچک سمت راست</a>
                                        </li>
                                        <li><a href="blog-single-big-image.html">تصویر بزرگ</a></li>
                                        <li><a href="blog-single-fullwidth-image.html">تصویر تمام صفحه</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        دیدگاه ها
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-comments-bordered.html#comments">طرح 1</a></li>
                                        <li><a href="blog-comments-default.html#comments">طرح 2</a></li>
                                        <li><a href="blog-comments-facebook.html#comments">طرح 3</a></li>
                                        <li><a href="blog-comments-disqus.html#comments">طرح 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><!-- SHOP -->
                            <a class="dropdown-toggle" href="#">
                                فروشگاه
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        طرح تک ستونه
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-1col-left.html">سایدبار راست</a></li>
                                        <li><a href="shop-1col-right.html">سایدبار چپ</a></li>
                                        <li><a href="shop-1col-both.html">سایدبار دوطرفه</a></li>
                                        <li><a href="shop-1col-full.html">تمام صفحه</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        طرح دو ستونه
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-2col-left.html">سایدبار راست</a></li>
                                        <li><a href="shop-2col-right.html">سایدبار چپ</a></li>
                                        <li><a href="shop-2col-both.html">سایدبار دوطرفه</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        طرح سه ستونه
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-3col-left.html">سایدبار راست</a></li>
                                        <li><a href="shop-3col-right.html">سایدبار چپ</a></li>
                                        <li><a href="shop-3col-full.html">تمام صفحه</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        طرح چهار ستونه
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-4col-left.html">سایدبار راست</a></li>
                                        <li><a href="shop-4col-right.html">سایدبار چپ</a></li>
                                        <li><a href="shop-4col-full.html">تمام صفحه</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        صفحه محصول
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-single-left.html">سایدبار راست</a></li>
                                        <li><a href="shop-single-right.html">سایدبار چپ</a></li>
                                        <li><a href="shop-single-both.html">سایدبار دوطرفه</a></li>
                                        <li><a href="shop-single-full.html">تمام صفحه</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-compare.html">مقایسه محصولات</a></li>
                                <li><a href="shop-cart.html">سبد خرید</a></li>
                                <li><a href="shop-checkout.html">اطلاعات مالی</a></li>
                                <li><a href="shop-checkout-final.html">ثبت سفارش</a></li>
                            </ul>
                        </li>
                        <li class="dropdown mega-menu"><!-- SHORTCODES -->
                            <a class="dropdown-toggle" href="#">
                                عناصر و شورتکدها
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><a href="shortcode-animations.html">انیمیشن ها</a></li>
                                                <li><a href="shortcode-buttons.html">دکمه ها</a></li>
                                                <li><a href="shortcode-carousel.html">تحرکات</a></li>
                                                <li><a href="shortcode-charts.html">گراف ها</a></li>
                                                <li><a href="shortcode-clients.html">مشتریان</a></li>
                                                <li><a href="shortcode-columns.html">ردیف ها و ستون ها</a></li>
                                                <li><a href="shortcode-counters.html">شمارنده</a></li>
                                                <li><a href="shortcode-forms.html">عناصر فرم</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><a href="shortcode-dividers.html">تقسیم کننده</a></li>
                                                <li><a href="shortcode-icon-boxes.html">جعبه ها و آیکون ها</a></li>
                                                <li><a href="shortcode-galleries.html">گالری ها</a></li>
                                                <li><a href="shortcode-headings.html">استایل های هدر</a></li>
                                                <li><a href="shortcode-icon-lists.html">لیست آیکون ها</a></li>
                                                <li><a href="shortcode-labels.html">ویژگی های برجسته</a></li>
                                                <li><a href="shortcode-lightbox.html">لایت باکس</a></li>
                                                <li><a href="shortcode-forms-editors.html">ویرایش کننده های HTML</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><a href="shortcode-list-pannels.html">لیست پنل ها</a></li>
                                                <li><a href="shortcode-maps.html">نقشه ها</a></li>
                                                <li><a href="shortcode-media-embeds.html">کد های EMBED محتواها</a>
                                                </li>
                                                <li><a href="shortcode-modals.html">المان های آژاکس و بوت استرپ</a>
                                                </li>
                                                <li><a href="shortcode-navigations.html">ناوبار ها</a></li>
                                                <li><a href="shortcode-paginations.html">شمارنده صفحات</a></li>
                                                <li><a href="shortcode-progress-bar.html">کنداکتورها</a></li>
                                                <li><a href="shortcode-widgets.html">ویجت و ابزراک ها</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><a href="shortcode-pricing.html">جعبه قیمت ها</a></li>
                                                <li><a href="shortcode-process-steps.html">فرآیند عملیات</a></li>
                                                <li><a href="shortcode-callouts.html">پیشنهادات</a></li>
                                                <li><a href="shortcode-info-bars.html">باکس اطلاعات</a></li>
                                                <li><a href="shortcode-blockquotes.html">دیدگاه و نظرات</a></li>
                                                <li><a href="shortcode-responsive.html">واکنشگرا</a></li>
                                                <li><a href="shortcode-sections.html">جداکننده عناوین</a></li>
                                                <li><a href="shortcode-social-icons.html">آیکون شبکه های اجتماعی</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-5th">
                                            <ul class="list-unstyled">
                                                <li><a href="shortcode-alerts.html">اعلان ها</a></li>
                                                <li><a href="shortcode-styled-icons.html">آیکون های دیگر</a></li>
                                                <li><a href="shortcode-tables.html">جداول مختلف</a></li>
                                                <li><a href="shortcode-tabs.html">نوار ابزارها</a></li>
                                                <li><a href="shortcode-testimonials.html">دیدگاه مشتریان</a></li>
                                                <li><a href="shortcode-thumbnails.html">تصاویر شاخص</a></li>
                                                <li><a href="shortcode-toggles.html">منوهای کشویی</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </nav>
            </div>

        </div>
    </header>
    <!-- /Top Nav -->

</div>
