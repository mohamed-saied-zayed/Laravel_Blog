<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\v1\ApiController;

class HomeController extends ApiController
{
    public function index(){
        $post = Post::with('user')->take(10)->get();
        return $this->apiResponse($post);
    }
    public function settings(){
        $settings = Setting::all();
        return $this->apiResponse($settings);
    }
}
