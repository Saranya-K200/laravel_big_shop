<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view ('frontend/home');
    }
    public function privacy_policy(Request $request)
    {
        return view ('frontend/privacy_policy');
    }
    public function purchase_guide(Request $request)
    {
        return view ('frontend/purchase_guide');
    }
    public function terms(Request $request)
    {
        return view ('frontend/terms');
    }



    public function page_not_found(Request $request)
    {
        return view ('frontend/page_not_found/type1');
    }
}
