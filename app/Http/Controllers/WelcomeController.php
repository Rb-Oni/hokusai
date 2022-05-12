<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::query();
        if (request('search')) {
            $products->where('name', 'Like', '%' . request('search') . '%');
            return view('mangas', [
                'products' => $products->orderBy('id', 'ASC')->paginate(16),
            ]);
        }
        return view('welcome');
    }

    public function contact()
    {
        $products = Product::query();
        if (request('search')) {
            $products->where('name', 'Like', '%' . request('search') . '%');
            return view('mangas', [
                'products' => $products->orderBy('id', 'ASC')->paginate(16),
            ]);
        }
        return view('contact');
    }
}
