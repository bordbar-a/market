<?php

$items_count = $data[0];
if ($items_count) {
    $items = $data[1];
    $total_price = $data[2];
}

?>
<li class="quick-cart">
    <a href="#">
        <span class="badge badge-aqua btn-xs badge-corner">{{$items_count}}</span>
        <i class="fa fa-shopping-cart"></i>
    </a>
    <div class="quick-cart-box">
        <h4>سبد خرید <a href="{{route('front.basket.reset')}}" class="btn btn-danger btn-xs pull-right">خالی کردن
                سبد</a></h4>

        <div class="quick-cart-wrapper">

            @if($items_count)
                @foreach($items as $id => $item)
                    <a href="#"><!-- cart item -->
                        <img src="/front/images/demo/people/300x300/4-min.jpg" width="45" height="45"
                             alt=""/>
                        <h6><span>{{$item['count']}} عدد </span>{{$item['title']}}</h6>
                        <small>{{\App\Helpers\Number\Number::numberSeparator($item['price'])}} ریال </small>
                    </a><!-- /cart item -->
                @endforeach
            @endif
        <!-- cart no items example -->

            @if(!$items_count)
                <a class="text-center" href="#">
                    <h6>سبد شما خالی است</h6>
                </a>
            @endif

        </div>

        <!-- quick cart footer -->
        @if($items_count)
            <div class="quick-cart-footer clearfix">
                <a href="#" class="btn btn-success btn-xs pull-right">تکمیل خرید</a>
                <span class="pull-left"><strong>جمعا :</strong> {{$total_price}}</span>
            </div>
    @endif
    <!-- /quick cart footer -->

    </div>
</li>
