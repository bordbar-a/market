@extends('layouts.admin.base')

@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>اضافه کردن کاربر جدید</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">کاربر جدید</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                @if($errors->any())
                    @each('messages.errors' , $errors->all() , 'error')
                @endif
                <form class="" action="{{route('admin.user.store')}}" method="post"
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
                                            <input type="text" name="firstName" value="{{old('firstName')}}"
                                                   class="form-control required">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام خانوادگی</label>
                                            <input type="text" name="lastName" value="{{old('lastName')}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>ایمیل *</label>
                                            <input type="email" name="email" value="{{old('email')}}"
                                                   class="form-control required">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>موبایل</label>
                                            <input type="text" name="mobile" value="{{old('mobile')}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>کد ملی</label>
                                            <input type="text" name="nationalCode" value="{{old('nationalCode')}}"
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
                                                        value="{{$index}}" >{{$status}}</option>
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
                                                           name="roles[]" >
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
                                                           name="permissions[]">
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
                                    ذخیره کاربر
                                </button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>


        </div>

    </div>



@endsection
