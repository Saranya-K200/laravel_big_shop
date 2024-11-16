<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Country;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CartController extends Controller
{
    public function index(Request $request)
    {
        try
        {
            $countries = Country::all();
            $cities = City::all();
            $categories = Category::all();
            $customer = Auth::user();

            $carts = Cart::where('customer_id', $customer->id)->get();
            $cart_grand_total = Cart::grandTotal($customer->id);

            $data = [
                'cart' => $carts,
                'cart_grand_total' => $cart_grand_total,
                'categories' => $categories,
                'countries' => $countries,
                'cities' => $cities,
            ];

            return view('frontend.cart.index', $data);
        
        } catch (ModelNotFoundException $e) {
            return redirect()->route('product.index')->with('error', 'Product not found');
        }
    }

    public function add_to_cart(Request $request)
    {
        $user = Auth::user();
        $customer_id = $user->id;
        $product_id = $request->input('product_id');
        $qty = $request->input('qty', 1);

        $product = Product::find($product_id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // Check if the item is already in the cart
        $existingCartItem = Cart::where('product_id', $product_id)
            ->where('customer_id', $customer_id)
            ->first();

        if ($existingCartItem) {
            // Update quantity if already in cart
            $existingCartItem->qty += $qty;
            $existingCartItem->save();
            return redirect()->back()->with('success', $product->name . " quantity updated in your cart.");
        } else {
            // Add new item to cart
            Cart::create([
                'product_id' => $product_id,
                'customer_id' => $customer_id,
                'qty' => $qty,
            ]);
            return redirect()->back()->with('success', $product->name . " added to your cart.");
        }
    }

    public function increaseQuantity(Request $request, $id)
    {
        $user = Auth::user();
        $customer_id = $user->id;

        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->route('cart.index')->with('error', 'Cart item not found.');
        }

        if ($cartItem->customer_id != $customer_id) {
            return redirect()->route('cart.index')->with('error', 'Unauthorized to update this item.');
        }

        $cartItem->qty += 1;
        $cartItem->save();

        return redirect()->route('cart.index')->with('success', $cartItem->product->name . ' quantity increased.');
    }

    public function decreaseQuantity(Request $request, $id)
    {
        $user = Auth::user();
        $customer_id = $user->id;

        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->route('cart.index')->with('error', 'Cart item not found.');
        }

        if ($cartItem->customer_id != $customer_id) {
            return redirect()->route('cart.index')->with('error', 'Unauthorized to update this item.');
        }

        $cartItem->qty = max($cartItem->qty - 1, 1);
        $cartItem->save();

        return redirect()->route('cart.index')->with('success', $cartItem->product->name . ' quantity decreased.');
    }

    public function removeFromCart($id)
    {
        $user = Auth::user();
        $customer_id = $user->id;

        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->route('cart.index')->with('error', 'Cart item not found.');
        }

        if ($cartItem->customer_id != $customer_id) {
            return redirect()->route('cart.index')->with('error', 'Unauthorized to remove this item.');
        }

        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', $cartItem->product->name . ' removed from your cart.');
    }

    public function clearCart(Request $request)
    {
        $user = Auth::user();
        $customer_id = $user->id;

        $cartItems = Cart::where('customer_id', $customer_id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'No items found in the cart.');
        }

        Cart::where('customer_id', $customer_id)->delete();

        return redirect()->route('cart.index')->with('success', 'Cart cleared successfully.');
    }
}

