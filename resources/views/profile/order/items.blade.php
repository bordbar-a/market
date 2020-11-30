<tr>
    <td>{{$order->id}}</td>
    <td>{{$order->price}}</td>
    <td>{{$order->present()->getCreatedAt}}</td>
    <td>{{$order->present()->getUpdatedAt}}</td>
    <td>{{$order->ref_number}}</td>
    <td>{!! $order->present()->getStatus !!}</td>

    <td>
        <a href="{{route('profile.order.products' ,[$order->id])}}" class="btn btn-info btn-xs"><i class="fa fa-info white"></i>جزئیات</a>
        <a href="{{route('profile.order.delete' ,[$order->id])}}" class="btn btn-danger btn-xs"><i class="fa fa-times white"></i> حذف </a>
    </td>
    {{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>

