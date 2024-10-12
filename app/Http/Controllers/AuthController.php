<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        return view ('frontend/auth/register');
    }
    public function login(Request $request)
    {
        return view('frontend/auth/login');
    }
    public function forget_password(Request $request)
    {
        return view('frontend/auth/forget_password');
    }
    public function reset_password(Request $request)
    {
        return view('frontend/auth/reset_password');
    }
}
