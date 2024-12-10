<?php

namespace App\Http\Controllers\admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminContactController extends Controller
{
    public function index(){
        $messages = Message::all();
        return view("admin.pages.contact.index".compact("messages"));
    }
}
