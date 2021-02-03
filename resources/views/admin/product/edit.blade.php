@extends('layouts.admin.base')

@section('style')
    <link href="/backend/plugins/select2/css/select2.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/plugins/summernote/summernote.css" rel="stylesheet" type="text/css"/>
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

                        <form class="" id="productData" action="{{route('admin.product.update',[$product->id])}}"
                              method="post"
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
{{--                                            <div id="editor">{!! $product->description !!}</div>--}}
                                            <textarea class="editor form-control" data-height="200"
                                                      data-lang="en-US"
                                                      id="editor"
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

                        </form>
                        <div class="row">
                            <form action="{{route('admin.product.editImages' , $product->id)}}" method="post"
                                  class="dropzone nomargin" id="my-dropzone">@csrf</form>
                        </div>


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
    <script type="text/javascript" src="/backend/plugins/dropzone/dropzone.js"></script>
    <script src="/backend/plugins/ckeditor/build/ckeditor.js"></script>

    <script>

        $(document).ready(function () {


            $("#myselect").select2({
                tags: true
            });

            Dropzone.options.myDropzone = {
                acceptedFiles: "image/*",
                init: function () {
                        <?php
                        $files = json_encode($product->pictures()->pluck('name')->toArray());
                        echo "files = " . $files . ";\n";
                        ?>
                    for (let i = 0; i < files.length; i++) {
                        let mockFile = {
                            name: i + 1,
                            size: '0',
                            type: 'image/jpeg',
                            accepted: true            // required if using 'MaxFiles' option
                        };
                        this.files.push(mockFile);    // add to files array
                        this.emit("addedfile", mockFile);
                        this.emit("thumbnail", mockFile, '{{asset('storage/productImages/'.$product->id)}}' + '/' + files[i]);
                        this.emit("complete", mockFile);
                        // Create the remove button
                        let removeButton = Dropzone.createElement("<button class='btn btn-sm btn-default fullwidth margin-top-10'>حذف تصویر</button>");

                        // Capture the Dropzone instance as closure.
                        let _this = this;
                        // Listen to the click event
                        removeButton.addEventListener("click", function (e) {
                            // Make sure the button click doesn't submit the form:
                            e.preventDefault();
                            e.stopPropagation();

                            // Remove the file preview.

                            $.ajax({
                                type: 'get',
                                url: '{{url('admin/product/images/' . $product->id )}}' + '/' + files[i] + '/delete',
                                success: function (data) {
                                    _this.removeFile(mockFile);
                                }
                            });
                            // If you want to the delete the file on the server as well,
                            // you can do the AJAX request here.
                        });

                        // Add the button to the file preview element.
                        mockFile.previewElement.appendChild(removeButton);
                    }
                    this.on("success", function (file, response) {
                        // Create the remove button
                        var removeButton = Dropzone.createElement("<button class='btn btn-sm btn-default fullwidth margin-top-10'>حذف تصویر</button>");
                        // Capture the Dropzone instance as closure.
                        var _this = this;
                        // Listen to the click event
                        removeButton.addEventListener("click", function (e) {
                            // Make sure the button click doesn't submit the form:
                            e.preventDefault();
                            e.stopPropagation();
                            $.ajax({
                                type: 'get',
                                url: '{{url('admin/product/images/' . $product->id )}}' + '/' + response.name + '/delete',
                                success: function (data) {
                                    _this.removeFile(file);
                                }
                            });
                            // Remove the file preview.
                            // _this.removeFile(file);

                            // If you want to the delete the file on the server as well,
                            // you can do the AJAX request here.
                        });

                        // Add the button to the file preview element.
                        file.previewElement.appendChild(removeButton);
                    });


                },


            }


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
