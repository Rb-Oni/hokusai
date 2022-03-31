<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::query();
        if (request('search')) {
            $products->where('name', 'Like', '%' . request('search') . '%');
        }

        return view('admin.products.index', [
            'products' => $products->with([
                'category'
            ])->orderBy('id', 'DESC')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        Product::create([
            'img' => $request->img->getClientOriginalName(),
            'name' => $request->name,
            'category_id' => $request->category_id,
            'volume' => $request->volume,
            'author' => $request->author,
            'date' => $request->date,
            'fv_editor' => $request->fv_editor,
            'ov_editor' => $request->ov_editor,
            'paperback_price' => $request->paperback_price,
            'digital_price' => $request->digital_price,
            'quantity' => $request->quantity,
            'synopsis' => $request->synopsis,
            'language' => $request->language,
            'isbn10' => $request->isbn10,
            'isbn30' => $request->isbn30,
            'pages' => $request->pages,
            'weight' => $request->weight,
            'size' => $request->size,
            'title' => $request->title,
            'origin' => $request->origin,
            'fv_volumes_number' => $request->fv_volumes_number,
            'ov_volumes_number' => $request->ov_volumes_number
        ]);

        $request->img->storeAs('products', $request->img->getClientOriginalName(), 'public');

        return redirect()->route('admin.products.index')->with('message', 'Produit créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->img == null) {
            $product->update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'volume' => $request->volume,
                'author' => $request->author,
                'date' => $request->date,
                'fv_editor' => $request->fv_editor,
                'ov_editor' => $request->ov_editor,
                'paperback_price' => $request->paperback_price,
                'digital_price' => $request->digital_price,
                'quantity' => $request->quantity,
                'synopsis' => $request->synopsis,
                'language' => $request->language,
                'isbn10' => $request->isbn10,
                'isbn30' => $request->isbn30,
                'pages' => $request->pages,
                'weight' => $request->weight,
                'size' => $request->size,
                'title' => $request->title,
                'origin' => $request->origin,
                'fv_volumes_number' => $request->fv_volumes_number,
                'ov_volumes_number' => $request->ov_volumes_number
            ]);
        } else {
            $product->update([
                'img' => $request->img->getClientOriginalName(),
                'name' => $request->name,
                'category_id' => $request->category_id,
                'volume' => $request->volume,
                'author' => $request->author,
                'date' => $request->date,
                'fv_editor' => $request->fv_editor,
                'ov_editor' => $request->ov_editor,
                'paperback_price' => $request->paperback_price,
                'digital_price' => $request->digital_price,
                'quantity' => $request->quantity,
                'synopsis' => $request->synopsis,
                'language' => $request->language,
                'isbn10' => $request->isbn10,
                'isbn30' => $request->isbn30,
                'pages' => $request->pages,
                'weight' => $request->weight,
                'size' => $request->size,
                'title' => $request->title,
                'origin' => $request->origin,
                'fv_volumes_number' => $request->fv_volumes_number,
                'ov_volumes_number' => $request->ov_volumes_number
            ]);

            $request->img->storeAs('products', $request->img->getClientOriginalName(), 'public');
        }

        return redirect()->route('admin.products.edit', $product->id)->with('message', 'Produit modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('message', 'Produit supprimé avec succès');
    }
}
