<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function store(Request $request,Post $post){
        $request->validate([
            'message'=> 'required|min:3|max:500'
        ]);
        Gate::authorize('add-comment');
        $comment =new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $post->id;
        $comment->message = $request->message;
        $comment->save();
        return back()->with('success','Comment submitted successfully');
        
    }
    public function destroy(comment $comment){
        Gate::authorize('delete-comment', $comment);
        $comment->delete();
        return back()->with('success','Comment deleted successfully');
    }
}
