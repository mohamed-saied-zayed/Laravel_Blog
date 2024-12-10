<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\AdminTagController;
use App\Http\Controllers\admin\AdminPostController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminMessageController;
use App\Http\Controllers\admin\AdminSettingController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\{PostController,SiteController,AboutController,ContactController};



Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/send-message',[ContactController::class,'sendMessage']);
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post}',[PostController::class,'show']);


//authentication routes
Route::middleware(['middleware' => 'auth'])->group(function(){
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});
    
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/storuser',[AuthController::class,'storeUSer'])->name('store.user');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginUser'])->name('login.user');



//admin routes
Route::get('/admin-home',[AdminController::class,'index'])->name('admin.dashboard');

//admin category routes
Route::get('/admin-category',[AdminCategoryController::class,'index'])->name('admin.category');
Route::get('/category-create',[AdminCategoryController::class,'create'])->name('category.create');
Route::post('/category-store',[AdminCategoryController::class,'store'])->name('category.store');
Route::get('/category-edit/{id}/edit',[AdminCategoryController::class,'edit'])->name('category.edit');
Route::put('/category-update/{id}',[AdminCategoryController::class,'update'])->name('category.update');
Route::delete('/category-delete/{category}',[AdminCategoryController::class,'delete'])->name('category.delete');
// Route::match(['post','put'], '/category-edit/{id}/edit', [AdminCategoryController::class, 'edit'])->name('category.edit');


//admin posts routes
Route::get('/admin-post',[AdminPostController::class,'index'])->name('admin.post');
Route::get('/post-create',[AdminPostController::class,'create'])->name('post.create');
Route::post('/post-store',[AdminPostController::class,'store'])->name('post.store');
Route::get('/post-edit/{id}/edit',[AdminPostController::class,'edit'])->name('post.edit');
Route::put('/post-update/{id}',[AdminPostController::class,'update'])->name('post.update');
Route::delete('/post-delete/{post}',[AdminPostController::class,'delete'])->name('post.delete');

//admin users routes

Route::get('/user-create',[AdminUserController::class,'create'])->name('user.create');
Route::post('/user-store',[AdminUserController::class,'store'])->name('user.store');
Route::get('/user-edit/{id}/edit',[AdminUserController::class,'edit'])->name('user.edit');
Route::put('/user-update/{id}',[AdminUserController::class,'update'])->name('user.update');
Route::delete('/user-delete/{user}',[AdminUserController::class,'delete'])->name('user.delete');



//admin dashborad routes
Route::get('/admin-user',[AdminUserController::class,'index'])->name('admin.user');
Route::get('/admin-setting',[AdminSettingController::class,'index'])->name('admin.setting');


//admin messages routes
Route::get('/admin-message',[AdminMessageController::class,'index'])->name('admin.message');



// admin Tags routes
Route::get('/admin-tag',[AdminTagController::class,'index'])->name('admin.tag');
Route::get('/tag-create',[AdminTagController::class,'create'])->name('tag.create');
Route::post('/tag-store',[AdminTagController::class,'store'])->name('tag.store');
Route::put('/tag-update/{id}',[AdminTagController::class,'update'])->name('tag.update');
Route::post('/tag-edit/{id}/edit',[AdminTagController::class,'edit'])->name('tag.edit');
Route::delete('/tag-delete/{tag}',[AdminTagController::class,'delete'])->name('tag.delete');


//admin setting routes
Route::put('/setting-update/{id}',[AdminSettingController::class,'update'])->name('setting.update');
Route::get('/setting-edit/{id}/edit',[AdminSettingController::class,'edit'])->name('setting.edit');











