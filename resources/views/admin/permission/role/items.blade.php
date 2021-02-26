<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->persian_name}}</td>

    <td>
{{--        todo
            link haye zir dorost beshe
    --}}
        <a href="{{route('admin.permission.role.delete' , [$permission->id ,$item->id])}}" class="btn btn-danger btn-xs "><i class="fa fa-remove"></i>از نقش گرفته شود</a>
    </td>

</tr>

