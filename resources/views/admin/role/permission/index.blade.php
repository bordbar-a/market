@extends('layouts.admin.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست دسترسی‌های نقش </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li><a href="{{route('admin.role.list')}}">لیست نقش‌ها</a></li>
            <li class="active">لیست دسترسی‌های نقش {{$role->persian_name}} </li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        لیست دسترسی‌های نقش : <strong> {{$role->persian_name}}</strong>
                        <a href="{{route('admin.role.edit' , $role->id)}}"
                           class="btn btn-info btn-3d btn-in-panel-header">ویرایش نقش</a>
                    </div>


                    <div class="panel-body">
                        @if(!$role->permissions->isEmpty())
                            <table class="table table-hover table-vertical-middle nomargin">
                                <thead>
                                @include('admin.role.permission.columns')
                                </thead>
                                <tbody>
                                @foreach($role->permissions as $permission)
                                    @include('admin.role.permission.items' , ['item'=>$permission , 'role'=>$role])
                                @endforeach
                                {{--                                @each('admin.role.permission.items' , [$role->permissions , $role] , ['item' , $role])--}}
                                </tbody>
                            </table>
                        @else

                            <div class="alert alert-mini alert-warning margin-bottom-30"><!-- WARNING -->
                                <strong>خالی</strong> برای این نقش، دسترسی‌ای تعریف نشده.
                            </div>

                        @endif
                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>
    </div>



@endsection

