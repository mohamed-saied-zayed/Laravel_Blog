<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class ContactController extends Controller
{
    public function index(){
        return view("front.contact");
    }
    public function sendMessage(){
       $data = request()->all();
       $message = new Message();
       $message->name = $data['name'];
       $message->email = $data['email'];
       $message->phone = $data['phone'];
       $message->content = $data['content'];
       $message->save();
       return back()->with('success','Message sent successfully');
    }
}