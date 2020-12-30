@extends('layouts.admin.base')

@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش آیتم اسلایدر</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">ویرایش آیتم اسلایدر</li>
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
                        ویرایش آیتم اسلایدر <strong class="color-red"><a href="{{route('admin.slider.sub' , $sliderItem->slider->id)}}" class="btn btn-info btn-xs">{{$sliderItem->slider->name}}</a></strong>
                    </div>

                    <div class="panel-body">

                        <div class="col-md-4">
                            <form class="" action="{{route('admin.slider.sliderItemUpdate' , [$sliderItem->id])}}" method="post"
                                  enctype="multipart/form-data">
                                <fieldset>
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label>عنوان</label>
                                                <input type="text" name="title" value="{{ $sliderItem->title}}"
                                                       class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label>URL</label>
                                                <input type="text" name="url" value="{{$sliderItem->url}}"
                                                       class="form-control required text-right en-font">
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit"
                                                class="btn btn-3d   btn-teal btn-xlg btn-block margin-top-30">
                                           ویرایش آیتم
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>

    </div>



@endsection
