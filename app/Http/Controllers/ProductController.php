<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query();
        return view('mangas', [
            'products' => $products->orderBy('id', 'ASC')->paginate(16),
        ]);
    }

    public function show(string $name)
    {
        $name = str_replace('+', ' ', $name);
        $product = Product::where('name', '=', $name)->first();

        // $categories = Category::all();
        $genres = Genre::all();

        return view('manga', [
            'product' => $product,
            // 'categories' => $categories,
            'genres' => $genres
        ]);
    }
}
