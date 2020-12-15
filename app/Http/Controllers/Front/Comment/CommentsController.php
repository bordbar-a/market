<?php

namespace App\Http\Controllers\Front\Comment;

use App\Http\Controllers\Front\FrontBaseController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentsController extends FrontBaseController
{



    public function productCreate(Request $request, Product $product)
    {
        $request->validate([
            'name'=>'filled'
        ]);
        $product->comments()->create([
            'title' => $request->get('title'),
            'name' => Auth::check() ? Auth::user()->first_name : $request->get('name'),
            'content' => $request->get('content'),
            'user_id' => Auth::check() ? Auth::user()->id : 0,
            'ip' => $request->ip(),
        ]);
        return back();
    }
}
