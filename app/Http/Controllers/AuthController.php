<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendVerificationCodeEmail;
class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }
    public function storeUser(Request $request){
        $data = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]
        );
        $user = User::create($data);
        $user->code = 564321;
        Mail::to('hamada@gmail.com')->send(new SendVerificationCodeEmail($user));
        Auth::login($user);
        return redirect()->route('home');

    }
    public function loginUser(Request $request){
        $data = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );
        if(Auth::attempt($data)){
            return redirect()->route('home');
        }else{
            return back()->with('error', 'Invalid credentials');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
