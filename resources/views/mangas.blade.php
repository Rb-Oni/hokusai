@extends('layouts.app')


@section('title')
Mangas | Hokusai
@endsection

@section('content')

<div class="container mx-auto h-45vh flex justify-end items-end">
    <div class="px-5 lg:px-12 py-5 bg-white bg-opacity-95">
        <h1 class="text-4xl lg:text-6xl text-center font-bold">Tendances</h1>
    </div>
</div>
</div>

<div class="container px-5 lg:px-0 mx-auto py-16">

    <section class="mb-4 flex justify-between">
        <div class="flex">
            <div @click.away="openSort = false" class="relative" x-data="{ openSort: false,sortType:'Genres' }">
                <button @click="openSort = !openSort" class="flex text-white bg-black items-center justify-start p-2 text-md font-semibold text-left">
                    <span x-text="sortType"></span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': openSort, 'rotate-0': !openSort}" class="w-4 h-4 transition-transform duration-200 transform">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="openSort" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 origin-top-right">
                    <div class="bg-black text-white">
                        <div class="flex flex-col">
                            @foreach($genres as $category)
                            <div>
                                <a @click="sortType='{{ $category->name }}',openSort=!openSort" x-show="sortType != '{{ $category->name }}'" class="flex flex-row items-start p-2 hover:bg-greenc" href="#">
                                    <div class="">
                                        <p class="font-semibold">{{ $category->name }}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex">
            <div @click.away="openSort = false" class="relative" x-data="{ openSort: false,sortType:'Type' }">
                <button @click="openSort = !openSort" class="flex text-white bg-black items-center justify-start p-2 text-md font-semibold text-left">
                    <span x-text="sortType"></span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': openSort, 'rotate-0': !openSort}" class="w-4 h-4 transition-transform duration-200 transform">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="openSort" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 origin-top-right">
                    <div class="bg-black text-white">
                        <div class="flex flex-col">
                            @foreach($categories as $genre)
                            <div>
                                <a @click="sortType='{{ $genre->name }}',openSort=!openSort" x-show="sortType != '{{ $genre->name }}'" class="flex flex-row items-start p-2 hover:bg-greenc" href="#">
                                    <div class="">
                                        <p class="font-semibold">{{ $genre->name }}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($products->isEmpty())
    <h1 class="font-bold font-times text-4xl text-center mt-12">Aucun manga trouvé</h1>
    @else
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
    @endif

    {{ $products->appends(['search' => request('search')])->links('vendor.pagination.default') }}

</div>

@endsection