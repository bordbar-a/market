<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->title}}</td>
    <td>{{optional($category->parent)->title}}</td>

    <td>
        <a href="{{route('admin.category.edit' , $category->id)}}" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> ویرایش </a>
        <a href="{{route('admin.category.delete' , $category->id)}}" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> حذف </a>
    </td>
{{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>
