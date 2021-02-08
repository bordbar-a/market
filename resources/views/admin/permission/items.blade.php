<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->persian_name}}</td>


    <td>
{{--        todo
            link haye zir dorost beshe
    --}}
        <a href="{{route('admin.product.edit' , $item->id)}}" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i>کاربران این دسترسی </a>
        <a href="{{route('admin.product.delete' , $item->id)}}" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> نقش‌های این دسترسی </a>
    </td>
{{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>

