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
                                       href="/front/images/demo/shop/products/1000x1500/p5.jpg"
                                       data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

                                    <!--
                                        image

                                        Extra: add .image-bw class to force black and white!
                                    -->
                                    <img class="img-responsive" src="/front/images/demo/shop/products/1000x1500/p5.jpg"
                                         width="1200" height="1500" alt="This is the product title"/>
                                </figure>

                            </div>

                            <!-- Thumbnails (required height:100px) -->
                            <div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured"
                                 data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}'>
                                <a class="thumbnail active" href="/front/images/demo/shop/products/1000x1500/p5.jpg">
                                    <img src="/front/images/demo/shop/products/100x100/p5.jpg" height="100" alt=""/>
                                </a>
                                <a class="thumbnail" href="/front/images/demo/shop/products/1000x1500/p6.jpg">
                                    <img src="/front/images/demo/shop/products/100x100/p6.jpg" height="100" alt=""/>
                                </a>
                                <a class="thumbnail" href="/front/images/demo/shop/products/1000x1500/p7.jpg">
                                    <img src="/front/images/demo/shop/products/100x100/p7.jpg" height="100" alt=""/>
                                </a>
                                <a class="thumbnail" href="/front/images/demo/shop/products/1000x1500/p8.jpg">
                                    <img src="/front/images/demo/shop/products/100x100/p8.jpg" height="100" alt=""/>
                                </a>
                                <a class="thumbnail" href="/front/images/demo/shop/products/1000x1500/p9.jpg">
                                    <img src="/front/images/demo/shop/products/100x100/p9.jpg" height="100" alt=""/>
                                </a>
                                <a class="thumbnail" href="/front/images/demo/shop/products/1000x1500/p10.jpg">
                                    <img src="/front/images/demo/shop/products/100x100/p10.jpg" height="100" alt=""/>
                                </a>
                                <a class="thumbnail" href="/front/images/demo/shop/products/1000x1500/p11.jpg">
                                    <img src="/front/images/demo/shop/products/100x100/p11.jpg" height="100" alt=""/>
                                </a>
                            </div>
                            <!-- /Thumbnails -->

                        </div>
                        <!-- /IMAGE -->

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
                        <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">نظرات (۲)</a></li>
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
                            <!-- REVIEW ITEM -->
                            <div class="block margin-bottom-60">

										<span class="user-avatar"><!-- user-avatar -->
											<img class="pull-left media-object" src="/front/images/avatar2.jpg"
                                                 width="64" height="64" alt="">
										</span>

                                <div class="media-body">
                                    <h4 class="media-heading size-14">
                                        John Doe &ndash;
                                        <span class="text-muted">June 29, 2014 - 11:23</span> &ndash;
                                        <span class="size-14 text-muted"><!-- stars -->
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </h4>

                                    <p>
                                        Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta.
                                        Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam
                                        et lacus neque.
                                    </p>

                                </div>

                            </div>
                            <!-- /REVIEW ITEM -->

                            <!-- REVIEW ITEM -->
                            <div class="block margin-bottom-60">

										<span class="user-avatar"><!-- user-avatar -->
											<img class="pull-left media-object" src="/front/images/avatar2.jpg"
                                                 width="64" height="64" alt="">
										</span>

                                <div class="media-body">
                                    <h4 class="media-heading size-14">
                                        John Doe &ndash;
                                        <span class="text-muted">June 29, 2014 - 11:23</span> &ndash;
                                        <span class="size-14 text-muted"><!-- stars -->
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </h4>

                                    <p>
                                        Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta.
                                        Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam
                                        et lacus neque.
                                    </p>

                                </div>

                            </div>
                            <!-- /REVIEW ITEM -->


                            <!-- REVIEW FORM -->
                            <h4 class="page-header margin-bottom-40">ADD A REVIEW</h4>
                            <form method="post" action="#" id="form">

                                <div class="row margin-bottom-10">

                                    <div class="col-md-6 margin-bottom-10">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" class="form-control"
                                               placeholder="Name *" maxlength="100" required="">
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Email -->
                                        <input type="email" name="email" id="email" class="form-control"
                                               placeholder="Email *" maxlength="100" required="">
                                    </div>

                                </div>

                                <!-- Comment -->
                                <div class="margin-bottom-30">
                                    <textarea name="text" id="text" class="form-control" rows="6" placeholder="Comment"
                                              maxlength="1000"></textarea>
                                </div>

                                <!-- Stars -->
                                <div class="product-star-vote clearfix">

                                    <label class="radio pull-left">
                                        <input type="radio" name="product-review-vote" value="1"/>
                                        <i></i> 1 Star
                                    </label>

                                    <label class="radio pull-left">
                                        <input type="radio" name="product-review-vote" value="2"/>
                                        <i></i> 2 Stars
                                    </label>

                                    <label class="radio pull-left">
                                        <input type="radio" name="product-review-vote" value="3"/>
                                        <i></i> 3 Stars
                                    </label>

                                    <label class="radio pull-left">
                                        <input type="radio" name="product-review-vote" value="4"/>
                                        <i></i> 4 Stars
                                    </label>

                                    <label class="radio pull-left">
                                        <input type="radio" name="product-review-vote" value="5"/>
                                        <i></i> 5 Stars
                                    </label>

                                </div>

                                <!-- Send Button -->
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Send Review
                                </button>

                            </form>
                            <!-- /REVIEW FORM -->

                        </div>
                    </div>


                    <hr class="margin-top-80 margin-bottom-80"/>


                    <h2 class="owl-featured"><strong>Related</strong> products:</h2>
                    <div class="owl-carousel featured nomargin owl-padding-10"
                         data-plugin-options='{"singleItem": false, "items": "4", "stopOnHover":false, "autoPlay":4500, "autoHeight": false, "navigation": true, "pagination": false}'>

                        <!-- item -->
                        <div class="shop-item nomargin">

                            <div class="thumbnail">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p13.jpg"
                                         alt="shop first image"/>
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p14.jpg"
                                         alt="shop hover image"/>
                                </a>
                                <!-- /product image(s) -->

                                <!-- product more info -->
                                <div class="shop-item-info">
                                    <span class="label label-success">NEW</span>
                                    <span class="label label-danger">SALE</span>
                                </div>
                                <!-- /product more info -->
                            </div>

                            <div class="shop-item-summary text-center">
                                <h2>Cotton 100% - Pink Shirt</h2>

                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->

                                <!-- price -->
                                <div class="shop-item-price">
                                    <span class="line-through">$98.00</span>
                                    $78.00
                                </div>
                                <!-- /price -->
                            </div>

                            <!-- buttons -->
                            <div class="shop-item-buttons text-center">
                                <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to
                                    Cart</a>
                            </div>
                            <!-- /buttons -->
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="shop-item nomargin">

                            <div class="thumbnail">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <!-- CAROUSEL -->
                                    <div class="owl-carousel owl-padding-0 nomargin"
                                         data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
                                        <img class="img-responsive"
                                             src="/front/images/demo/shop/products/300x450/p5.jpg" alt="">
                                        <img class="img-responsive"
                                             src="/front/images/demo/shop/products/300x450/p1.jpg" alt="">
                                    </div>
                                    <!-- /CAROUSEL -->
                                </a>
                                <!-- /product image(s) -->
                            </div>

                            <div class="shop-item-summary text-center">
                                <h2>Pink Dress 100% Cotton</h2>

                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->

                                <!-- price -->
                                <div class="shop-item-price">
                                    $44.00
                                </div>
                                <!-- /price -->
                            </div>

                            <!-- buttons -->
                            <div class="shop-item-buttons text-center">
                                <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to
                                    Cart</a>
                            </div>
                            <!-- /buttons -->
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="shop-item nomargin">

                            <div class="thumbnail">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p2.jpg"
                                         alt="shop first image"/>
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p12.jpg"
                                         alt="shop hover image"/>
                                </a>
                                <!-- /product image(s) -->

                                <!-- product more info -->
                                <div class="shop-item-info">
                                    <span class="label label-success">NEW</span>
                                    <span class="label label-danger">SALE</span>
                                </div>
                                <!-- /product more info -->
                            </div>

                            <div class="shop-item-summary text-center">
                                <h2>Black Fashion Hat</h2>

                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->

                                <!-- price -->
                                <div class="shop-item-price">
                                    <span class="line-through">$77.00</span>
                                    $65.00
                                </div>
                                <!-- /price -->
                            </div>

                            <!-- buttons -->
                            <div class="shop-item-buttons text-center">
                                <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to
                                    Cart</a>
                            </div>
                            <!-- /buttons -->
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="shop-item nomargin">

                            <div class="thumbnail">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p8.jpg"
                                         alt="shop first image"/>
                                </a>
                                <!-- /product image(s) -->

                                <!-- countdown -->
                                <div class="shop-item-counter">
                                    <div class="countdown" data-from="December 31, 2017 08:22:01"
                                         data-labels="years,months,weeks,days,hour,min,sec">
                                        <!-- Example Date From: December 31, 2018 15:03:26 --></div>
                                </div>
                                <!-- /countdown -->
                            </div>

                            <div class="shop-item-summary text-center">
                                <h2>Beach Black Lady Suit</h2>

                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->

                                <!-- price -->
                                <div class="shop-item-price">
                                    $56.00
                                </div>
                                <!-- /price -->
                            </div>

                            <!-- buttons -->
                            <div class="shop-item-buttons text-center">
                                <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to
                                    Cart</a>
                            </div>
                            <!-- /buttons -->
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="shop-item nomargin">

                            <div class="thumbnail">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p7.jpg"
                                         alt="shop first image"/>
                                </a>
                                <!-- /product image(s) -->
                            </div>

                            <div class="shop-item-summary text-center">
                                <h2>Town Dress - Black</h2>

                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->

                                <!-- price -->
                                <div class="shop-item-price">
                                    $154.00
                                </div>
                                <!-- /price -->
                            </div>

                            <!-- buttons -->
                            <div class="shop-item-buttons text-center">
                                <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to
                                    Cart</a>
                            </div>
                            <!-- /buttons -->
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="shop-item nomargin">

                            <div class="thumbnail">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p6.jpg"
                                         alt="shop first image"/>
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p14.jpg"
                                         alt="shop hover image"/>
                                </a>
                                <!-- /product image(s) -->
                            </div>

                            <div class="shop-item-summary text-center">
                                <h2>Chick Lady Fashion</h2>

                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->

                                <!-- price -->
                                <div class="shop-item-price">
                                    $167.00
                                </div>
                                <!-- /price -->
                            </div>

                            <!-- buttons -->
                            <div class="shop-item-buttons text-center">
                                <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to
                                    Cart</a>
                            </div>
                            <!-- /buttons -->
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="shop-item nomargin">

                            <div class="thumbnail">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p11.jpg"
                                         alt="shop hover image"/>
                                    <img class="img-responsive" src="/front/images/demo/shop/products/300x450/p3.jpg"
                                         alt="shop first image"/>
                                </a>
                                <!-- /product image(s) -->
                            </div>

                            <div class="shop-item-summary text-center">
                                <h2>Black Long Lady Shirt</h2>

                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-0 size-13"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->

                                <!-- price -->
                                <div class="shop-item-price">
                                    $128.00
                                </div>
                                <!-- /price -->
                            </div>

                            <!-- buttons -->
                            <div class="shop-item-buttons text-center">
                                <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to
                                    Cart</a>
                            </div>
                            <!-- /buttons -->
                        </div>
                        <!-- /item -->

                    </div>

                </div>


                <!-- RIGHT -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">

                    <!-- CATEGORIES -->
                    <div class="side-nav margin-bottom-60">

                        <div class="side-nav-head">
                            <button class="fa fa-bars"></button>
                            <h4>CATEGORIES</h4>
                        </div>

                        <ul class="list-group list-group-bordered list-group-noicon uppercase">
                            <li class="list-group-item active">
                                <a class="dropdown-toggle" href="#">WOMEN</a>
                                <ul>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(123)</span> Shoes &amp;
                                            Boots</a></li>
                                    <li class="active"><a href="#"><span
                                                class="size-11 text-muted pull-right">(331)</span> Top &amp; Blouses</a>
                                    </li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(234)</span> Dresses
                                            &amp; Skirts</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">MEN</a>
                                <ul>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Accessories</a>
                                    </li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(67)</span> Shoes &amp;
                                            Boots</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(32)</span> Dresses
                                            &amp; Skirts</a></li>
                                    <li class="active"><a href="#"><span
                                                class="size-11 text-muted pull-right">(78)</span> Top &amp; Blouses</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">JEWELLERY</a>
                                <ul>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(23)</span> Dresses
                                            &amp; Skirts</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(34)</span> Shoes &amp;
                                            Boots</a></li>
                                    <li class="active"><a href="#"><span
                                                class="size-11 text-muted pull-right">(21)</span> Top &amp; Blouses</a>
                                    </li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Accessories</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">KIDS</a>
                                <ul>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Shoes &amp;
                                            Boots</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(22)</span> Dresses
                                            &amp; Skirts</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(31)</span> Accessories</a>
                                    </li>
                                    <li class="active"><a href="#"><span
                                                class="size-11 text-muted pull-right">(18)</span> Top &amp; Blouses</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item"><a href="#"><span
                                        class="size-11 text-muted pull-right">(189)</span> ACCESSORIES</a></li>
                            <li class="list-group-item"><a href="#"><span
                                        class="size-11 text-muted pull-right">(61)</span> GLASSES</a></li>

                        </ul>

                    </div>
                    <!-- /CATEGORIES -->


                    <!-- BANNER ROTATOR -->
                    <div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center"
                         data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"fadeUp"}'>
                        <a href="#">
                            <img class="img-responsive" src="/front/images/demo/shop/banners/off_1.png" width="270"
                                 height="350" alt="">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="/front/images/demo/shop/banners/off_2.png" width="270"
                                 height="350" alt="">
                        </a>
                    </div>
                    <!-- /BANNER ROTATOR -->


                    <!-- FEATURED -->
                    <div class="margin-bottom-60">

                        <h2 class="owl-featured">FEATURED</h2>
                        <div class="owl-carousel featured"
                             data-plugin-options='{"singleItem": true, "stopOnHover":false, "autoPlay":false, "autoHeight": false, "navigation": true, "pagination": false}'>

                            <div><!-- SLIDE 1 -->
                                <ul class="list-unstyled nomargin nopadding text-left">

                                    <li class="clearfix"><!-- item -->
                                        <div class="thumbnail featured clearfix pull-left">
                                            <a href="#">
                                                <img src="/front/images/demo/shop/products/100x100/p10.jpg" width="80"
                                                     height="80" alt="featured item">
                                            </a>
                                        </div>

                                        <a class="block size-12" href="#">Long Grey Dress - Special</a>
                                        <div class="rating rating-4 size-13 width-100 text-left">
                                            <!-- rating-0 ... rating-5 --></div>
                                        <div class="size-18 text-left">$132.00</div>
                                    </li><!-- /item -->

                                    <li class="clearfix"><!-- item -->
                                        <div class="thumbnail featured clearfix pull-left">
                                            <a href="#">
                                                <img src="/front/images/demo/shop/products/100x100/p2.jpg" width="80"
                                                     height="80" alt="featured item">
                                            </a>
                                        </div>

                                        <a class="block size-1" href="#">Black Fashion Hat</a>
                                        <div class="rating rating-4 size-13 width-100 text-left">
                                            <!-- rating-0 ... rating-5 --></div>
                                        <div class="size-18 text-left">$65.00</div>
                                    </li><!-- /item -->

                                    <li class="clearfix"><!-- item -->
                                        <div class="thumbnail featured clearfix pull-left">
                                            <a href="#">
                                                <img src="/front/images/demo/shop/products/100x100/p13.jpg" width="80"
                                                     height="80" alt="featured item">
                                            </a>
                                        </div>

                                        <a class="block size-1" href="#">Cotton 100% - Pink Dress</a>
                                        <div class="rating rating-4 size-13 width-100 text-left">
                                            <!-- rating-0 ... rating-5 --></div>
                                        <div class="size-18 text-left">$77.00</div>
                                    </li><!-- /item -->

                                </ul>
                            </div><!-- /SLIDE 1 -->

                            <div><!-- SLIDE 2 -->
                                <ul class="list-unstyled nomargin nopadding text-left">

                                    <li class="clearfix"><!-- item -->
                                        <div class="thumbnail featured clearfix pull-left">
                                            <a href="#">
                                                <img src="/front/images/demo/shop/products/100x100/p12.jpg" width="80"
                                                     height="80" alt="featured item">
                                            </a>
                                        </div>

                                        <a class="block size-12" href="#">Long Grey Dress - Special</a>
                                        <div class="rating rating-4 size-13 width-100 text-left">
                                            <!-- rating-0 ... rating-5 --></div>
                                        <div class="size-18 text-left">$132.00</div>
                                    </li><!-- /item -->

                                    <li class="clearfix"><!-- item -->
                                        <div class="thumbnail featured clearfix pull-left">
                                            <a href="#">
                                                <img src="/front/images/demo/shop/products/100x100/p6.jpg" width="80"
                                                     height="80" alt="featured item">
                                            </a>
                                        </div>

                                        <a class="block size-1" href="#">Black Fashion Hat</a>
                                        <div class="rating rating-4 size-13 width-100 text-left">
                                            <!-- rating-0 ... rating-5 --></div>
                                        <div class="size-18 text-left">$65.00</div>
                                    </li><!-- /item -->

                                    <li class="clearfix"><!-- item -->
                                        <div class="thumbnail featured clearfix pull-left">
                                            <a href="#">
                                                <img src="/front/images/demo/shop/products/100x100/p14.jpg" width="80"
                                                     height="80" alt="featured item">
                                            </a>
                                        </div>

                                        <a class="block size-1" href="#">Cotton 100% - Pink Dress</a>
                                        <div class="rating rating-4 size-13 width-100 text-left">
                                            <!-- rating-0 ... rating-5 --></div>
                                        <div class="size-18 text-left">$77.00</div>
                                    </li><!-- /item -->

                                </ul>
                            </div><!-- /SLIDE 2 -->

                        </div>

                    </div>
                    <!-- /FEATURED -->


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
