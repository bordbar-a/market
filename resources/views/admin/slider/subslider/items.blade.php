<li class="dd-item dd3-item" data-id="{{$item->id}}">
    <div class="dd-handle dd3-handle">
    </div>
    <div class="dd3-content">
        {{$item->title}}
        <a href="{{route('admin.slider.sliderItemDownload' , $item->id)}}" class="itemIcon"><i class="fa fa-download"></i></a>
        <a href="{{route('admin.slider.sliderItemDelete' , $item->id)}}" class="itemIcon"><i class="fa fa-trash color-red"></i></a>
    </div>
</li>
