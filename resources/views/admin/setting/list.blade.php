@extends('layouts.admin.base')
@section('content')

    <!-- page title -->
    <header id="page-header">
        <h1>تنظیمات سایت</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">لیست تنظیمات</li>
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
                        <strong>تنظیمات سایت</strong>
                    </div>

                    <div class="panel-body">

                        <form class="" action="{{route('admin.setting.save')}}" method="post"
                              enctype="multipart/form-data">
                            <fieldset>
                                @csrf
                                @foreach($settings as $setting)
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-8 col-sm-8">
                                                <label>{{$setting->title}}</label>
                                                <input type="text" name="{{$setting->key}}" value="{{$setting->value}}"
                                                       class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </fieldset>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-3d   btn-teal btn-xlg btn-block margin-top-30">
                                        ذخیره تنظیمات
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

