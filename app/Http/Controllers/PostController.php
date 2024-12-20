<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = post::with('user')->orderby('id','DESC')->paginate(10);
        return view('front.posts.index', compact('posts'));
    }

    public function show(post $post ){
        $post->load('comments.user');
        return view('front.posts.show', compact('post'));
    }

    public function create(){
        return view('front.posts.create',);
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
        return back()->with('success','Post created successfully');
    }

}
