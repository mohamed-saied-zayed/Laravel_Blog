<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\HomeController;
use App\Http\Controllers\api\v1\PostController;


Route::get('/',[HomeController::class,'index']);
Route::get('/settings',[HomeController::class,'settings']);
Route::get('posts',[PostController::class,'index']);
Route::get('posts/{post}',[PostController::class,'show']);

// auth  routes

Route::post('auth/register',[AuthController::class ,'register']);
Route::post('auth/login',[AuthController::class ,'login']);

Route::get('/user',[Authcontroller::class,'user'])->middleware('auth:sanctum');
Route::post('auth/logout',[Authcontroller::class,'logout'])->middleware('auth:sanctum');


//action routes

Route::post('posts',[PostController::class ,'store'])->middleware('auth:sanctum');
Route::delete('posts/{post}',[PostController::class,'destroy'])->middleware('auth:sanctum');
Route::put('posts/{id}',[PostController::class,'update'])->middleware('auth:sanctum');
