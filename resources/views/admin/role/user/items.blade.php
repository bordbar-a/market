<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->present()->fullname}}</td>
    <td>{{$item->email}}</td>


    <td>
{{--        todo
            link haye zir dorost beshe
    --}}
        <a href="{{route('admin.role.user.delete' , [$role->id ,$item->id])}}" class="btn btn-danger btn-xs "><i class="fa fa-remove"></i>از کاربر گرفته شود</a>
    </td>

</tr>

