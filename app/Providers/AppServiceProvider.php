<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Date\Date;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('home.news', function ($view) {
            $view->with('popular_posts', Post::orderBy('view', 'desc')->limit(3)->get()
            );
            $view->with('cats', Category::withCount('posts')->orderBy('posts_count', 'desc')->get());
        });
        Date::setlocale(config('app.locale'));
    }
}
