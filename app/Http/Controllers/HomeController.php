<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve all cities for use in the view
        $cities = City::all();

        // Retrieve all categories for use in the view
        $categories = Category::all();
        
        // Initialize data array
        $data = [
            'cities' => $cities,
            'categories' => $categories,
        ];

        return view ('frontend/home', $data);
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
    public function about(Request $request)
    {
        return view ('frontend/about');
    }
    public function account(Request $request)
    {
        return view ('frontend/account');
    }
    public function contact(Request $request)
    {
        return view ('frontend/contact');
    }


    public function page_not_found(Request $request)
    {
        return view ('frontend/page_not_found/type1');
    }
}
