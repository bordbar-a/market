<?php
$items = $data[0];
$items_count = $data[1];
$total_price = $data[2];
?>
<li class="quick-cart">
    <a href="#">
        <span class="badge badge-aqua btn-xs badge-corner">{{$items_count}}</span>
        <i class="fa fa-shopping-cart"></i>
    </a>
    <div class="quick-cart-box">
        <h4>سبد خرید   <a href="{{route('front.basket.reset')}}" class="btn btn-danger btn-xs pull-right">خالی کردن سبد</a></h4>

        <div class="quick-cart-wrapper">

            @foreach($items as $id => $item)
                <a href="#"><!-- cart item -->
                    <img src="/front/images/demo/people/300x300/4-min.jpg" width="45" height="45"
                         alt=""/>
                    <h6><span>{{$item['count']}} عدد </span>{{$item['title']}}</h6>
                    <small>{{$item['price']}} هزار تومان </small>
                </a><!-- /cart item -->
            @endforeach

        <!-- cart no items example -->

            @if(!$items_count)
                <a class="text-center" href="#">
                    <h6>سبد شما خالی است</h6>
                </a>
            @endif

        </div>

        <!-- quick cart footer -->
        <div class="quick-cart-footer clearfix">
            <a href="#" class="btn btn-success btn-xs pull-right">تکمیل خرید</a>
            <span class="pull-left"><strong>جمعا :</strong> {{$total_price}}</span>
        </div>
        <!-- /quick cart footer -->

    </div>
</li>
