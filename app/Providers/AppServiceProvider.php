<?php

namespace App\Providers;

use App\Models\Encategory;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->menuLoad();
    }

    public function menuLoad()
    {
        View::composer(['app.includes.en_nav', 'app.includes.en_mobile'], function ($view){
            $view->with('subcategories1', Encategory::all()->where('parent_id', 2));
            $view->with('subcategories2', Encategory::all()->where('parent_id', 4));
            // $view->with('encategories', 'subcategories', Encategory::all() );
        });
    }
}
