@extends('layouts.app')


@section('title')
{{ $product->name }} - Tome {{ $product->volume }} | Hokusai
@endsection

@section('content')

<section class="container mx-auto py-16">

    <div>
        <div class="flex flex-row">
            <img src="{{ asset('storage/products/'.$product->img) }}" alt="{{ $product->name }}" class="w-1/3">
            <div class="text-black pl-11 w-45rem">
                <h1 class="text-5xl font-bold pb-3">{{ $product->name }} - Tome {{ $product->volume }}</h1>
                <div class="w-10/12">
                    <div class="flex flex-wrap justify-between items-end pb-11">
                        <h2 class="text-2xl font-semibold">de <a href="#" class="text-red-500">{{ $product->author }}</a> - {{ date('d M Y', strtotime($product->date)) }}</h2>
                        <a href="#" class="text-xl font-semibold uppercase text-greenc bg-white px-2 py-1">nouveauté</a>
                    </div>
                    <div class="flex justify-between items-center text-4xl pb-11">
                        <a href="#" class="font-bold text-greenc bg-white px-3 py-2">{{ $product->fv_editor }}</a>
                        <a href="#" class="font-semibold">{{ $product->category->name }}</a>
                        <span class="font-semibold text-2xl">12 ans et +</span>
                    </div>
                    <ul class="flex justify-between items-end pb-11">
                        <li class="relative">
                            <input class="sr-only peer text-greenc" type="radio" name="price" id="paperback_price" value="" checked>
                            <label class="flex flex-col w-64 h-24 p-3 bg-white cursor-pointer hover:bg-gray-50 peer-checked:ring-greenc peer-checked:ring-4" for="paperback_price">
                                <span class="text-3xl font-semibold">Broché</span>
                                <span class="text-2xl text-red-500 font-bold">€{{ $product->paperback_price }}</span>
                            </label>
                        </li>
                        <li class="relative">
                            <input class="sr-only peer text-greenc" type="radio" name="price" id="digital_price" value="">
                            <label class="flex flex-col w-64 h-24 p-3 bg-white cursor-pointer hover:bg-gray-50 peer-checked:ring-greenc peer-checked:ring-4" for="digital_price">
                                <span class="text-3xl font-semibold">Numérique</span>
                                <span class="text-2xl text-red-500 font-bold">€{{ $product->digital_price }}</span>
                            </label>
                        </li>
                    </ul>
                    <form action="{{ route('cart.store') }}" method="POST" class="flex justify-center text-center pb-11">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="product_id" id="product_id">
                        <input type="hidden" value="{{ $product->paperback_price }}" name="product_price" id="product_price">
                        <input type="hidden" value="1" name="quantity" id="quantity">
                        <button type="submit" class="text-3xl text-white font-semibold bg-greenc hover:bg-greenh duration-150 p-4 w-full">Ajouter au panier</button>
                    </form>
                    <div class="flex flex-col text-2xl font-semibold">
                        <h4 class="pb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline text-greenc" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg><span class="align-bottom">Retour gratuit</span>
                        </h4>
                        <h4 class="pb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline text-greenc" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg><span class="align-bottom">Satisfait ou remboursé</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="bg-white mb-16">

    <div x-data="{ openTab: 1 }" class="container mx-auto py-8">
        <ul class="flex items-center">
            <li @click="openTab = 1" :class="{ 'text-greenc':openTab === 1 }">
                <button :class"openTab===1 ? activeClasses : inactiveClasses" class="text-4xl font-bold">Synopsis</button>
            </li>
            <li @click="openTab = 2" :class="{ 'text-greenc':openTab === 2 }" class="mx-6">
                <button :class"openTab===2 ? activeClasses : inactiveClasses" class="text-4xl font-bold">Détails sur le produits</button>
            </li>
            <li @click="openTab = 3" :class="{ 'text-greenc':openTab === 3 }">
                <button :class"openTab===3 ? activeClasses : inactiveClasses" class="text-4xl font-bold">Présentation</button>
            </li>
        </ul>
        <div class="w-full pt-6">
            <div x-show="openTab === 1">
                <span class="font-semibold text-2xl">{{ $product->synopsis }}</span>
            </div>
            <div x-show="openTab === 2" class="grid grid-cols-2 font-bold text-greenc text-2xl">
                <span>Editeur : <span class="font-semibold text-black">{{ $product->fv_editor }} ({{ date('d M Y', strtotime($product->date)) }})</span></span>
                <span>Broché : <span class="font-semibold text-black">{{ $product->pages }} pages</span></span>
                <span>Langue : <span class="font-semibold text-black">{{ $product->language }}</span></span>
                <span>Origine : <span class="font-semibold text-black">{{ $product->origin }}</span></span>
                <span>Poids de l'article : <span class="font-semibold text-black">{{ $product->weight }} g</span></span>
                <span>ISBN-10 : <span class="font-semibold text-black">{{ $product->isbn10 }}</span></span>
                <span>Dimensions : <span class="font-semibold text-black">{{ $product->size }} cm</span></span>
                <span>ISBN-30 : <span class="font-semibold text-black">{{ $product->isbn30 }}</span></span>
            </div>
            <div x-show="openTab === 3" class="grid grid-cols-2 font-bold text-greenc text-2xl">
                <span>Titre original : <span class="font-semibold text-black">{{ $product->title }}</span></span>
                <span>Type : <span class="font-semibold text-black">{{ $product->category->name }}</span></span>
                <span>Auteur : <span class="font-semibold text-black">{{ $product->author }}</span></span>
                <span>Genres : <span class="font-semibold text-black">
                        @foreach($product->genres as $genre){{ $genre->name }}
                        @if ($loop->last)
                        @else
                        -
                        @endif
                        @endforeach</span></span>
                <span>Editeur VO : <span class="font-semibold text-black">{{ $product->ov_editor }}</span></span>
                <span>Nombre de volumes VO : <span class="font-semibold text-black">{{ $product->ov_volumes_number }}</span></span>
                <span>Editeur VF : <span class="font-semibold text-black">{{ $product->fv_editor }}</span></span>
                <span>Nombre de volumes VF : <span class="font-semibold text-black">{{ $product->fv_volumes_number }} </span></span>
            </div>
        </div>
    </div>

</section>

<section class="container mx-auto pb-16">
    <div class="mb-8 flex flex-row justify-between items-end">
        <div class="">
            <a href="!#" class="after:content-[''] after:block after:w-0 after:h-1.5 after:bg-greenc after:transition-width hover:after:w-full hover:after:transition-width hover:after:duration-300 text-5xl font-bold">
                <h2><span>La série complète</span></h2>
            </a>
        </div>
        <div class="hidden md:block">
            <a href="!#" class="text-xl font-semibold hover:text-greenc duration-150">Voir tout</a>
        </div>
    </div>
    <!-- foreach ICI -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="!#" class="group">
            <div class="bg-100% bg-top h-28rem flex items-end group-hover:bg-105% duration-300" style="background-image: url('{{ asset('storage/products/'.$product->img) }}')">
                <div class="flex text-lg text-white font-semibold bg-black ml-auto mb-2">
                    <p class="px-3 py-1">Tome 25</p>
                </div>
            </div>
        </a>
    </div>
    <!-- END ICI -->
</section>

<section class="bg-genres bg-cover bg-center">
    <div class="container mx-auto py-16">
        <div class="mb-8 flex flex-row justify-between items-end">
            <div class="">
                <a href="#" class="after:content-[''] after:block after:w-0 after:h-1.5 after:bg-greenc after:transition-width hover:after:w-full hover:after:transition-width hover:after:duration-300 text-5xl font-bold">
                    <h2><span>Séries suggérées</span></h2>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="{{ route('mangas.show', str_replace(' ', '+', 'Dr. Stone')) }}" class="group">
                <div class="bg-drstonesuggest bg-cover bg-center h-80 flex items-end">
                    <div class="flex text-xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-10">
                        <p class="my-auto mx-auto">Dr. Stone</p>
                    </div>
                </div>
            </a>
            <a href="{{ route('mangas.show', str_replace(' ', '+', 'One Punch-Man')) }}" class="group">
                <div class="bg-opmsuggest bg-cover bg-center h-80 flex items-end">
                    <div class="flex text-xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-10">
                        <p class="my-auto mx-auto">One Punch Man</p>
                    </div>
                </div>
            </a>
            <a href="{{ route('mangas.show', str_replace(' ', '+', 'The Promised Neverland')) }}" class="group">
                <div class="bg-tpnsuggest bg-cover bg-center h-80 flex items-end">
                    <div class="flex text-xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-10">
                        <p class="my-auto mx-auto">The Promised Neverland</p>
                    </div>
                </div>
            </a>
            <a href="!#" class="group">
                <div class="bg-dbzsuggest bg-cover bg-center h-80 flex items-end">
                    <div class="flex text-xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-10">
                        <p class="my-auto mx-auto">Dragon Ball Z</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection