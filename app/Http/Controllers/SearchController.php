<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $products = Product::query()->where('name', 'Like', '%' . request('search') . '%');

        return view('search', [
            'products' => $products->orderBy('id', 'ASC')->paginate(16),
        ]);
    }
}
