@extends('layouts.admin.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست کاربران این دسترسی </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li><a href="{{route('admin.role.list')}}">لیست نقش‌ها</a></li>
            <li class="active">لیست کاربران دارای نفش : {{$role->persian_name}} </li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        لیست کاربرانی که نقش : <strong> {{$role->persian_name}}</strong> را دارند
                   {{--     <a href="{{route('admin.role.edit' , $permission->id)}}"
                           class="btn btn-info btn-3d btn-in-panel-header">ویرایش نقش</a>--}}
                    </div>


                    <div class="panel-body">
                        @if(!$role->users->isEmpty())
                            <table class="table table-hover table-vertical-middle nomargin">
                                <thead>
                                @include('admin.role.user.columns')
                                </thead>
                                <tbody>
                                @foreach($role->users as $user)
                                    @include('admin.role.user.items' , ['item'=>$user , '$role'=>$role])
                                @endforeach
                                </tbody>
                            </table>
                        @else

                            <div class="alert alert-mini alert-warning margin-bottom-30"><!-- WARNING -->
                                <strong>خالی.</strong> هیچ کاربری این نقش را ندارد.
                            </div>

                        @endif
                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>
    </div>



@endsection

