<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = post::with('user')->paginate(10);
        return view('front.posts.index', compact('posts'));
    }

    public function show(post $post ){
        return view('front.posts.show', compact('post'));
    }
}
