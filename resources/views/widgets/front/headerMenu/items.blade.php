@if($all_items->has($item->id))
    <li class="dropdown"><!-- HOME -->
        @include('widgets.front.headerMenu.child' , ['item'=>$item , 'all_items'=>$all_items])
    </li>

@else
    <li><a href="{{$item->url}}">{{$item->title}}</a></li>
@endif




