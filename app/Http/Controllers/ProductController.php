<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = ['Es Krim', 'Bubuk Es Krim', 'Cone', 'Cup', 'Sendok', 'Tutup'];

        $query = Product::query();

        // Filter by selected categories
        if ($request->has('categories')) {
            $query->whereIn('category', $request->get('categories'));
        }

        $products = $query->get();

        return view('products', compact('products', 'categories'));
    }

    public function category($category)
    {
        $categories = ['Es Krim', 'Bubuk Es Krim', 'Cone', 'Cup', 'Sendok', 'Tutup'];

        $products = Product::where('category', $category)->get();

        return view('products', compact('products', 'categories', 'category'));
    }
}
