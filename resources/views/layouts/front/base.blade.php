<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>پروژه مارکت</title>
    <meta name="keywords" content="HTML5,CSS3,Template"/>
    <meta name="description" content=""/>
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]"/>

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
        rel="stylesheet" type="text/css"/>

{{--    <!-- CORE CSS -->--}}
{{--    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />--}}

{{--    <!-- THEME CSS -->--}}
{{--    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />--}}
{{--    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />--}}
{{--    <link href="assets/plugins/bootstrap/RTL/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <link href="assets/plugins/bootstrap/RTL/bootstrap-flipped.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <link href="assets/css/layout-RTL.css" rel="stylesheet" type="text/css" />--}}


<!-- PAGE LEVEL SCRIPTS -->
    {{--    <link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />--}}
    <link href="/front/css/base.css" rel="stylesheet" type="text/css"/>
    @yield('style')
</head>

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations

    bg-grey					= grey background
    grain-grey				= grey grain background
    grain-blue				= blue grain background
    grain-green				= green grain background
    grain-blue				= blue grain background
    grain-orange			= orange grain background
    grain-yellow			= yellow grain background

    boxed 					= boxed layout
    pattern1 ... patern11	= pattern background
    menu-vertical-hide		= hidden, open on click

    BACKGROUND IMAGE [together with .boxed class]
    data-background="assets/images/boxed_background/1.jpg"
-->
<body class=" enable-animation">

<!-- wrapper -->
<div id="wrapper">

    <!-- Top Bar -->
@include('layouts.front.partials.top-bar')
<!-- /Top Bar -->

    <!-- HEADER -->
@include('layouts.front.partials.header')
<!-- /HEADER -->


@yield('content')

    <!-- FOOTER -->
@include('layouts.front.partials.footer')
<!-- /FOOTER -->


    <!--
        HOME SHOP - MODAL ON LOAD

        data-autoload="true" 			- load modal on page load
        data-autoload-delay="2000"		- load after 2000 ms (1000ms = 1s)
    -->
@include('layouts.front.partials.modal')
<!-- /HOME SHOP - MODAL ON LOAD -->


</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop">
</a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = '/front/plugins/';</script>

<script type="text/javascript" src="/front/js/base.js"></script>
{{--<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>--}}

{{--<script type="text/javascript" src="assets/js/scripts.js"></script>--}}


<!-- PAGE LEVEL SCRIPTS -->
{{--<script type="text/javascript" src="assets/js/view/demo.shop.js"></script>--}}
@yield('script')
</body>
</html>
