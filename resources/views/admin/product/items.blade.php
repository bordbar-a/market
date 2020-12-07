<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->title}}</td>
    <td>{{$product->present()->getShortDescription}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->discount}}</td>
    <td>{{$product->sell_count}}</td>
    <td>{{$product->present()->getCreatedAt}}</td>
    <td>{{$product->present()->getUpdatedAt}}</td>


    <td>
        <a href="{{route('admin.product.edit' , $product->id)}}" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> ویرایش </a>
        <a href="{{route('admin.product.delete' , $product->id)}}" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> حذف </a>
    </td>
{{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>

