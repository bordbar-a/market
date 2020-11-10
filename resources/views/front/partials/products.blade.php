<section class="nopadding-bottom">
    <div class="container">

        <div class="row">

            <div class="col-sm-9 col-sm-push-3">

                <h1 class="size-17 margin-bottom-20">محصولات</h1>

                <ul class="shop-item-list row list-inline nomargin">


                @foreach($products as $product)
                    <!-- ITEM -->
                        <li class="col-lg-3 col-sm-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-responsive"
                                             src="/front/images/demo/shop/products/300x450/p13.jpg"
                                             alt="shop first image"/>
                                        <img class="img-responsive"
                                             src="/front/images/demo/shop/products/300x450/p14.jpg"
                                             alt="shop hover image"/>
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over">
                                        <!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-default add-wishlist" href="#" data-item-id="1"
                                           data-toggle="tooltip" title="پسندیدن"><i
                                                class="fa fa-heart nopadding"></i></a>
                                        <a class="btn btn-default add-compare" href="#" data-item-id="1"
                                           data-toggle="tooltip" title="مقایسه"><i class="fa fa-bar-chart-o nopadding"
                                                                                   data-toggle="tooltip"></i></a>
                                        <a class="btn btn-default" href="{{route('front.basket.add' , [$product->id])}}"><i
                                                class="fa fa-cart-plus size-20"></i></a>
                                    </div>
                                    <!-- /hover buttons -->

                                    <!-- product more info -->
                                    <div class="shop-item-info">
                                        <span class="label label-success">جدید</span>
                                        <span class="label label-danger">حراج</span>
                                    </div>
                                    <!-- /product more info -->
                                </div>

                                <div class="shop-item-summary text-center">
                                    <h2>{{$product->title}}</h2>

                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        <span class="line-through">{{$product->price}}</span>
                                        {{$product->present()->getFinalPrice()}}
                                    </div>
                                    <!-- /price -->
                                </div>

                            </div>

                        </li>
                        <!-- /ITEM -->
                    @endforeach
                </ul>


            </div>

            <div class="col-sm-3 col-sm-pull-9">

                <!-- CATEGORIES -->
                <div class="side-nav margin-bottom-60">

                    <div class="side-nav-head">
                        <button class="fa fa-bars"></button>
                        <h4>دسته بندی ها</h4>
                    </div>

                    <ul class="list-group list-group-bordered list-group-noicon uppercase">
                        <li class="list-group-item active">
                            <a class="dropdown-toggle" href="#">پوشاک بانوان</a>
                            <ul>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(123)</span> تیشرت و
                                        پولوشرت</a></li>
                                <li class="active"><a href="#"><span
                                            class="size-11 text-muted pull-right">(331)</span> پوشاک ورزشی</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(234)</span> ژاکت و لباس
                                        گرم</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(234)</span> کیف و
                                        کفش</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a class="dropdown-toggle" href="#">پوشاک آقایان</a>
                            <ul>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> تیشرت و
                                        پولوشرت</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(67)</span> پوشاک ورزشی</a>
                                </li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(32)</span> ژاکت و لباس
                                        گرم</a></li>
                                <li class="active"><a href="#"><span
                                            class="size-11 text-muted pull-right">(78)</span> کیف و کفش</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a class="dropdown-toggle" href="#">پوشاک کودکان</a>
                            <ul>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(23)</span> تیشرت و
                                        پولوشرت</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(34)</span> پوشاک ورزشی</a>
                                </li>
                                <li class="active"><a href="#"><span
                                            class="size-11 text-muted pull-right">(21)</span> ژاکت و لباس گرم</a>
                                </li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> کیف و
                                        کفش</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a class="dropdown-toggle" href="#">لوازم الکتریکی</a>
                            <ul>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> موبایل</a>
                                </li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(22)</span> لپ تاپ</a>
                                </li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(31)</span> کنسول
                                        بازی</a></li>
                                <li class="active"><a href="#"><span
                                            class="size-11 text-muted pull-right">(18)</span> لوازم خانگی</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item"><a href="#"><span
                                    class="size-11 text-muted pull-right">(189)</span> لوازم جانبی</a></li>
                        <li class="list-group-item"><a href="#"><span
                                    class="size-11 text-muted pull-right">(61)</span> انواع عینک</a></li>

                    </ul>

                </div>
                <!-- /CATEGORIES -->

                <!-- BRANDS -->
                <div class="side-nav margin-bottom-60">

                    <div class="side-nav-head">
                        <button class="fa fa-bars"></button>
                        <h4>برندهای محصولات</h4>
                    </div>

                    <ul class="list-group list-unstyled">
                        <li class="list-group-item"><a href="#"><span
                                    class="size-11 text-muted pull-right">(21)</span> نایک</a></li>
                        <li class="list-group-item"><a href="#"><span
                                    class="size-11 text-muted pull-right">(44)</span> آدیداس</a></li>
                        <li class="list-group-item"><a href="#"><span
                                    class="size-11 text-muted pull-right">(2)</span> کت - CAT</a></li>
                        <li class="list-group-item"><a href="#"><span
                                    class="size-11 text-muted pull-right">(18)</span> بی ام و</a></li>
                        <li class="list-group-item"><a href="#"><span
                                    class="size-11 text-muted pull-right">(87)</span> آئودی</a></li>
                        <li class="list-group-item"><a href="#"><span
                                    class="size-11 text-muted pull-right">(32)</span> اپل</a></li>
                        <li class="list-group-item"><a href="#"><span
                                    class="size-11 text-muted pull-right">(69)</span> سامسونگ</a></li>
                    </ul>

                </div>
                <!-- BRANDS -->


                <!-- BANNER ROTATOR -->
                <div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center"
                     data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"goDown"}'>
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


                <!-- FREE RETURNS -->
                <div class="margin-bottom-60">
                    <h4>ارسال رایگان محصولات</h4>
                    <p class="nomargin">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان گرافیک است.</p>
                    <a href="#">شرایط و ضوابط &raquo;</a>
                </div>
                <!-- /FREE RETURNS -->

            </div>

        </div>

    </div>
</section>
