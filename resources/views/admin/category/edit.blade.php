@extends('layouts.admin.base')

@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش دسته‌بندی</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">ویرایش‌ دسته‌بندی</li>
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
                        <strong>ویرایش</strong>
                    </div>

                    <div class="panel-body">

                        <form class="" action="{{route('admin.category.update' , [$category->id])}}" method="post"
                              enctype="multipart/form-data">
                            <fieldset>
                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-8 col-sm-8">
                                            <label>عنوان</label>
                                            <input type="text" name="title" value="{{old('title' , $category->title)}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-8 col-sm-8">
                                            <label>والد : </label>
                                            <select name="parentId" class="form-control pointer required">
                                                <option value="0">دسته‌بندی اصلی</option>

                                                @foreach($categories as $item)
                                                    @if($category->id!=$item->id)
                                                        <option
                                                            value="{{$item->id}}" {{$item->id==$category->parent_id ?"selected" : ''}}> {{$item->title}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </fieldset>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-3d   btn-teal btn-xlg btn-block margin-top-30">
                                        ذخیره دسته‌بندی
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
