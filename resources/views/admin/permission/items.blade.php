<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->persian_name}}</td>


    <td>
{{--        todo
            link haye zir dorost beshe
    --}}
        <a href="{{route('admin.permission.users' , $item->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit white"></i><span>{{$item->users_count}}</span> - کاربران این دسترسی </a>
        <a href="{{route('admin.permission.roles' , $item->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-times white"></i><span>{{$item->roles_count}}</span> - نقش‌های این دسترسی </a>
    </td>
{{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>

