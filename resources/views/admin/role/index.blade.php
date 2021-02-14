@extends('layouts.admin.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست نقش‌ها</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">لیست نقش‌ها</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>نقش‌ها</strong>
                        <a  href="{{route('admin.role.create')}}" class="btn btn-success btn-3d btn-in-panel-header">افزودن نقش</a>
                    </div>


                    <div class="panel-body">
                        @if(!$roles->isEmpty())
                        <table class="table table-hover table-vertical-middle nomargin">
                            <thead>
                            @include('admin.role.columns')
                            </thead>
                            <tbody>
                            @each('admin.role.items' , $roles , 'item')
                            </tbody>
                        </table>
                            @else
                            <p>نقشی تعریف نشده.</p>
                            @endif
                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>
    </div>



@endsection

