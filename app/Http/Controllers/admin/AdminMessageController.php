<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMessageController extends Controller
{
    public function index(){
        $messages = Message::all();
        return view('admin.pages.messages.index' , compact('messages'));
    }
//     public function create(){
//         return view('admin.pages.messages.create');
//     }
}