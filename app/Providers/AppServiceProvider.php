<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Sa_la_Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		
        View::composer('frontEnd.includes.menu', function ($view) {
            $publishedCategories = Sa_la_Category::where('publicationStatus', 1)->get();
            $view->with('publishedCategories', $publishedCategories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
