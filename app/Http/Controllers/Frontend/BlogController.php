<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function storeCommemt(Request $request)
    {
        $request->validate([
            'comment' => ['required']
        ]);

        $comment = new BlogComment();
        $comment->blog_id = $request->blog_id;
        $comment->user_id = optional(auth()->user())->id;
        $comment->name = $request->name;
        $comment->phone = $request->phone;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->status = 0;
        $comment->save();

        return redirect()->back()->with('success', 'Message has been sent successfully!');
    }
}
