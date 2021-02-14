@extends('layouts.admin.base')

@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش نقش</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">ویرایش نقش</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"><a href="{{route('admin.role.list')}}"
                        class="btn btn-3d btn-default btn-lg btn-block margin-bottom-30">
                    لیست نقش‌ها
                </a>
            </div>
        </div>


        <div class="row">

            <div class="col-md-12">

                @if($errors->any())
                    @each('messages.errors' , $errors->all() , 'error')
                @endif
                <form class="" action="{{route('admin.role.update' , $role->id)}}" method="post"
                      enctype="multipart/form-data">
                    <fieldset>


                        {{--personal data panel--}}
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-transparent">
                                <strong>ویرایش</strong>
                            </div>
                            <div class="panel-body">

                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام</label>
                                            <input type="text" name="name" value="{{$role->name}}"
                                                   class="form-control required">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام فارسی</label>
                                            <input type="text" name="persian-name" value="{{$role->persian_name}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        {{-- permission panel--}}
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-transparent">
                                <strong>دسترسی‌ها</strong>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group">

                                        <div class="col-md-12 col-sm-12">
                                        @foreach($permissions as $permission)
                                            <!-- checkbox -->
                                                <div class="permission-checkbox">
                                                    <i>{{$permission->persian_name}}</i>
                                                    <input type="checkbox" value="{{$permission->name}}"
                                                           name="permissions[]" {{$role->permissions->contains($permission) ? 'checked' : ''}}>
                                                </div>

                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-3d   btn-teal btn-xlg btn-block margin-top-30">
                                    ویرایش نقش
                                </button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>


        </div>

    </div>



@endsection
