@extends('layouts.front.base')


@section('content')
    <!-- -->
    <section>
        <div class="container">

            <div class="row">

                <!-- Register -->
                <div class="col-md-6 col-sm-6">

                    <!-- ALERT -->

                    @foreach($errors->all() as $error)
                    <div class="alert alert-mini alert-danger margin-bottom-30">
                        <strong>مشکل...</strong> {{$error}}
                    </div>
                    @endforeach

                    <!-- /ALERT -->

                    <!-- register form -->
                    <form class="nomargin sky-form boxed" action="{{route('register')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <header class="pull-left">
                                    <i class="fa fa-users"></i> ثبت نام
                                </header>
                            </div>
                        </div>

                        <fieldset class="nomargin">
                            <label class="input margin-bottom-10">
                                <i class="ico-append fa fa-phone"></i>
                                <input type="text" placeholder="موبایل" name="mobile">
                                <b class="tooltip tooltip-bottom-right">برای معتبر بودن حساب</b>
                            </label>

                            <label class="input margin-bottom-10">
                                <i class="ico-append fa fa-lock"></i>
                                <input type="password" placeholder="رمزعبور" name="password">
                                <b class="tooltip tooltip-bottom-right">شامل کاراکتر و عدد</b>
                            </label>

                            <label class="input margin-bottom-10">
                                <i class="ico-append fa fa-lock"></i>
                                <input type="password" placeholder="تکرار رمز عبور" name="password_confirmation">
                                <b class="tooltip tooltip-bottom-right">تکرار رمز</b>
                            </label>

                            <div class="row margin-bottom-10">
                                <div class="col-md-6">
                                    <label class="input">
                                        <input type="text" placeholder="نام" name="firstName">
                                    </label>
                                </div>
                                <div class="col col-md-6">
                                    <label class="input">
                                        <input type="text" placeholder="نام خانوادگی" name="lastName">
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row margin-bottom-20">
                            <div class="col-md-3 pull-left">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> ثبت نام
                                </button>
                            </div>
                        </div>

                    </form>
                    <!-- /register form -->

                </div>
                <!-- /Register -->

                <!-- SOCIAL LOGIN -->
{{--                <div class="col-md-6 col-sm-6">--}}
{{--                    <form action="#" method="post" class="sky-form boxed">--}}

{{--                        <header class="size-18 margin-bottom-20">--}}
{{--                            Register using your favourite social network--}}
{{--                        </header>--}}

{{--                        <fieldset class="nomargin">--}}

{{--                            <div class="row">--}}

{{--                                <div class="col-md-8 col-md-offset-2">--}}

{{--                                    <a class="btn btn-block btn-social btn-facebook margin-bottom-10">--}}
{{--                                        <i class="fa fa-facebook"></i> Sign up with Facebook--}}
{{--                                    </a>--}}

{{--                                    <a class="btn btn-block btn-social btn-twitter margin-bottom-10">--}}
{{--                                        <i class="fa fa-twitter"></i> Sign up with Twitter--}}
{{--                                    </a>--}}

{{--                                    <a class="btn btn-block btn-social btn-google margin-bottom-10">--}}
{{--                                        <i class="fa fa-google-plus"></i> Sign up with Google--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </fieldset>--}}

{{--                        <footer>--}}
{{--                            Already have an account? <a href="page-login-1.html"><strong>Back to login!</strong></a>--}}
{{--                        </footer>--}}

{{--                    </form>--}}

{{--                </div>--}}
                <!-- /SOCIAL LOGIN -->

            </div>


        </div>
    </section>
    <!-- / -->
@endsection
