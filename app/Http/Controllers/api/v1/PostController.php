<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\PostResource;
use App\Http\Controllers\Api\v1\ApiController;

class PostController extends ApiController
{
    public function index(){
        // return $this->apiResponse(Post::paginate());
        return PostResource::collection(post::paginate());

    }
    public function show(Post $post){
        return $this->apiResponse(new PostResource($post));
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
        return $this->apiResponse($post);
    }
    public function update(Request $request, $id)
    {
        $post = new post();
        $post = Post::findOrFail($id);
    
        $request->validate([
            'title' => ['sometimes', 'string', 'min:5'],
            'content' => ['sometimes', 'string', 'max:500'],
            'image' => ['sometimes', 'image', 'mimes:png,jpg,jpeg,gif,webp'],
        ]);
    
        if ($request->has('title')) {
            $post->title = $request->title;
        }
    
        if ($request->has('content')) {
            $post->content = $request->content;
        }
    
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public');
            $post->image = $request->image->hashName();
        }
        $post->user_id = auth()->user()->id;
        $post->save();
        Log::info('Post After Update:', $post->toArray());

        return response()->json([
            'message' => 'Post updated successfully',
            'post' => $post,
        ], 200);
    }
    public function destroy(post $post){
        $post->delete();
        return response()->json([
           'message' => 'Post deleted successfully'
        ], 200);
    }
}

