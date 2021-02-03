@extends('layouts.admin.base')

@section('style')
    <link href="/backend/plugins/select2/css/select2.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>ایجاد محصول جدید</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">محصول جدید</li>
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

                        <form class="" action="{{route('admin.product.store')}}" method="post" id="productData"
                              enctype="multipart/form-data">
                            <fieldset>
                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-8 col-sm-8">
                                            <label>عنوان</label>
                                            <input type="text" name="title" value="{{old('title')}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12">
                                            <label>توضیحات</label>
                                            <textarea class="editor form-control" data-height="200"
                                                      data-lang="en-US"
                                                      id="editor"
                                                      name="description">{{old('description')}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>مبلغ</label>
                                            <input type="text" name="price" value="{{old('price')}}"
                                                   class="form-control required">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>درصد تخفیف</label>
                                            <input type="text" name="discount" value="{{old('discount')}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-8 col-sm-8">
                                            <label>دسته‌بندی ها</label>
                                            {{--TODO  implements create categories from select2 --}}
                                            <select id="myselect" class="form-control category-select2"
                                                    name="categories[]" multiple="multiple">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="fancy-file-upload fancy-file-info">
                                    <i class="fa fa-upload"></i>
                                    <input type="file" class="form-control" name="images[]" onchange="jQuery(this).next('input').val(this.value);" multiple/>
                                    <input type="text" class="form-control" placeholder="هیچ تصویری انتخاب نشده است" readonly="" />
                                    <span class="button">انتخاب تصویر</span>
                                </div>

                            </fieldset>

                        </form>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-3d   btn-teal btn-xlg btn-block margin-top-30"
                                        id="submitForm">
                                    ذخیره محصول
                                </button>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /----- -->

            </div>


        </div>

    </div>



@endsection




@section('script')


    <script type="text/javascript" src="/backend/plugins/select2/js/select2.js"></script>
    <script src="/backend/plugins/ckeditor/build/ckeditor.js"></script>

    <script>

        $(document).ready(function () {


            $("#myselect").select2({
                tags: true
            });



            document.getElementById('submitForm').addEventListener('click', function () {
                document.getElementById('productData').submit();

            });


            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    toolbar: {
                        items: [
                            'heading',
                            '|',
                            'fontFamily',
                            'fontSize',
                            'bold',
                            'italic',
                            'fontBackgroundColor',
                            'fontColor',
                            '|',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'alignment',
                            'indent',
                            'outdent',
                            '|',
                            'link',
                            'imageUpload',
                            'blockQuote',
                            'insertTable',
                            'mediaEmbed',
                            'undo',
                            'redo',
                            '|',
                            'removeFormat'
                        ]
                    },
                    language: 'fa',
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:full',
                            'imageStyle:side'
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells'
                        ]
                    },
                    licenseKey: '',

                } )
                .catch(error => {
                    console.error(error);
                });


        })
        ;
    </script>
@endsection

