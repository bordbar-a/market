@extends('layouts.admin.base')

@section('style')
    <link href="/backend/plugins/select2/css/select2.css" rel="stylesheet" type="text/css"/>
@endsection



@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>ویرایش محصول</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">ویرایش‌ محصول</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"><a href="{{route('admin.product.list')}}"
                                                     class="btn btn-3d   btn-default btn-lg btn-block margin-bottom-30">
                    لیست محصولات
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

                        <form class="" action="{{route('admin.product.update',[$product->id])}}" method="post"
                              enctype="multipart/form-data">
                            <fieldset>
                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-8 col-sm-8">
                                            <label>عنوان</label>
                                            <input type="text" name="title" value="{{$product->title}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <label>توضیحات</label>
                                            <textarea class="summernote form-control" data-height="200"
                                                      data-lang="en-US"
                                                      name="description">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>مبلغ</label>
                                            <input type="text" name="price" value="{{$product->price}}"
                                                   class="form-control required">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>درصد تخفیف</label>
                                            <input type="text" name="discount" value="{{$product->discount}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-8 col-sm-8">
                                            <label>دسته‌بندی ها</label>

                                            <select class="form-control" id="myselect"
                                                    name="categories[]" multiple>
                                                @foreach($categories as $index => $category)
                                                    <option value="{{$index}}"
                                                 {{in_array($index , $productCategories) ? 'selected' : ''}}>{{$category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </fieldset>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-3d   btn-teal btn-xlg btn-block margin-top-30">
                                        ذخیره محصول
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

@section('script')


    <script type="text/javascript" src="/backend/plugins/select2/js/select2.js"></script>

    <script>
        $(document).ready(function () {
            $("#myselect").select2({
                tags: true
            });

        });
    </script>
@endsection
