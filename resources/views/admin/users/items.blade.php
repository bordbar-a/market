<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->first_name}}</td>
    <td>{{$user->last_name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->mobile}}</td>
    <td>{!! $user->present()->getStatus !!}</td>
    <td>{{$user->present()->getRole}}</td>
    <td>
        <a href="{{route('admin.user.edit' , $user->id)}}" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit </a>
        <a href="{{route('admin.user.delete' , $user->id)}}" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete </a>
    </td>
{{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>
