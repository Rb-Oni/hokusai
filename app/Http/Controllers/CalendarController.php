<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Product;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'asc')->paginate(10);

        return view('calendar', [
            'products' => $products
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
