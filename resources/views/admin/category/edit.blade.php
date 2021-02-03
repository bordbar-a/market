@extends('layouts.admin.base')

@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش آیتم منو</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">ویرایش آیتم منو</li>
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
                        ویرایش آیتم دسته‌بندی <strong class="color-red">{{$category->title}}</strong>
                    </div>

                    <div class="panel-body">

                        <div class="col-md-4">
                            <form class="" action="{{route('admin.category.update' , [$category->id])}}" method="post"
                                  enctype="multipart/form-data">
                                <fieldset>
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label>عنوان</label>
                                                <input type="text" name="title" value="{{ $category->title}}"
                                                       class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label>والد : </label>
                                                <select name="parentId" class="form-control pointer required">
                                                    <option value="0">دسته‌بندی اصلی</option>


                                                    @foreach($categories as $cat)
                                                        @if($cat->id != $category->id)
                                                            <option value="{{$cat->id}}" {{$cat->id==optional($category->parent)->id ? 'selected': ''}}>{{$cat->title}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
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
