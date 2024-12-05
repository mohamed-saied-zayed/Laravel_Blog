<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $site_data = setting::first();
        return view("front.about",compact("site_data"));
    }
}
