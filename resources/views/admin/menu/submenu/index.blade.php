@extends('layouts.admin.base')
@section('style')
    <link href="{{asset('backend/css/custom/layout-nestable.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>آیتم‌های منو</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">منو {{ $menu->name }}</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"><a href="{{route('admin.menu.list')}}"
                                                     class="btn btn-3d   btn-default btn-lg btn-block margin-bottom-30">
                    لیست منوها
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
                        آیتم‌های منو <strong>{{$menu->name}}</strong>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-4">
                            <form class="" action="{{route('admin.menu.subStore' , [$menu->id])}}" method="post"
                                  enctype="multipart/form-data">
                                <fieldset>
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label>عنوان</label>
                                                <input type="text" name="title" value="{{old('title')}}"
                                                       class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label>URL</label>
                                                <input type="text" name="url" value="{{old('url')}}"
                                                       class="form-control required text-right en-font">
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit"
                                                class="btn btn-3d   btn-teal btn-xlg btn-block margin-top-30">
                                            افزودن آیتم
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>


                        <div class="col-md-8 pull-left">
                            <div class="row">


                                <!-- NESTABLE  -->
                                @if(isset($menu_items['root']))
                                    <div class="col-sm-6 col-md-8">
                                        <div class="col-md-11">
                                            <div class="dd" id="nestable_list">
                                                <ol class="dd-list">
                                                    @foreach($menu_items['root'] as $item)
                                                        @include('admin.menu.submenu.items' , ['all_items'=>$menu_items , 'item'=>$item])
                                                    @endforeach
                                                </ol>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-success btn-xs" id="#saveMenu">ذخیره تغییرات</button>
                                        </div>
                                    </div>
                                @endif

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


    <script type="text/javascript" src="{{asset('backend/plugins/nestable/jquery.nestable.js')}}"></script>

    <script>


        $(document).ready(function () {
            var updateMenu = function (e) {
                var list = e.length ? e : $(e.target), output = list.data('output');
                $.ajax({
                    method: "get",
                    url: "{{route('admin.menu.subUpdate' , $menu->id)}}",
                    data: {
                        list: list.nestable('serialize')
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    alert("Unable to save new list order: " + errorThrown);
                });
            };

            $('.dd').nestable({
                group: 1,
                maxDepth: 7,
            }).on('change', updateMenu);
            $('#nestable_list').nestable('collapseAll');


        });


    </script>
@endsection
