<?php

namespace App\Providers;
use App\Models\Post;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Gate::define('add-comment', function(){
            return auth()->user()->role == 0;
        });
        Gate::define('add-post', function(){
            return auth()->user()->role == 1;
        });

        Gate::define('delete-comment', function($user,$comment){
            return $user->id == $comment->user_id;
        });
        
        view::share('site_data',Setting::where('id',1)->first());

        Gate::define('writer',function(){
            return auth()->user()->role == 0;
        });
        Gate::define('admin',function(){
            return auth()->user()->role == 1;
        });
        Gate::define('editor',function(){
            $post = new Post();
            $user = new User();
            return $post->user_id == $user->user_id;
        });

    }
}
