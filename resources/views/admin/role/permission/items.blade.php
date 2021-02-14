<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->persian_name}}</td>


    <td>
{{--        todo
            link haye zir dorost beshe
    --}}
        <a href="{{route('admin.role.deletePermission' , [$role->id ,$item->id])}}" class="btn btn-danger btn-xs "><i class="fa fa-remove"></i>حذف از این نقش</a>
    </td>
{{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>

