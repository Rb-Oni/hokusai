<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
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
    public function store(StoreCartProductRequest $request)
    {
        Cart::create([
            'user_id' => $request->user_id,
            'total' => $request->total
        ]);
        
        CartProduct::create([
            'cart_id' => $request->cart_id,
            'product_id' => $request->product_id,
            'product_price' => $request->product_price,
            'quantity' => $request->quantity
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
        //
    }
}
