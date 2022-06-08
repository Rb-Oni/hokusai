<?php

namespace App\Http\Controllers\admin;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with([
            'user',
            'cartProducts',
            'cartProducts.product'
        ])->get();

        return view('admin.carts.index', [
            'carts' => $carts
        ]);
    }
}
