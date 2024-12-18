<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string','min:8','confirmed'],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  $request->password,
        ]);

        $token = $user->create_token('hamada_token')->plaintext;
        return response()->json([
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ],201);


    }
}
