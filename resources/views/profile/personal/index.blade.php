@extends('layouts.profile.base')


@section('content')
    <!-- page title -->
    <header id="page-header">
        <h1>پروفایل</h1>
        <ol class="breadcrumb">
            <li class="active">اطلاعات شخصی</li>
        </ol>
    </header>
    <!-- /page title -->




    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>اطلاعات شخصی</strong>
                    </div>

                    <div class="panel-body">

                        <form action="{{route('profile.personal.update')}}" method="post" enctype="multipart/form-data">
                            <fieldset>
                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام</label>
                                            <input type="text" name="firstName" value="{{$user->first_name}}"
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام خانوادگی</label>
                                            <input type="text" name="lastName" value="{{$user->last_name}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>شماره تلفن</label>
                                            <input type="text" name="mobile" value="{{$user->mobile}}"
                                                   class="form-control" disabled>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>ایمیل</label>
                                            <input type="text" name="email" value="{{$user->email}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>کد ملی</label>
                                            <input type="text" name="nationalCode" value="{{$user->national_code}}"
                                                   class="form-control">
                                        </div>

                                        @if($user->profileImage)

                                            <div class="col-md-6 col-sm-6 text-center">

                                                <div class="col-md-6 col-sm-6">
                                                    <img class="img-fluid img-thumbnail" width="130" height="170"
                                                         src="{{route('profile.personal.userImage' ,$user->id)}}"
                                                         alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <a href="{{route('profile.personal.deleteProfileImage' ,['user'=>$user->id])}}">
                                                        <button type="button" class="btn btn-danger btn-xs">حذف عکس
                                                            پروفایل
                                                        </button>
                                                    </a>
                                                </div>


                                            </div>
                                    </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>
                                                تصویر
                                                <small class="text-muted">{{--Curriculum Vitae - optional--}}</small>
                                            </label>

                                            <!-- custom file upload -->
                                            <div class="fancy-file-upload fancy-file-primary">
                                                <i class="fa fa-upload"></i>
                                                <input type="file" class="form-control" name="image"
                                                       onchange="jQuery(this).next('input').val(this.value);"/>
                                                <input type="text" class="form-control" placeholder="no file selected"
                                                       readonly=""/>
                                                <span class="button">انتخاب فایل</span>
                                            </div>
                                            <small class="text-muted block">حداکثر حجم فایل :</small>

                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30">
                                        ارسال
                                        <span class="block font-lato">ویراش پروفایل</span>
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
