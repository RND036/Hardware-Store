<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Method for API response
    public function apiShow()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Existing show method for HTML or JSON
    public function show(Request $request)
    {
        $products = Product::all();
        
        if ($request->wantsJson()) {
            return response()->json($products);
        }
        
        return view('pages.product', compact('products'));
    }
}
