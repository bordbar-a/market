@extends('layouts.admin.base')

@section('content')



    <!-- page title -->
    <header id="page-header">
        <h1>اضافه کردن نقش جدید</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">پنل ادمین</a></li>
            <li class="active">اضافه کردن نقش</li>
        </ol>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="row">

            <div class="col-md-12">

            @if($errors->any())
                @each('messages.errors' , $errors->all() , 'error')
            @endif
                <form class="" action="{{route('admin.role.store')}}" method="post"
                      enctype="multipart/form-data">
                    <fieldset>


                        {{--personal data panel--}}
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-transparent">
                                <strong>نقش جدید</strong>
                            </div>
                            <div class="panel-body">

                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام</label>
                                            <input type="text" name="name" value="{{old('name')}}"
                                                   class="form-control required">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>نام فارسی</label>
                                            <input type="text" name="persian-name" value="{{old('persian-name')}}"
                                                   class="form-control required">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        {{-- permission panel--}}
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-transparent">
                                <strong>دسترسی‌ها</strong>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group">

                                        <div class="col-md-12 col-sm-12">
                                        @foreach($permissions as $permission)
                                            <!-- checkbox -->
                                                <div class="permission-checkbox">
                                                    <i>{{$permission->persian_name}}</i>
                                                    <input type="checkbox" value="{{$permission->name}}"
                                                           name="permissions[]">
                                                </div>

                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-3d   btn-teal btn-xlg btn-block margin-top-30">
                                    ذخیره نقش
                                </button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>


        </div>

    </div>



@endsection
