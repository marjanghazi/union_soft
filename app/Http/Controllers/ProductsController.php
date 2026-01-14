<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display products listing
     */
    public function index()
    {
        $products = Product::where('is_active', true)
            ->orderBy('is_featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        $categories = Product::where('is_active', true)
            ->distinct('category')
            ->pluck('category');

        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Display single product
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->limit(4)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }

    /**
     * Filter products by category
     */
    public function category($category)
    {
        $products = Product::where('category', $category)
            ->where('is_active', true)
            ->paginate(12);

        $categories = Product::where('is_active', true)
            ->distinct('category')
            ->pluck('category');

        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Search products
     */
    public function search(Request $request)
    {
        $query = $request->input('q');
        
        $products = Product::where('is_active', true)
            ->where(function($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%")
                  ->orWhere('short_description', 'LIKE', "%{$query}%")
                  ->orWhere('technology', 'LIKE', "%{$query}%");
            })
            ->paginate(12);

        $categories = Product::where('is_active', true)
            ->distinct('category')
            ->pluck('category');

        return view('products.index', compact('products', 'categories', 'query'));
    }
}