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
}
