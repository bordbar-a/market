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
            <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>افزودن</strong>
                    </div>

                    <div class="panel-body">

                        <form class="" action="{{route('admin.user.store')}}" method="post"
                              enctype="multipart/form-data">
                            <fieldset>
                                {{csrf_field()}}
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
                                        <div class="col-md-6 col-sm-6">
                                            <label>رمز عبور</label>
                                            <input type="password" name="password" value=""
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="row">--}}
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <div class="col-md-12 col-sm-12">--}}
                                {{--                                            <label>Position *</label>--}}
                                {{--                                            <select name="contact[position]" class="form-control pointer required">--}}
                                {{--                                                <option value="">--- Select ---</option>--}}
                                {{--                                                <option value="Marketing">PR &amp; Marketing</option>--}}
                                {{--                                                <option value="Developer">Web Developer</option>--}}
                                {{--                                                <option value="php">PHP Programmer</option>--}}
                                {{--                                                <option value="Javascript">Javascript Programmer</option>--}}
                                {{--                                            </select>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}


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
                                        ذخیره کاربر
                                    </button>
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