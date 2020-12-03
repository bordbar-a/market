@extends('layouts.admin.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست سفارشات</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('profile.dashboard')}}">پنل ادمین</a></li>
            <li><a href="{{route('admin.order.list')}}">لیست سفارشات</a></li>
            <li class="active">جزئیات سفارش : {{ $order->ref_number }}</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-6 col-sm-6 text-left">

                                <h4><strong>اطلاعات مشتری (خریدار)</strong></h4>
                                <ul class="list-unstyled">
                                    <li><strong>نام :</strong>{{$order->user->first_name}}</li>
                                    <li><strong>نام خانوادگی :</strong>{{$order->user->last_name}}</li>
                                    <li><strong>شماره تلفن : </strong>{{$order->user->mobile}}</li>
                                </ul>

                            </div>

                            <div class="col-md-6 col-sm-6 text-left">

                                <h4><strong>اطلاعات بانکی کاربر</strong></h4>
                                <ul class="list-unstyled">
                                    <li><strong>نام بانک :</strong> مسکن ، ملی</li>
                                    <li><strong>شماره حساب بانکی :</strong> 012345678901</li>
                                    <li><strong>شماره شبای بانکی :</strong> IR12345678901234</li>
                                    <li><strong>شماره کارت بانکی :</strong> 1234-5678-8765-4321</li>
                                </ul>

                            </div>

                        </div>

                        <div class="table-responsive">
                            <table class="table table-condensed nomargin">
                                <thead>
                                @include('admin.order.products.columns')
                                </thead>
                                <tbody>
                                @each('admin.order.products.items' , $order->products , 'product')
                                </tbody>
                            </table>
                        </div>

                        <hr class="nomargin-top"/>

                        <div class="row">

                            <div class="col-sm-6 text-left">

                                <ul class="list-unstyled">
                                    <li><strong>ارزش خرید : </strong>{{$order->present()->getTotalPriceWithoutDiscount()}}</li>
                                    <li><strong>تخفیف کل : </strong>{{$order->present()->getTotalDiscount()}}</li>
                                    <li><strong>مبلغ کل پرداخت : </strong>{{$order->present()->getPrice()}}</li>

                                </ul>

                            </div>

                            <div class="col-sm-6 text-left">
                                <h4><strong>اطلاعات تماس شرکت :</strong></h4>

                                <p class="nomargin nopadding">
                                    <strong>توجه :</strong>
                                    از این اطلاعات برای برقراری ارتباط با فروشگاه ما و همچنین برخورداری از پشتیبانی
                                    استفاده کنید.
                                </p><br><!-- no P margin for printing - use <br> instead -->

                                <address>
                                    شعبه یک : آسیا ، ایران <br>
                                    شعبه دوم : اروپا ، کرواسی<br>
                                    شماره تماس : 989210000000+ <br>
                                    فکس : 1-800-565-2390 <br>
                                    ایمیل رسمی : demo@smarty.admin
                                </address>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="panel panel-default text-left">
                    <div class="panel-body">
                        <a class="btn btn-warning" href="#"><i class="fa fa-pencil-square-o"></i> ویرایش</a>
                        <a class="btn btn-primary" href="#"><i class="fa fa-check"></i> ذخیره</a>
                        <a class="btn btn-success" href="page-invoice-print.html" target="_blank"><i
                                class="fa fa-print"></i> پرینت فاکتور</a>
                    </div>
                </div>
            </div>


        </div>

    </div>



@endsection


