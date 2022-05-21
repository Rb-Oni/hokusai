<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCartRequest;

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
