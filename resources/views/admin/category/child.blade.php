<li class="dd-item dd3-item" data-id="{{$item->id}}">
    <div class="dd-handle dd3-handle">
    </div>
    <div class="dd3-content">
        {{$item->title}}
        <a href="{{route('admin.category.edit' , $item->id)}}" class="itemIcon"><i class="fa fa-gear"></i></a>
        <a href="{{route('admin.category.delete' , $item->id)}}" class="itemIcon"><i class="fa fa-trash color-red"></i></a>
    </div>
    @if($all_items->has($item->id))
        <ol class="dd-list">
            @foreach($all_items->get($item->id) as $subItem)
                @include('admin.category.items' , ['all_items'=>$all_items , 'item'=>$subItem])
            @endforeach
        </ol>

    @endif
</li>
