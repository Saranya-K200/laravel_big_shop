<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Category;
use App\Models\City;
use App\Models\cart;
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
        //
        // Bind categories to the header view only
        view()->composer('frontend.layout.header', function ($view) {
            $view->with('categories', Category::all());
            $view->with('cities', City::all());
            $view->with('carts' , Cart::all());
            $view->with('cart_count' ,Cart::all()->count());
        });
    }
}
