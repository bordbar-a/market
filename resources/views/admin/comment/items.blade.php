<tr>
    <td>{{$comment->title}}</td>
    <td>{{$comment->name}}</td>
    <td>{{$comment->present()->getContent()}}</td>
    <td>{{$comment->present()->getCreatedAt()}}</td>
    <td>{!!  $comment->present()->getStatus()!!}</td>

    <td>
        <a href="{{route('admin.comment.set.unapproved', $comment->id)}}" class="comment-fa-icon"><i
                class="fa fa-2x fa-ban color-red "></i></a>
        <a href="{{route('admin.comment.set.approved', $comment->id)}}" class="comment-fa-icon"><i
                class="fa fa-2x fa-check-circle color-green"></i></a>
        <a href="{{route('admin.comment.set.depending', $comment->id)}}" class="comment-fa-icon"><i
                class="fa fa-2x fa-clock-o color-orange"></i></a>
    </td>
    {{--    <td><span class="label label-success">Approved </span></td>--}}
</tr>
