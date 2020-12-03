<tr>
    <td>{{ ($orders->currentPage() - 1) * $orders->perPage() + $loop->iteration}}</td>
    <td><a href="{{route('admin.user.edit' ,[$order->user_id])}}">{{$order->present()->getOrderOwner}}</a></td>
    <td>{{$order->ref_number}}</td>
    <td>{{$order->present()->getPrice()}}</td>
    <td>{!! $order->present()->getStatus  !!}</td>
    <td>{{$order->updated_at}}</td>


    <td>
        <a href="{{route('admin.order.details' , $order->id)}}" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i>جزئیات محصولات</a>
        <a href="" class="btn btn-danger btn-xs"><i class="fa fa-times white"></i> حذف </a>
    </td>
    {{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>

