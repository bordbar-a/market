<footer id="footer">
    <div class="container">

        <div class="row margin-top-60 margin-bottom-40 size-13">

            <!-- col #1 -->
            <div class="col-md-4 col-sm-4">

                <!-- Footer Logo -->
                <img class="footer-logo" src="/front/images/logo-footer.png" alt=""/>

                <p>{{getSetting('description_in_footer')}}</p>

                <h2>{{getSetting('phone_number')}}</h2>

                <!-- Social Icons -->
                <div class="clearfix">

                    <a href="{{getSetting('facebook_address')}}"
                       class="social-icon social-icon-sm social-icon-border social-facebook pull-left"
                       data-toggle="tooltip" data-placement="top" title="فیسبوک">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="{{getSetting('twitter_address')}}"
                       class="social-icon social-icon-sm social-icon-border social-twitter pull-left"
                       data-toggle="tooltip" data-placement="top" title="توئیتر">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="{{getSetting('googleplus_address')}}"
                       class="social-icon social-icon-sm social-icon-border social-gplus pull-left"
                       data-toggle="tooltip" data-placement="top" title="گوگل پلاس">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="{{getSetting('linkedin_address')}}"
                       class="social-icon social-icon-sm social-icon-border social-linkedin pull-left"
                       data-toggle="tooltip" data-placement="top" title="لینکداین">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>

                    <a href="{{getSetting('rss')}}"
                       class="social-icon social-icon-sm social-icon-border social-rss pull-left"
                       data-toggle="tooltip" data-placement="top" title="Rss">
                        <i class="icon-rss"></i>
                        <i class="icon-rss"></i>
                    </a>

                </div>
                <!-- /Social Icons -->

            </div>
            <!-- /col #1 -->

            <!-- col #2 -->
            <div class="col-md-8 col-sm-8">

                <div class="row">

                    <div class="col-md-5 hidden-sm hidden-xs">
                        <h4 class="letter-spacing-1">آخرین محصولات</h4>
                        <ul class="list-unstyled footer-list half-paddings">
                            @foreach($data['products'] as $product)
                                <li>
                                    <a class="block" href="{{route('front.product.item',$product->id)}}">{{$product->title}}</a>
                                    <small>{{$product->present()->getUpdatedAtInFooter()}}</small>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-md-3 hidden-sm hidden-xs">
                        <h4 class="letter-spacing-1">دسترسی سریع</h4>
                        <ul class="list-unstyled footer-list half-paddings noborder">
                            <li><a class="block" href="#"><i class="fa fa-angle-right"></i> درباره ما</a></li>
                            <li><a class="block" href="#"><i class="fa fa-angle-right"></i> شعبه های فروشگاه</a>
                            </li>
                            <li><a class="block" href="#"><i class="fa fa-angle-right"></i> پرسنل فروشگاه</a></li>
                            <li><a class="block" href="#"><i class="fa fa-angle-right"></i> تماس با ما</a></li>
                            <li><a class="block" href="#"><i class="fa fa-angle-right"></i> جشنواره ها</a></li>
                            <li><a class="block" href="#"><i class="fa fa-angle-right"></i> گالری تصاویر</a></li>
                            <li><a class="block" href="#"><i class="fa fa-angle-right"></i> فروش ویژه</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4 class="letter-spacing-1">پرداخت امن</h4>
                        <p>ما از برترین درگاه های بانکی کشور و دنیا استفاده میکنیم ، پس از بابت حفظ امنیت اطلاعات ،
                            خیالتان راحت باشد.</p>
                        <p>    <!-- see assets/images/cc/ for more icons -->
                            <img src="/front/images/cc/Visa.png" alt=""/>
                            <img src="/front/images/cc/Mastercard.png" alt=""/>
                            <img src="/front/images/cc/Maestro.png" alt=""/>
                            <img src="/front/images/cc/PayPal.png" alt=""/>
                        </p>
                    </div>

                </div>

            </div>
            <!-- /col #2 -->

        </div>

    </div>

    <div class="copyright">
        <div class="container">
            <ul class="pull-right nomargin list-inline mobile-block">
                <li><a href="#">قوانین و شرایط استفاده</a></li>
                <li>&bull;</li>
                <li><a href="#">حریم خصوصی</a></li>
            </ul>
            {!! getSetting('footer_copyright') !!}
        </div>
    </div>

</footer>
