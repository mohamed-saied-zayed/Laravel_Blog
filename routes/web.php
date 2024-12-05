<?php
use App\Http\Controllers\{PostController,SiteController,AboutController,ContactController};
use Illuminate\Support\Facades\Route;



Route::get('/',[SiteController::class,'home']);

Route::get('/about',[AboutController::class,'index']);

Route::get('/contact',[ContactController::class,'index']);
Route::post('/send-message',[ContactController::class,'sendMessage']);
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post}',[PostController::class,'show']);


