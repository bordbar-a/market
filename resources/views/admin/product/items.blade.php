<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->title}}</td>
    <td>{{$product->present()->getShortDescription}}</td>
    <td>{{$product->present()->price}}</td>
    <td>{!! $product->present()->getStatus !!}</td>
    <td>{{$product->sell_count}}</td>
    <td>{{$product->present()->getCreatedAt}}</td>
    <td>{{$product->present()->getUpdatedAt}}</td>


    <td>
        <a href="{{route('admin.product.edit' , $product->id)}}" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> ویرایش </a>
        <a href="{{route('front.product.item' , $product->id)}}" target="_blank" class="btn btn-info btn-xs"><i class="fa fa-desktop white"></i> نمایش </a>
        <a href="{{route('admin.product.delete' , $product->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-times white"></i> حذف </a>
    </td>
{{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>

