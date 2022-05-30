<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCartProductRequest;
use App\Http\Requests\UpdateCartProductRequest;

class CartProductController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $cart = $user->cart;
        $cartProducts = $cart->cartProducts;
        $tmpCartProduct = null;

        foreach ($cartProducts as $cartProduct) {
            if ($cartProduct->product_id == $request->product_id) {
                $tmpCartProduct = $cartProduct;
            }
        }

        if ($tmpCartProduct) {
            $tmpCartProduct->update([
                'quantity' => $tmpCartProduct->quantity + 1
            ]);
        } else {
            $tmpCartProduct = CartProduct::create([
                'cart_id' => $cart->id,
                'product_id' => $request->product_id,
                'product_price' => $request->product_price,
                'quantity' => $request->quantity
            ]);
            $tmpCartProduct->save();
        }

        $cartProducts = CartProduct::where('cart_id', $cart->id)->get();
        $total = 0;
        foreach ($cartProducts as $cartProduct) {
            $price = 0 + ($cartProduct->quantity * $cartProduct->product_price);
            $total += $price;
        }

        $cart->update([
            'total' => $total
        ]);

        return redirect()->route('cart');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartProductRequest  $request
     * @param  \App\Models\CartProduct  $cartProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartProductRequest $request, CartProduct $cartProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartProduct  $cartProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartProduct $cartProduct)
    {
        $user = Auth::user();
        $cart = $user->cart;

        $total = $cart->total - ($cartProduct->quantity * $cartProduct->product_price);

        $cart->update([
            'total' => $total
        ]);

        $cartProduct->delete();
        return redirect()->route('cart');
    }
}
