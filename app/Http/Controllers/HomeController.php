<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve all cities for use in the view
        $cities = City::all();

        // Retrieve all categories for use in the view
        $categories = Category::all();

        // Start building the query for products
        // $query = Product::query();

        // Start building the query for products
        $query = Product::with('productLabel'); // Eager load productLabels  
        
        // Initialize data array
        $data = [
            'product' => $query->get(),
            'cities' => $cities,
            'categories' => $categories,
        ];

        // Apply category filter if category is present and is not 'All'
        if ($request->has('category') && $request->category != 'All') {
            // $query->where('category_id', $request->category);
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('categories.id', $request->category);
            });
            
            // Set page title based on the selected category
            $category = Category::find($request->category);
            $data['page_title'] = $category ? $category->name : 'Category';
            $data['product_count'] = $category ? $category->products()->count() : 0;

            // dd($category->products()->count());
        }

        // Update products after applying filters
        $data['product'] = $query->get();        

        // dd($data['product']);

        // Return the appropriate view based on the category filter
        if ($request->has('category') && $request->category != 'All') {
            // dd($request->has('category'));
            // dd($request->category);
            return view('frontend/product/list/type1', $data);
        }

        return view('frontend/home', $data);
    }

    public function show($id){
        //dd($id);

        $product = Product::find($id);

        $data = [
            'id' => $id,
            'product' => $product
        ];

        return view('frontend/product/detail/type1', $data);
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
