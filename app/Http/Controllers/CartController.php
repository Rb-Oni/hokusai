<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCartRequest;
use App\Models\Product;

class CartController extends Controller
{
    public function show()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $cart_product = CartProduct::first();

        return view('cart', [
            'carts' => $carts,
            'cart_product' => $cart_product
        ]);
    }
}
