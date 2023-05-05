<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use App\Models\User;
use App\Models\Group;
use App\Models\Comment;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        $profile = auth()->user()->profile;
        
        $posts = Post::all();
        $users = User::all();
        $profiles = Profile::all();

        return view('Books.book-page')
        ->with(['posts' => $posts , 'users'=>$users ,$profile => 'profile' , 'profiles' => $profiles]);
    }
    public function show($id)
    {
        try {
            $post = Post::findOrFail($id);
            return response()->json($post);
        } catch (\Throwable $th) {
            return response()->json('Post not found');
        }
        
    }
    public function store(Request $request , Group $group)
    {

        $request->validate([
            'content' => 'required',
        ]);

        $post = new Post();
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        $post->group_id = $group->id;
        $post->save();

        // return redirect()->route('posts.index');
        return redirect()->back();
    }
    public function update(Request $request , $post)
    {
        $request->validate([
            'content' => 'required',
        ]);
        $post = Post::find($post);
        $post->content = $request->content;
        $post->save();
        return redirect()->route('posts.index');
        
    }

    public function destroy($post)
    {
        $post = Post::find($post) ; 
        $post->delete();
        return redirect()->back();

    }
    public function like($post)
    {
        try {
            $posts = Post::findOrFail($post);
            $user = auth()->user();
            $group = Group::findOrFail($posts->group_id);
            if (!$group->users->contains($user->id)) {
                // return response()->json(['data' => 'You are not in this group'], 403);
                return redirect()->back()->with('errors', 'You are not in this group');
            }
            if (!$posts->likes()->where('user_id', $user->id)->exists()) {
                $posts->likes()->create([
                    'user_id' => $user->id,
                ]);
                $posts->increment('likes_count');
                return redirect()->back();
                
            }else{
                $posts->likes()->where('user_id', $user->id)->delete();
                $posts->decrement('likes_count');
                return redirect()->back();
                }
                
        } catch (\Throwable $th) {
            // return response()->json('The post has not been liked');
            return redirect()->back()->with('errors', 'The post has not been liked');
        }
  
    }

    
}
