<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        return view('frontend/order/checkout');
    }
}
