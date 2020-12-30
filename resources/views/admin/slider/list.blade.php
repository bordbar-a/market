@extends('layouts.admin.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست اسلایدرها</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">لیست اسلایدرها</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>اسلایدرها</strong>
                    </div>

                    <div class="panel-body">
                        <table class="table table-hover table-vertical-middle nomargin">
                            <thead>
                            @include('admin.slider.columns')
                            </thead>
                            <tbody>
                            @each('admin.slider.items' , $sliders , 'slider')
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>
    </div>



@endsection

