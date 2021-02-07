<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $comment = new Comment;
        $comment->content = request()->contents;
        $comment->article_id = request()->article_id;
        $comment->save();

        return back();
    }

    public function delete($id): Http\RedirectResponse
    {
        $comment = Comment::find($id);
        $comment->delete();

        return back();
    }
}
