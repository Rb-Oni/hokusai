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
        if (request('search')) {
            $products->where('name', 'Like', '%' . request('search') . '%');
        }

        return view('mangas', [
            'products' => $products->orderBy('id', 'DESC')->paginate(16),
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        
        // $categories = Category::all();
        $genres = Genre::all();

        return view('manga', [
            'product' => $product,
            // 'categories' => $categories,
            'genres' => $genres
        ]);
    }
}