<section class="padding-top-40">
    <div class="container">

        <!-- OWL SLIDER -->
        <div class="owl-carousel buttons-autohide controlls-over nomargin"
             data-plugin-options='{"items": 1, "autoHeight": false, "navigation": true, "pagination": false, "transitionStyle":"fade", "progressBar":"true"}'>

{{--            <div>--}}
{{--                <img class="img-responsive" src="/front/images/demo/shop/banners/home_slider_2.jpg" alt="">--}}
{{--            </div>--}}
            @foreach($slider->items as $item)
            <a href="{{$item->url}}">
                <img class="img-responsive" src="{{asset('storage/sliderImages/'. $slider->id.'/'. $item->image->name)}}" alt="">
            </a>

                @endforeach
        </div>
        <!-- /OWL SLIDER -->


    </div>
</section>
