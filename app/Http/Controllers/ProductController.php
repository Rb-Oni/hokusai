<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::query();
        if (request('search')) {
            $products->where('name', 'Like', '%' . request('search') . '%');
        }

        return view('mangas', [
            'products' => $products->orderBy('id', 'DESC')->paginate(16),
        ]);
    }
}
