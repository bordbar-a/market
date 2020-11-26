@extends('layouts.profile.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست سفارشات</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('profile.dashboard')}}">پنل ادمین</a></li>
            <li class="active">لیست سفارشات</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>سفارشات</strong>
                    </div>

                    <div class="panel-body">

                        <table class="table table-hover table-vertical-middle nomargin">
                            <thead>
                            @include('profile.order.columns')
                            </thead>
                            <tbody>
                            @each('profile.order.items' , $orders , 'order')
                            </tbody>
                        </table>

                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>

    </div>



@endsection
