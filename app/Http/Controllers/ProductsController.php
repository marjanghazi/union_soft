<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display products listing with filters
     */
    public function index(Request $request)
    {
        $query = Product::where('is_active', true);
        
        // Search functionality
        if ($request->has('q') && $request->q) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->q . '%')
                  ->orWhere('short_description', 'like', '%' . $request->q . '%')
                  ->orWhere('description', 'like', '%' . $request->q . '%')
                  ->orWhere('technology', 'like', '%' . $request->q . '%');
            });
        }
        
        // Category filter
        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }
        
        // Technology filter
        if ($request->has('technology') && $request->technology) {
            $query->where('technology', $request->technology);
        }
        
        // Price range filter
        if ($request->has('min_price') && $request->min_price) {
            $query->where(function($q) use ($request) {
                $q->where('sale_price', '>=', $request->min_price)
                  ->orWhere('price', '>=', $request->min_price);
            });
        }
        
        if ($request->has('max_price') && $request->max_price) {
            $query->where(function($q) use ($request) {
                $q->where('sale_price', '<=', $request->max_price)
                  ->orWhere('price', '<=', $request->max_price);
            });
        }
        
        // License filter
        if ($request->has('license') && $request->license) {
            $query->where('license', $request->license);
        }
        
        // Featured filter
        if ($request->has('featured') && $request->featured) {
            $query->where('is_featured', true);
        }
        
        // Sorting
        switch ($request->get('sort', 'popular')) {
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            case 'featured':
                $query->orderBy('is_featured', 'desc')->orderBy('created_at', 'desc');
                break;
            case 'price_low_high':
                $query->orderByRaw('COALESCE(sale_price, price) ASC');
                break;
            case 'price_high_low':
                $query->orderByRaw('COALESCE(sale_price, price) DESC');
                break;
            case 'popular':
            default:
                $query->orderBy('download_count', 'desc')->orderBy('created_at', 'desc');
                break;
        }
        
        // Get all unique categories for filter
        $categories = Product::where('is_active', true)
            ->distinct('category')
            ->pluck('category')
            ->filter()
            ->values();
        
        // Get all unique technologies for filter
        $technologies = Product::where('is_active', true)
            ->distinct('technology')
            ->pluck('technology')
            ->filter()
            ->values();
        
        // Get license types
        $licenses = ['MIT', 'GPL', 'Commercial'];
        
        // Get total product count
        $totalProducts = Product::where('is_active', true)->count();
        
        // Paginate results (preserve all query parameters)
        $products = $query->paginate(12)->withQueryString();
        
        return view('products.index', compact(
            'products', 
            'categories', 
            'technologies',
            'licenses',
            'totalProducts'
        ));
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
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }

    /**
     * Filter products by category
     */
    public function category($category, Request $request)
    {
        // Use the main index method with category parameter
        $request->merge(['category' => $category]);
        return $this->index($request);
    }

    /**
     * Search products
     */
    public function search(Request $request)
    {
        // Use the main index method with search parameter
        return $this->index($request);
    }
    
    /**
     * Get product discount percentage
     */
    private function calculateDiscountPercentage($price, $salePrice)
    {
        if ($salePrice && $price > 0) {
            return round((($price - $salePrice) / $price) * 100);
        }
        return 0;
    }
}