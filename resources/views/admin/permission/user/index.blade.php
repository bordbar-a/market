@extends('layouts.admin.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست کاربران این دسترسی </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li><a href="{{route('admin.permission.list')}}">لیست دسترسی‌ها</a></li>
            <li class="active">لیست کاربران دارای دسترسی : {{$permission->persian_name}} </li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        لیست کاربرانی که دسترسی : <strong> {{$permission->persian_name}}</strong> را دارند
                   {{--     <a href="{{route('admin.role.edit' , $permission->id)}}"
                           class="btn btn-info btn-3d btn-in-panel-header">ویرایش نقش</a>--}}
                    </div>


                    <div class="panel-body">
                        @if(!$permission->users->isEmpty())
                            <table class="table table-hover table-vertical-middle nomargin">
                                <thead>
                                @include('admin.permission.user.columns')
                                </thead>
                                <tbody>
                                @foreach($permission->users as $user)
                                    @include('admin.permission.user.items' , ['item'=>$user , 'permission'=>$permission])
                                @endforeach
                                </tbody>
                            </table>
                        @else

                            <div class="alert alert-mini alert-warning margin-bottom-30"><!-- WARNING -->
                                <strong>خالی.</strong> هیچ کاربری به صورت مستقیم این دسترسی را ندارد.
                            </div>

                        @endif
                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>
    </div>



@endsection

