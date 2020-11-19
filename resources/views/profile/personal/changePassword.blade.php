@extends('layouts.profile.base')


@section('content')
    <!-- page title -->
    <header id="page-header">
        <h1>پروفایل</h1>
        <ol class="breadcrumb">
            <li class="active">تغییر رمز عبور</li>
        </ol>
    </header>
    <!-- /page title -->




    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">


                <!-- ------ -->
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-transparent">
                        <strong>تغییر رمز عبور</strong>
                    </div>

                    <div class="panel-body">
                        @if($errors->any())
                            @each('messages.errors' , $errors->all() , 'error')
                        @endif
                        <form
                            action="{{route('profile.personal.changePassword' , ['user_id'=>\Illuminate\Support\Facades\Auth::user()->id])}}"
                            method="post" enctype="multipart/form-data">
                            <fieldset>
                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>رمزعبور فعلی:</label>
                                            <input type="password" name="password" value=""
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>رمز عبور جدید</label>
                                            <input type="password" name="newPassword" value=""
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>تکرار رمز عبور جدید</label>
                                            <input type="password" name="newPassword_confirmation" value=""
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>


                            </fieldset>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-3d btn-teal btn-sm btn-block margin-top-30">
                                        ارسال
                                        <span class="block font-lato">تغییر رمز عبور</span>
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
