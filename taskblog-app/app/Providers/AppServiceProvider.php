<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer(['website.master'],function ($view){$view->with('categories',Category::where('status', 1)->get());});
        View::composer(['website.master'],function ($view){$view->with('blog3',Blog::where('status',1)->latest()->take(3)->get());});
    }
}
