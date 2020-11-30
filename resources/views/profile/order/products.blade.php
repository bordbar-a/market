@extends('layouts.profile.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست سفارشات</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('profile.dashboard')}}">پنل ادمین</a></li>
            <li><a href="{{route('profile.order.list')}}">لیست سفارشات</a></li>
            <li class="active">لیست محصولات سفارش : {{ $order->ref_number }}</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>محصولات سفارش {{ $order->ref_number }}</strong>
                        <a href="{{route('profile.order.edit',[$order->id])}}" class="btn btn-xs btn-warning pull-right">لغو و ویرایش سفارش</a>
                    </div>

                    <div class="panel-body">
                        <table class="table table-hover table-vertical-middle nomargin">
                            <thead>
                            @include('profile.order.product-columns')
                            </thead>
                            <tbody>
                            @each('profile.order.product-items' , $order->products , 'product')
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /----- -->

            </div>


        </div>

    </div>



@endsection


