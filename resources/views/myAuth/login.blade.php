@extends('layouts.front.base')


@section('content')
<!--
				PAGE HEADER

				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
<section class="page-header page-header-xs">
    <div class="container">

        <h1>ورود</h1>

        <!-- breadcrumbs -->
        <ol class="breadcrumb">
            <li><a href="#">خانه</a></li>
            <li><a href="#">صفحه</a></li>
            <li class="active">ورود</li>
        </ol><!-- /breadcrumbs -->

    </div>
</section>
<!-- /PAGE HEADER -->




<!-- -->
<section>
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <!-- ALERT -->
                <div class="alert alert-mini alert-danger margin-bottom-30">
                    <strong>مشکل ...</strong> ورود انجام نشد
                </div><!-- /ALERT -->

                <div class="box-static box-border-top padding-30">
                    <div class="box-title margin-bottom-30">
                        <h2 class="size-20">قبلا ثبت نام کردم</h2>
                    </div>

                    <form class="nomargin" method="post" action="#" autocomplete="off">
                        @csrf
                        <div class="clearfix">

                            <!-- Mobile -->
                            <div class="form-group">
                                <input type="text" name="mobile" class="form-control" placeholder="موبایل" required="">
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="رمز عبور" required="">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <!-- Inform Tip -->
                                <div class="form-tip pt-20">
                                    <a class="no-text-decoration size-13 margin-top-10 block" href="#">فراموش شدن رمز عبور</a>
                                </div>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">

                                <button class="btn btn-primary">ورود</button>

                            </div>

                        </div>

                    </form>

                </div>

                <div class="margin-top-30 text-center">
                    <a href="page-register-1.html"><strong>ایجاد حساب</strong></a>

                </div>

            </div>
        </div>

    </div>
</section>
<!-- / -->
@endsection
