<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $product = Product::with('category')->latest('id')->first();

        return view('admin.dashboard', [
            'product' => $product
        ]);
    }
}
