@extends('layouts.admin.base')

@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش کاربر</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">ویرایش کاربر</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"><a href="{{route('admin.user.list')}}"
                                                     class="btn btn-3d   btn-default btn-lg btn-block margin-bottom-30">
                    لیست کاربران
                </a>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">

            @if($errors->any())
                @each('messages.errors' , $errors->all() , 'error')
            @endif
            <!-- ------ -->

                <form class="" action="{{route('admin.user.update' , [$user->id])}}" method="post"
                      enctype="multipart/form-data">
                    <fieldset>


                        {{--personal data panel--}}
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-transparent">
                                <strong>اطلاعات شخصی</strong>
                            </div>
                            <div class="panel-body">

                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام</label>
                                            <input type="text" name="firstName" value="{{ $user->first_name}}"
                                                   class="form-control required">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام خانوادگی</label>
                                            <input type="text" name="lastName" value="{{$user->last_name}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>ایمیل *</label>
                                            <input type="email" name="email" value="{{$user->email}}"
                                                   class="form-control required">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>موبایل</label>
                                            <input type="text" name="mobile" value="{{$user->mobile}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>کد ملی</label>
                                            <input type="text" name="nationalCode" value="{{$user->national_code}}"
                                                   class="form-control required">
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>

                        {{--password and status panel--}}
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-transparent">
                                <strong>رمز عبور و وضعیت</strong>
                            </div>
                            <div class="panel-body">

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>رمز عبور</label>
                                            <input type="password" name="password" value=""
                                                   class="form-control required">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>وضعیت</label>
                                            <select name="status" class="form-control pointer required">
                                                @foreach($userStatuses as $index => $status)
                                                    <option
                                                        value="{{$index}}" {{$user->status == $index ? "selected" : ""}} >{{$status}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        {{--role panel --}}
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-transparent">
                                <strong>نقش‌ها</strong>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group">

                                        <div class="col-md-12 col-sm-12">
                                        @foreach($roles as $role)
                                            <!-- checkbox -->
                                                <div class="permission-checkbox">
                                                    <i>{{$role->persian_name}}</i>
                                                    <input type="checkbox" value="{{$role->name}}"
                                                           name="roles[]" {{$user->roles->contains($role) ?'checked': ''}}>
                                                </div>

                                            @endforeach


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
                                                           name="permissions[]" {{$user->permissions->contains($permission) ?'checked': ''}}>
                                                </div>

                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        {{-- user image panel--}}
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-transparent">
                                <strong>تصویر کاربر</strong>
                            </div>
                            <div class="panel-body">
                                @if($user->profileImage)
                                    @can('seeUserImage' , $user)
                                        <div class="row profileImage">
                                            <div class="form-group">


                                                <div class="col-md-6 col-sm-6 text-center">
                                                    <div class="col-md-6 col-sm-6">
                                                        <img class="img-fluid img-thumbnail" width="130" height="170"
                                                             src="{{route('share.user.userImage' ,$user->id)}}"
                                                             alt="">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <a href="{{route('share.user.deleteProfileImage' ,['user'=>$user->id])}}">
                                                            <button type="button" class="btn btn-danger btn-xs">حذف عکس
                                                                پروفایل
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    @endcan
                                @endif

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>
                                                تصویر
                                                <small class="text-muted">دلخواه</small>
                                            </label>

                                            <!-- custom file upload -->
                                            <div class="fancy-file-upload fancy-file-primary">
                                                <i class="fa fa-upload"></i>
                                                <input type="file" class="form-control" name="image"
                                                       onchange="jQuery(this).next('input').val(this.value);"/>
                                                <input type="text" class="form-control"
                                                       placeholder="عکسی انتخاب نشده است"
                                                       readonly=""/>
                                                <span class="button">انتخاب تصویر</span>
                                            </div>
                                            <small class="text-muted block">حداکثر حجم : 2MB - فرمت (jpg)
                                            </small>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-3d   btn-teal btn-xlg btn-block margin-top-30">
                                    ویرایش کاربر
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12"><a href="{{route('admin.user.delete' , [$user->id])}}"
                                                      class="btn btn-3d   btn-danger btn-xlg btn-block margin-top-30">
                                    حذف کاربر
                                </a>
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>



@endsection
