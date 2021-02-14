<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->persian_name}}</td>


    <td>
{{--        todo
            link haye zir dorost beshe
    --}}
        <a href="{{route('admin.role.users' , $item->id)}}" class="btn btn-info btn-xs"><i class="fa fa-user white"></i>کاربران این نقش </a>
        <a href="{{route('admin.role.permissions' , $item->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-desktop white"></i> دسترسی‌های این نقش </a>
        <a href="{{route('admin.role.edit' , $item->id)}}" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i>ویرایش</a>
        <a href="{{route('admin.role.delete' , $item->id)}}" class="btn btn-danger btn-xs "><i class="fa fa-remove"></i>حذف</a>
    </td>
{{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>

