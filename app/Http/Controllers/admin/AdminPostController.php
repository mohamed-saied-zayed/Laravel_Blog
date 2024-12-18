<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPostController extends Controller
{
    public function index(){
        $posts = post::with('user')->orderby('id','DESC')->paginate(10);
        return view("admin.pages.posts.index",compact("posts"));
    }
    public function create(){
        return view('admin.pages.posts.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => ['required','string','min:5'],
            'content' => ['required','string','max:500'],
            'image' => ['required','image','mimes:png,jpg,jpeg,gif,webp']
        ]);
        if($request->hasfile('image')){
            $request->file('image')->store('public');
        }
        $post = new post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->image->hashName();
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect()->route('admin.post')->with('success', 'Post Added successfully.');
    }
    public function delete(post $post){
         $post->delete();
         return to_route('admin.post')->with('success', 'post deleted successfully.');
    }
    public function update($id,Request $request){
        $post = Post::findorfail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        if($request->hasfile('image')){
            $request->file('image')->store('public');
            $post->image = $request->image->hashName();
        }
        $post->save();
        return redirect()->route('admin.post')->with('success', 'Post Updated successfully.');
    }
    public function edit($id){
        $post = Post::findorfail($id);
        return view('admin.pages.posts.edit',['post' => $post]);
    }
}
