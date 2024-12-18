<?php

namespace App\Http\Controllers\writer;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class WriterController extends Controller
{
    public function index(){
        Gate::authorize('editor');
        $posts = Post::with('user')->where('user_id', auth()->id())->orderby('id','DESC')->paginate(10);
        return view("writer.posts.index",compact("posts"));
    }
    public function create(){
        return view('writer.posts.create');
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
        return to_route('writer.dashboard')->with('success', 'post created successfully');
    }
}

