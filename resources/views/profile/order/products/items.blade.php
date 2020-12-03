<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->title}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->pivot->count}}</td>
    <td>{{$product->pivot->discount}}</td>
    <td>{{$product->pivot->final_price}}</td>

    {{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>


