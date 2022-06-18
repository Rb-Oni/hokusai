@extends('layouts.app')


@section('title')
Calendrier | Hokusai
@endsection

@section('content')

<div class="container px-5 lg:px-0 mx-auto py-16">

    <h1 class="font-bold text-3xl lg:text-5xl mb-3">CALENDRIER DES SORTIES</h1>
    <section x-data="{ openTab: 1 }" class="container mx-auto">
        <ul class="flex items-center">
            <li @click="openTab = 1" :class="{ 'text-red-500 border-red-500':openTab === 1 }" class="border-t-4 border-black pr-4">
                <button :class"openTab===1 ? activeClasses : inactiveClasses" class="text-xl lg:text-3xl font-bold">Décembre 2021</button>
            </li>
            <li @click="openTab = 2" :class="{ 'text-red-500 border-red-500':openTab === 2 }" class="border-t-4 border-black pr-4">
                <button :class"openTab===2 ? activeClasses : inactiveClasses" class="text-xl lg:text-3xl font-bold">Janvier 2022</button>
            </li>
            <li @click="openTab = 3" :class="{ 'text-red-500 border-red-500':openTab === 3 }" class="border-t-4 border-black pr-4">
                <button :class"openTab===3 ? activeClasses : inactiveClasses" class="text-xl lg:text-3xl font-bold">Février 2022</button>
            </li>
            <li @click="openTab = 4" :class="{ 'text-red-500 border-red-500':openTab === 4 }" class="border-t-4 border-black pr-4 hidden lg:block">
                <button :class"openTab===4 ? activeClasses : inactiveClasses" class="text-xl lg:text-3xl font-bold">Mars 2022</button>
            </li>
        </ul>
        <div class="w-full pt-6">
            <div x-show="openTab === 1">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($products as $product)
                    <a href="{{ route('mangas.show', str_replace(' ', '-', $product->name)) }}" class="group">
                        <div class="bg-100% bg-top h-28rem flex items-end group-hover:bg-105% duration-300" style="background-image: url('{{ asset('storage/products/'.$product->img) }}')">
                            <div class="flex text-lg text-white font-semibold bg-black ml-auto mb-2">
                                <p class="px-3 py-1">Tome {{ $product->volume }}</p>
                            </div>
                        </div>
                        <div class="flex text-2xl text-black font-semibold w-full justify-between">
                            <h2>{{ $product->name }}</h2>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div x-show="openTab === 2">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($products as $product)
                    <a href="{{ route('mangas.show', str_replace(' ', '-', $product->name)) }}" class="group">
                        <div class="bg-100% bg-top h-28rem flex items-end group-hover:bg-105% duration-300" style="background-image: url('{{ asset('storage/products/'.$product->img) }}')">
                            <div class="flex text-lg text-white font-semibold bg-black ml-auto mb-2">
                                <p class="px-3 py-1">Tome {{ $product->volume }}</p>
                            </div>
                        </div>
                        <div class="flex text-2xl text-black font-semibold w-full justify-between">
                            <h2>{{ $product->name }}</h2>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div x-show="openTab === 3">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($products as $product)
                    <a href="{{ route('mangas.show', str_replace(' ', '-', $product->name)) }}" class="group">
                        <div class="bg-100% bg-top h-28rem flex items-end group-hover:bg-105% duration-300" style="background-image: url('{{ asset('storage/products/'.$product->img) }}')">
                            <div class="flex text-lg text-white font-semibold bg-black ml-auto mb-2">
                                <p class="px-3 py-1">Tome {{ $product->volume }}</p>
                            </div>
                        </div>
                        <div class="flex text-2xl text-black font-semibold w-full justify-between">
                            <h2>{{ $product->name }}</h2>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div x-show="openTab === 4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($products as $product)
                    <a href="{{ route('mangas.show', str_replace(' ', '-', $product->name)) }}" class="group">
                        <div class="bg-100% bg-top h-28rem flex items-end group-hover:bg-105% duration-300" style="background-image: url('{{ asset('storage/products/'.$product->img) }}')">
                            <div class="flex text-lg text-white font-semibold bg-black ml-auto mb-2">
                                <p class="px-3 py-1">Tome {{ $product->volume }}</p>
                            </div>
                        </div>
                        <div class="flex text-2xl text-black font-semibold w-full justify-between">
                            <h2>{{ $product->name }}</h2>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</div>

@endsection