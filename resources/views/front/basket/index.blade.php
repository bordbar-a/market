@extends('layouts.front.base')


@section('content')


    <!--
				PAGE HEADER

				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
    <section class="page-header page-header-xs">
        <div class="container">

            <h1>سبد خرید</h1>

            <!-- breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="#">خانه</a></li>
                <li class="active">سبد خرید</li>
            </ol><!-- /breadcrumbs -->

        </div>
    </section>
    <!-- /PAGE HEADER -->




    <!-- CART -->
    <section>
        <div class="container">


            <!-- EMPTY CART -->


            @if(!count($basket_items))
                <div class="panel panel-default">
                    <div class="panel-body">
                        <strong>سبد خرید خالی است</strong><br/>
                        شما محصولی برای خرید انتخاب نکردید.<br/>
                        <a href="{{route('front.home')}}">اینجا</a> کلیک کنید برای ادامه. <br/>
                    </div>
                </div>

                <!-- /EMPTY CART -->


            @else

            <!-- CART -->
                <div class="row">

                    <!-- RIGHT -->
                    <div class="col-lg-9 col-sm-8">

                        <!-- CART -->
                        <form class="cartContent clearfix" method="post" id="cartFromChange"
                              action="{{route('front.basket.index')}}">
                        @csrf
                        <!-- cart content -->
                            <div id="cartContent">
                                {{--    my edit--}}
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>عنوان</th>
                                            <th>مبلغ</th>
                                            <th>تعداد</th>
                                            <th>مجموع</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($basket_items as $item)
                                            <tr>
                                                <td>
                                                    <a href="{{route('front.product.item',[$item->product_id])}}">  {{$item->title}}</a>
                                                </td>
                                                <td>
                                                    <span
                                                        class="line-through nopadding-left"> {{$item->present()->getPrice}}</span>
                                                    {{$item->present()->getPriceByDiscount}}
                                                </td>
                                                {{--                                                <td>{{$item->count}}</td>--}}
                                                <td><input class="steper" type="number" value="{{$item->count}}"
                                                           name="count[{{$item->product_id}}]" maxlength="3" max="999"
                                                           min="1" onchange="$('#cartFromChange').submit()">
                                                </td>
                                                <td>
                                                    <span
                                                        class="line-through nopadding-left"> {{$item->present()->getTotalPriceWithoutDiscount}}</span>
                                                    {{$item->present()->getTotalPriceWithDiscount}}</td>
                                                <td>
                                                    <a href="{{route('front.basket.remove' , [$item->product_id])}}"
                                                       class="btn btn-danger btn-xs"><i
                                                            class="fa fa-times white"></i> حذف </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{--    end of my edit--}}
                                <button type="submit" class="btn btn-success margin-top-20 margin-right-10 pull-right">
                                    <i
                                        class="glyphicon glyphicon-ok"></i> بروزرسانی سبد
                                </button>
                                <a
                                    href="{{route('front.basket.reset')}}">
                                    <button type="button"
                                            class="btn btn-danger margin-top-20 margin-right-10 pull-right"><i
                                            class="glyphicon glyphicon-remove"></i> خالی کردن سبد
                                    </button>
                                </a>
                                <!-- /update cart -->

                                <div class="clearfix"></div>
                            </div>
                            <!-- /cart content -->

                        </form>
                        <!-- /CART -->

                    </div>


                    <!-- LEFT -->
                    <div class="col-lg-3 col-sm-4">

                        <!-- TOGGLE -->
                        <div class="toggle-transparent toggle-bordered-full clearfix">

                            <div class="toggle nomargin-top">
                                <label>کد تخفیف</label>

                                <div class="toggle-content">
                                    <p>کد تخفیف را وارد کنید</p>

                                    <form action="#" method="post" class="nomargin">
                                        <input type="text" id="cart-code" name="cart-code"
                                               class="form-control text-center margin-bottom-10"
                                               placeholder="کد تخفیف"
                                               required="required">
                                        <button class="btn btn-primary btn-block" type="submit">اعمال</button>
                                    </form>
                                </div>
                            </div>

                            <div class="toggle">
                                <label>هزینه ارسال</label>

                                <div class="toggle-content">
                                    <p>برای محاسبه هزینه ، آدرس را مشخص کنید</p>

                                    <form action="#" method="post" class="nomargin">
                                        <label>استان:</label>
                                        <select id="cart-tax-country" name="cart-tax-country"
                                                class="form-control pointer margin-bottom-20">
                                            <option value="1">تهران</option>
                                            <option value="2">مشهد</option>
                                            <!-- add all here -->
                                        </select>

                                        <label>شهر:</label>
                                        <select id="cart-tax-state" name="cart-tax-state"
                                                class="form-control pointer margin-bottom-20">
                                            <option value="1">آبعلی</option>
                                            <option value="2">طرقبه</option>
                                            <!-- add all here -->
                                        </select>


                                        <button class="btn btn-primary btn-block" type="submit">اعمال</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- /TOGGLE -->

                        <div class="toggle-transparent toggle-bordered-full clearfix">
                            <div class="toggle active">
                                <div class="toggle-content">

										<span class="clearfix">
											<span class="pull-right">{{$total_price_without_discount}}</span>
											<strong class="pull-left">مبلغ بدون تخفیف :</strong>
										</span>
                                    <span class="clearfix">
											<span
                                                class="pull-right">{{$discount}}</span>
											<span class="pull-left">تخفیف:</span>
										</span>
                                    <span class="clearfix">
											<span class="pull-right">0</span>
											<span class="pull-left">هزینه ارسال:</span>
										</span>

                                    <hr/>

                                    <span class="clearfix">
											<span class="pull-right size-20">{{$total_price_with_discount}}</span>
											<strong class="pull-left">مجموع</strong>
										</span>

                                    <hr/>

                                    <a href="{{route('front.basket.review')}}" class="btn btn-primary btn-lg btn-block size-15"><i
                                            class="fa fa-mail-forward"></i>مرحله بعد</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /CART -->
            @endif
        </div>
    </section>
    <!-- /CART -->




@endsection


@section('script')


    <script>
        $(document).ready(function () {
            function submitForm() {
                $('#cartFromChange').submit();
            }
        });
    </script>


@endsection
