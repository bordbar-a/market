@extends('layouts.admin.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست محصولات</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">لیست محصولات</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>محصولات</strong>
                    </div>

                    <div class="panel-body">
                        <table class="table table-hover table-vertical-middle nomargin">
                            <thead>
                            @include('admin.product.columns')
                            </thead>
                            <tbody>
                            @each('admin.product.items' , $products , 'product')
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>
    </div>



@endsection

