@if(!is_null($products))
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
                                    <a class="shop-item-image" href="{{route('front.product.item' , [$product->id])}}">
                                        @if(count($product->pictures))
                                            <img class="img-responsive"
                                                 src="{{asset('/storage/productImages/' . $product->id . '/' . $product->pictures[0]->name )}}"
                                                 alt="shop first image" width="300" height="600"/>
                                        @else
                                            <img class="img-responsive"
                                                 src="https://via.placeholder.com/300"
                                                 alt="shop hover image"/>
                                        @endif
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
                                        <a class="btn btn-default"
                                           href="{{route('front.basket.add' , [$product->id])}}"><i
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
                @widget('Front\Categories\Category')
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
@endif
