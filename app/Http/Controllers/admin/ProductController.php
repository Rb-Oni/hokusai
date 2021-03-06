<?php

namespace App\Http\Controllers\admin;

use App\Models\Genre;
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
                'category',
                'genres'
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
        $genres = Genre::all();

        return view('admin.products.create', [
            'categories' => $categories,
            'genres' => $genres
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
        $product = Product::create([
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

        $product->genres()->attach($request->genre_id);

        $request->img->storeAs('products', $request->img->getClientOriginalName(), 'public');

        return redirect()->route('admin.products.index')->with('message', 'Produit cr???? avec succ??s');
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
        $genres = Genre::all();

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories,
            'genres' => $genres
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

        $product->genres()->detach($product->genre_id);
        $product->genres()->attach($request->genre_id);

        return redirect()->route('admin.products.edit', $product->id)->with('message', 'Produit modifi?? avec succ??s');
    }

    public function archive()
    {
        $products = Product::onlyTrashed()
            ->orderBy('id', 'DESC')->get();

        return view('admin.products.archive', compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->trashed()) {
            $product->forceDelete();

            return redirect()->route('admin.products.archive')->with('message', 'Produit supprim?? d??finitivement avec succ??s');
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('message', 'Produit supprim?? avec succ??s');
    }

    public function restore(Product $product)
    {
        $product->restore();

        return redirect()->route('admin.products.index')->with('message', 'Produit restaur?? avec succ??s');
    }
}
