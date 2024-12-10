<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view("admin.pages.posts.index",compact("posts"));
    }
    public function create(){
        return view('admin.pages.posts.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255']
        ]);
        Post::create($request->all());
        return redirect()->route('admin.post')->with('success', 'Post created successfully.');
    }
    public function delete(post $post){
         $post->delete();
         return to_route('admin.post')->with('success', 'post deleted successfully.');
    }
    public function update($id,Request $request){
        $post = Post::findorfail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('admin.post')->with('success', 'Post Updated successfully.');
    }
    public function edit($id){
        $post = Post::findorfail($id);
        return view('admin.pages.posts.edit',['post' => $post]);
    }
}
