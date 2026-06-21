<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductController extends Controller
{
    public function category($category): View
    {
        $products = config("products.$category", []);

        return view('products.category', compact('products', 'category'));
    }

    public function show($category, $slug): View
    {
        $products = config("products.$category", []);

        $product = collect($products)->firstWhere('slug', $slug);

        abort_if(!$product, 404);

        return view('products.show', compact('product', 'category'));
    }
}
