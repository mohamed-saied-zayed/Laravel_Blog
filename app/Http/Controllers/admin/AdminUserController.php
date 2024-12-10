<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.pages.users.index' , compact('users'));
    }
    public function create(){
        return view('admin.pages.users.create');
    }
    public function store(Request $request){
        $request = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]
        );
        User::create($request);
        return redirect()->route('admin.user')->with('success', 'User created successfully.');
    }
    public function delete(user $user){
         $user->delete();
         return to_route('admin.user')->with('success', 'User deleted successfully.');
    }
    public function update($id,Request $request){
        $user = User::findorfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('admin.user')->with('success', 'User Updated successfully.');
    }
    public function edit($id){
        $user = User::findorfail($id);
        return view('admin.pages.users.edit',['user' => $user]);
    }
}
