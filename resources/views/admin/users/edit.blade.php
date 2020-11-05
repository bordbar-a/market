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
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>ویرایش</strong>
                    </div>

                    <div class="panel-body">

                        <form class="" action="{{route('admin.user.update' , [$user->id])}}" method="post"
                              enctype="multipart/form-data">
                            <fieldset>
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
                                        <div class="col-md-6 col-sm-6">
                                            <label>رمز عبور</label>
                                            <input type="password" name="password" value=""
                                                   class="form-control required">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>نقش</label>
                                            <select name="role" class="form-control pointer required">
                                                @foreach($userRoles as $index => $role)
                                                    <option
                                                        value="{{$index}}" {{$user->role == $index ? "selected" : ""}}>{{$role}}</option>
                                                @endforeach
                                            </select>
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

                            </fieldset>

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

                        </form>

                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>

    </div>



@endsection
