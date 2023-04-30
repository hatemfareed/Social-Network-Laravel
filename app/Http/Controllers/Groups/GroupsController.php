<?php

namespace App\Http\Controllers\Groups;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;

class GroupsController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('Groups.index')
        ->with('groups' , $groups);
    }
    public function show(Group $group)
    {
        $posts = $group->posts;
        $users = $group->users;
        return view('Books.book-page')
        ->with(['posts' => $posts , 'users'=>$users , 'group'=>$group]);   
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:1024',
            'description' => 'required|max:1024',
            'image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->move(public_path('images'), $fileNameToStore);
        } else {
            $fileNameToStore = $request->file('image');
        }

        $group = new Group;
        
        $group->name = $request->input('name');
        $group->description = $request->input('description');
        $group->image = $fileNameToStore;
        $group->save();
        $this->join($request, $group->id , 'admin') ;

        $groups = Group::all();

        return redirect('show')->with('groups', $groups) ;

    }
    public function join(Request $request, $group , $role = null)
    {
        try {
            
            $group = Group::findOrFail($group);
            $user = auth()->user();
            if ($group->users->contains($user->id)) {
                return response()->json(['data' => 'You are already in this group'], 403);
            }
            $groupUser = new GroupUser();
            $groupUser->user_id = $user->id;
            $groupUser->group_id = $group->id;
            if (!$role) {
                $groupUser->group_user_role = 'member';
            }else{
                $groupUser->group_user_role = $role;
            }
            $groupUser->save();
            // return response()->json(['data' => 'You have joined the group'], 200);
            return redirect()->back();
        }
        catch (\Throwable $th) {
            // return response()->json(['data' => 'Group not found'], 404);
            return $th ;
        }
        
    }
    public function leave(Request $request, $group)
    {
        try {
            $group = Group::findOrFail($group);
            $user = auth()->user();
            $groupUser = GroupUser::where('user_id', $user->id)->where('group_id', $group->id)->first();
            if (!$groupUser) {
                return response()->json(['data' => 'You are not in this group'], 403);
            }
            $groupUser->delete();

            // deleting the group if the admin leaves it
            if($groupUser->group_user_role == 'admin'){
                $group->delete();
            }

            //deleting the posts of the user if he leaves the group
            $posts = $group->posts;
            foreach ($posts as $post) {
                if($post->user_id == $user->id){
                    $post->delete();
                }
            }
            // deleting the comments and likes of the user if he leaves the group
            $comments = $posts->load('comments')->pluck('comments')->collapse()->where('user_id', $user->id);
            foreach ($comments as $comment) {
                $comment->delete();
            }
            $likes = $posts->load('likes')->pluck('likes')->collapse()->where('user_id', $user->id);
            foreach ($likes as $like) {
                $like->delete();
            }
            // return response()->json($likes, 200);
            return redirect()->back();
        }
        catch (\Throwable $th) {
            return response()->json(['data' => "errors"], 404);
        }
        
    }

    public function member (Group $group)
    {
        $users = $group->users;
        $group_users = GroupUser::where('group_id', $group->id)->get();
        $members = $group_users->where('group_user_role', 'member');
        $members_name = [];
        foreach ($members as $member) {
            $member_name = User::where('id' , $member->user_id)->first();
            array_push($members_name , $member_name);
        }
        $admins = $group_users->where('group_user_role', 'admin');
        $admins_name = [];
        foreach ($admins as $admin) {
            $admin_name = User::where('id' , $admin->user_id)->first();
            array_push($admins_name , $admin_name);
        }
        $number_of_users = $group->users->count();

        // return response()->json(['data' => $admins_name], 202);

        return view('books.book-member')
        ->with(['admins_name' => $admins_name , 'group' => $group , 'members_name' => $members_name , 'number_of_users'=>$number_of_users ]);
        
    }
    public function about(Group $group)
    {
        $group_users = GroupUser::where('group_id', $group->id)->get();

        $admins = $group_users->where('group_user_role', 'admin');
        $admins_name = [];
        foreach ($admins as $admin) {
            $admin_name = User::where('id' , $admin->user_id)->first();
            array_push($admins_name , $admin_name);
        }
        $number_of_members = $group->users->count();
        $users = $group->users;
        return view('books.book-about')
        ->with(['group' => $group , 'users' => $users , 'admins_name'=>$admins_name , 'members'=>$number_of_members]);
    }
}
