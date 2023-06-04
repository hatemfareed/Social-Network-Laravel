<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store (Request $request , $post)
    {
        
            $validatedData = $request->validate([
                'content' => 'required',
            ]);
            $comment = new Comment($validatedData); 
            $comment->user_id = Auth::user()->id;
            $comment->post_id = $post;
            $comment->save();
            return redirect()->back();
        
    }
    public function destroy($post, $comment)
    {
        $comment = Comment::find($comment);
        $comment->delete();
        return redirect()->back();
    }
}
