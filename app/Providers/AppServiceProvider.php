<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Category;
use App\Models\City;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

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

            $user = Auth::user();

            $view->with('categories', Category::all());
            $view->with('cities', City::all());

            // Load cart items only if the user is authenticated
            $carts = $user ? Cart::where('customer_id', $user->id)->get() : collect();
            $cart_count = $carts->count();
            
            // Calculate cart subtotal by summing up each item's total price
            $cart_sub_total = $carts->sum(function ($item) {
                return $item->totalPrice();
            });

            $cart_grand_total = Cart::grandTotal($user->id);

            $view->with('carts' , $carts);
            $view->with('cart_count' ,$cart_count);
            $view->with('cart_sub_total' , $cart_sub_total);
            $view->with('cart_grand_total' ,$cart_grand_total);
        });

        // Cart Page
        view()->composer('frontend.cart.index', function ($view) {

            $user = Auth::user();

            $view->with('categories', Category::all());
            $view->with('cities', City::all());

            // Load cart items only if the user is authenticated
            $carts = $user ? Cart::where('customer_id', $user->id)->get() : collect();
            $cart_count = $carts->count();
            
            // Calculate cart subtotal by summing up each item's total price
            $cart_sub_total = $carts->sum(function ($item) {
                return $item->totalPrice();
            });

            $cart_grand_total = Cart::grandTotal($user->id);

            $view->with('carts' , $carts);
            $view->with('cart_count' ,$cart_count);
            $view->with('cart_sub_total' , $cart_sub_total);
            $view->with('cart_grand_total' ,$cart_grand_total);

        });

        // Checkout Page
        view()->composer('frontend.order.checkout', function ($view) {

            $user = Auth::user();

            $view->with('categories', Category::all());
            $view->with('cities', City::all());

            // Load cart items only if the user is authenticated
            $carts = $user ? Cart::where('customer_id', $user->id)->get() : collect();
            $cart_count = $carts->count();
            
            // Calculate cart subtotal by summing up each item's total price
            $cart_sub_total = $carts->sum(function ($item) {
                return $item->totalPrice();
            });

            $cart_grand_total = Cart::grandTotal($user->id);

            $view->with('carts' , $carts);
            $view->with('cart_count' ,$cart_count);
            $view->with('cart_sub_total' , $cart_sub_total);
            $view->with('cart_grand_total' ,$cart_grand_total);

        });
    }
}
