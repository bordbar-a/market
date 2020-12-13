<a class="dropdown-toggle" href="#">
    {{$item->title}}
</a>

<ul class="dropdown-menu">
    @foreach($all_items[$item->id] as $item)
        @include('widgets.front.headerMenu.items' , ['item'=>$item , 'all_items'=>$all_items])
    @endforeach
</ul>
