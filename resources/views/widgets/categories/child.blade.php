@if(array_key_exists($category['id'] , $categories) && $deep<3)
    <a class="dropdown-toggle" href="#">{{$category['title']}}</a>
    <ul>
        @foreach($categories[$category['id']] as $item)
            @if(array_key_exists($item['id'] , $categories))
                @include('widgets.categories.items' , ['category'=>$item,'categories'=>$categories,'deep'=>++$deep])
            @else
                @include('widgets.categories.items' , ['category'=>$item,'categories'=>$categories])
            @endif
        @endforeach
    </ul>

@else
    <li class="list-group-item"><a href="#"><span
                class="size-11 text-muted pull-right">({{$category['products_count']}})</span>{{$category['title']}}</a></li>
@endif
