<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Comment;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class CommentsController extends AdminBaseController
{


    public function all()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();

        return view('admin.comment.list', compact('comments'));
    }

    public function depending()
    {
        $comments = Comment::where('status', Comment::DEPENDING)->orderBy('created_at', 'desc')->get();
    }


    public function unApproved()
    {
        $comments = Comment::where('status', Comment::UNAPPROVED)->orderBy('created_at', 'desc')->get();
    }


    public function setApproved(Comment $comment)
    {
        $comment->update(['status' => Comment::APPROVED]);
        return back();
    }

    public function setUnApproved(Comment $comment)
    {
        $comment->update(['status' => Comment::UNAPPROVED]);
        return back();
    }

    public function setDepending(Comment $comment)
    {
        $comment->update(['status' => Comment::DEPENDING]);
        return back();
    }
}
