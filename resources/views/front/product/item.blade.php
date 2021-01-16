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

            <h1>{{$product->title}}</h1>

            <!-- breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="#">خانه</a></li>
                <li><a href="#">فروشگاه</a></li>
                <li class="active">تک صفحه</li>
            </ol><!-- /breadcrumbs -->

        </div>
    </section>
    <!-- /PAGE HEADER -->




    <!-- -->
    <section>
        <div class="container">

            <div class="row">

                <!-- LEFT -->
                <div class="col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">

                    <div class="row">

                    @if(count($product->pictures))

                        <!-- IMAGE -->
                            <div class="col-lg-6 col-sm-6">

                                <div class="thumbnail relative margin-bottom-3">

                                    <!--
                                        IMAGE ZOOM

                                        data-mode="mouseover|grab|click|toggle"
                                    -->
                                    <figure id="zoom-primary" class="zoom" data-mode="mouseover">
                                        <!--
                                            zoom buttton

                                            positions available:
                                                .bottom-right
                                                .bottom-left
                                                .top-right
                                                .top-left
                                        -->
                                        <a class="lightbox bottom-right"
                                           href="{{getProductImageUrl($product->id , $product->pictures[0]->name)}}"
                                           data-plugin-options='{"type":"image"}'><i
                                                class="glyphicon glyphicon-search"></i></a>

                                        <!--
                                            image

                                            Extra: add .image-bw class to force black and white!
                                        -->
                                        <img class="img-responsive"
                                             src="{{getProductImageUrl($product->id , $product->pictures[0]->name)}}"
                                             width="1200" height="1500" alt="This is the product title"/>
                                    </figure>

                                </div>

                                <!-- Thumbnails (required height:100px) -->
                                <div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured"
                                     data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}'>
                                    @foreach($product->pictures as $picture)
                                        <a class="thumbnail active"
                                           href="{{getProductImageUrl($product->id , $picture->name)}}">
                                            <img
                                                src="{{getProductImageUrl($product->id , $picture->name)}}"
                                                height="100" alt=""/>
                                        </a>
                                    @endforeach
                                </div>
                                <!-- /Thumbnails -->

                            </div>
                            <!-- /IMAGE -->
                    @endif
                    <!-- ITEM DESC -->
                        <div class="col-lg-6 col-sm-6">

                            <!-- buttons -->
                            <div class="pull-right">
                                <!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                <a class="btn btn-default add-wishlist" href="#" data-item-id="1" data-toggle="tooltip"
                                   title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
                                <a class="btn btn-default add-compare" href="#" data-item-id="1" data-toggle="tooltip"
                                   title="Add To Compare"><i class="fa fa-bar-chart-o nopadding"
                                                             data-toggle="tooltip"></i></a>
                            </div>
                            <!-- /buttons -->

                            <!-- price -->
                            <div class="shop-item-price">
                                <span class="line-through nopadding-left">{{$product->present()->price}}</span>
                                {{$product->present()->getFinalPrice}}
                            </div>
                            <!-- /price -->

                            <hr/>

                            <div class="clearfix margin-bottom-30">
                                <span class="pull-right text-success"><i class="fa fa-check"></i> In Stock</span>
                                <!--
                                <span class="pull-right text-danger"><i class="glyphicon glyphicon-remove"></i> Out of Stock</span>
                                -->

                                <strong>SKU:</strong> UY7321987
                            </div>


                            <!-- short description -->
                            <p>{{$product->present()->getShortDescription}}</p>
                            <!-- /short description -->


                            <!-- countdown -->
                            <div class="text-center">
                                <h5>زمان باقی مانده برای تخفیف</h5>
                                <div class="countdown" data-from="January 31, 2018 15:03:26"
                                     data-labels="years,months,weeks,days,hour,min,sec">
                                    <!-- Example Date From: December 31, 2018 15:03:26 --></div>
                            </div>
                            <!-- /countdown -->


                            <hr/>

                            <div class="panel panel-default">
                                <!-- FORM -->
                                <form class="clearfix form-inline nomargin" method="post"
                                      action="{{route('front.basket.addByCount')}}">
                                    @csrf

                                    <input type="hidden" value="{{$product->id}}" name="product">
                                    <div class="panel-heading panel-heading-transparent">
                                        <h2 class="panel-title bold">میخوام بخرم</h2>
                                    </div>

                                    <div class="panel-body col-md-3">
                                        <label>تعداد</label>
                                        <input type="text" value="1" min="0" max="1000"
                                               class="form-control stepper width-50" name="count">
                                    </div>
                                    <div class="panel-body col-md-3">
                                        <button type="submit" class="btn btn-success form-control"
                                                style="margin-top: 25px;">افزودن به
                                            سبد
                                        </button>
                                    </div>

                                </form>
                                <!-- /FORM -->
                            </div>

                            <hr/>

                            <small class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla,
                                commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim
                                massa, sodales tempor convallis et.
                            </small>

                            <hr/>

                            <!-- Share -->
                            <div class="pull-right">

                                <a href="#"
                                   class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left"
                                   data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#"
                                   class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left"
                                   data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#"
                                   class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left"
                                   data-toggle="tooltip" data-placement="top" title="Google plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#"
                                   class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left"
                                   data-toggle="tooltip" data-placement="top" title="Linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>

                            </div>
                            <!-- /Share -->


                            <!-- rating -->
                            <div class="rating rating-4 size-13 margin-top-10 width-100">
                                <!-- rating-0 ... rating-5 --></div>
                            <!-- /rating -->

                        </div>
                        <!-- /ITEM DESC -->

                    </div>


                    <ul id="myTab" class="nav nav-tabs nav-top-border margin-top-80" role="tablist">
                        <li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab">توضیحات</a>
                        </li>
                        <li role="presentation"><a href="#specs" role="tab" data-toggle="tab">ویژگی‌ها</a></li>
                        <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">نظرات
                                ({{$product->comments_count}})</a></li>
                    </ul>

                    <div class="tab-content padding-top-20">
                        <!-- DESCRIPTION -->
                        <div role="tabpanel" class="tab-pane fade in active" id="description">
                            {!! $product->description !!}
                        </div>

                        <!-- SPECIFICATIONS -->
                        <div role="tabpanel" class="tab-pane fade" id="specs">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Column name</th>
                                        <th>Column name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Size</td>
                                        <td>2XL</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Red</td>
                                    </tr>
                                    <tr>
                                        <td>Weight</td>
                                        <td>132lbs</td>
                                    </tr>
                                    <tr>
                                        <td>Height</td>
                                        <td>74cm</td>
                                    </tr>
                                    <tr>
                                        <td>Bluetooth</td>
                                        <td><i class="fa fa-check text-success"></i> YES</td>
                                    </tr>
                                    <tr>
                                        <td>Wi-Fi</td>
                                        <td><i class="glyphicon glyphicon-remove text-danger"></i> NO</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- REVIEWS -->
                        <div role="tabpanel" class="tab-pane fade" id="reviews">

                            @include('front.product.partials.comments' , ['comments'=>$product->comments])
                        </div>
                    </div>


                    <hr class="margin-top-80 margin-bottom-80"/>


                    <h2 class="owl-featured"><strong> محصولات </strong> مرتبط </h2>
                    <div class="owl-carousel featured nomargin owl-padding-10"
                         data-plugin-options='{"singleItem": false, "items": "4", "stopOnHover":false, "autoPlay":4500, "autoHeight": false, "navigation": true, "pagination": false}'>

                    @foreach($relatedProducts as $rel_product)

                        <!-- item -->
                            <div class="shop-item nomargin">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="{{route('front.product.item' ,$rel_product->id)}}">
                                        <img class="img-responsive"
                                             src="{{getProductImageUrl($rel_product->id , $rel_product->pictures[0]->name)}}"
                                             alt="shop first image"/>
                                    </a>
                                    <!-- /product image(s) -->
                                </div>

                                <div class="shop-item-summary text-center">
                                    <h2>{{$rel_product->title}}</h2>

                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                      {{$rel_product->present()->getFinalPrice()}}
                                    </div>
                                    <!-- /price -->
                                </div>

                                <!-- buttons -->
                                <div class="shop-item-buttons text-center">
                                    <a class="btn btn-default" href="{{route('front.basket.add' , $rel_product->id)}}"><i class="fa fa-cart-plus"></i> اضافه به سبد
                                        </a>
                                </div>
                                <!-- /buttons -->
                            </div>
                            <!-- /item -->

                        @endforeach
                    </div>

                </div>


                <!-- RIGHT -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">

                    <!-- CATEGORIES -->
                    @widget('Front\Categories\Category')
                    <!-- /CATEGORIES -->


                    <!-- HTML BLOCK -->
                    <div class="margin-bottom-60">
                        <h4>HTML BLOCK</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                            tellus eunit.</p>

                        <form action="#" role="form" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Enter your Email"
                                       required="required">
                                <span class="input-group-btn">
											<button class="btn btn-success" type="submit"><i
                                                    class="glyphicon glyphicon-send"></i></button>
										</span>
                            </div>
                        </form>

                    </div>
                    <!-- /HTML BLOCK -->

                </div>

            </div>

        </div>
    </section>
    <!-- / -->

@endsection
