<tr>
    <td>{{$order->id}}</td>
    <td>{{$order->price}}</td>
    <td>{{$order->present()->getCreatedAt}}</td>
    <td>{{$order->present()->getUpdatedAt}}</td>
    <td>{{$order->ref_number}}</td>
    <td>{!! $order->present()->getStatus !!}</td>

    <td>
        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit </a>
        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete </a>
    </td>
    {{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>
