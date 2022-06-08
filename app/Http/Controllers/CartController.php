<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $cart = $user->cart;
        $cartProducts = $cart->cartProducts;
        $cartProducts->load('product');

        return view('cart', [
            'cart' => $cart,
            'cartProducts' => $cartProducts
        ]);
    }
}
