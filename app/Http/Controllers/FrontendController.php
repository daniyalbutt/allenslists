<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('welcome', compact('data'));
    }

    public function getProducts($id)
    {
        $products = Product::where('category_id', $id)->get();
        return response()->json($products);
    }

    public function pricing(){
        return view('pricing');
    }
}
