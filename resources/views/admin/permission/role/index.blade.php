@extends('layouts.admin.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>لیست نقش‌های این دسترسی </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li><a href="{{route('admin.permission.list')}}">لیست دسترسی‌ها</a></li>
            <li class="active">لیست نقش‌های دارای دسترسی : {{$permission->persian_name}} </li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        لیست نقش‌هایی که دسترسی : <strong> {{$permission->persian_name}}</strong> را دارند
                   {{--     <a href="{{route('admin.role.edit' , $permission->id)}}"
                           class="btn btn-info btn-3d btn-in-panel-header">ویرایش نقش</a>--}}
                    </div>


                    <div class="panel-body">
                        @if(!$permission->roles->isEmpty())
                            <table class="table table-hover table-vertical-middle nomargin">
                                <thead>
                                @include('admin.permission.role.columns')
                                </thead>
                                <tbody>
                                @foreach($permission->roles as $role)
                                    @include('admin.permission.role.items' , ['item'=>$role , 'permission'=>$permission])
                                @endforeach
                                </tbody>
                            </table>
                        @else

                            <div class="alert alert-mini alert-warning margin-bottom-30"><!-- WARNING -->
                                <strong>خالی.</strong> هیچ نقشی این دسترسی را ندارد.
                            </div>

                        @endif
                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>
    </div>



@endsection

