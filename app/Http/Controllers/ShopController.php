<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function home()
    {
        $featuredProducts = Product::query()
            ->where('is_active', true)
            ->where('stock', '>', 0)
            ->latest()
            ->take(3)
            ->get();

        return view('welcome', compact('featuredProducts'));
    }

    public function index(Request $request)
    {
        $search = trim((string) $request->query('search'));
        $category = trim((string) $request->query('category'));

        $allowedCategories = ['outerwear','shirts','pants','jackets','accessories'];

        if (!in_array($category, $allowedCategories, true)) {
            $category = '';
        }

        $products = Product::query()
            ->where('is_active', true)
            ->where('stock', '>', 0)
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($subQuery) use ($search) {
                    $subQuery
                        ->where('name', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%');
                });
            })
            ->when($category !== '', function ($query) use ($category) {
                $query->where('category', $category);
            })
            ->orderBy('id', 'desc')
            ->get();

        return view('shop', compact('products','search','category'));
    }

    public function show(string $slug)
    {
        $product = Product::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->where('stock', '>', 0)
            ->firstOrFail();

        return view('product-detail', compact('product'));
    }
}