@extends('layouts.app')


@section('title')
Mangas | Hokusai
@endsection

@section('content')

<div class="container mx-auto h-45vh flex justify-end items-end">
    <div class="px-12 py-5 bg-white bg-opacity-95">
        <h1 class="text-6xl text-center font-bold">Tendances</h1>
    </div>
</div>
</div>

<div class="container mx-auto py-16">

    <section>
        DROPDOWNS
    </section>

    <section>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <a href="{{ route('mangas.show', str_replace(' ', '+', $product->name)) }}" class="group">
                <div class="bg-100% bg-top h-28rem flex items-end group-hover:bg-105% duration-300" style="background-image: url('{{ asset('storage/products/'.$product->img) }}')">
                    <div class="flex text-lg text-white font-semibold bg-black ml-auto mb-2">
                        <p class="px-3 py-1">Tome {{ $product->volume }}</p>
                    </div>
                </div>
                <div class="flex text-2xl text-black font-semibold w-full justify-between">
                    <h2>{{ $product->name }}</h2>
                    <h3 class="text-red-500">€{{ $product->paperback_price }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    {{ $products->appends(['search' => request('search')])->links('vendor.pagination.default') }}

</div>

@endsection