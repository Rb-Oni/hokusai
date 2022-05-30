@extends('layouts.app')


@section('title')
Panier | Hokusai
@endsection

@section('content')

<div class="container mx-auto py-16">

    <h1 class="text-black text-5xl font-bold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 inline" viewBox="0 0 20 20" fill="currentColor">
            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
        </svg>
        <span class="align-middle">VOTRE PANIER</span>
    </h1>
    <section x-data="{ openTab: 1 }" class="container mx-auto">
        <ul class="grid grid-cols-3 gap-4 items-center my-4">
            <li @click="openTab = 1" :class="{ 'text-white bg-greenc':openTab === 1 }" class="bg-white p-4">
                <button :class"openTab===1 ? activeClasses : inactiveClasses" class="text-2xl font-bold">1. Récapitulatif</button>
            </li>
            <li @click="openTab = 2" :class="{ 'text-white bg-greenc':openTab === 2 }" class="bg-white p-4">
                <button :class"openTab===2 ? activeClasses : inactiveClasses" class="text-2xl font-bold">2. Adresse et Livraison</button>
            </li>
            <li @click="openTab = 3" :class="{ 'text-white bg-greenc':openTab === 3 }" class="bg-white p-4">
                <button :class"openTab===3 ? activeClasses : inactiveClasses" class="text-2xl font-bold">3. Paiement</button>
            </li>
        </ul>
        <div class="w-full">
            <div x-show="openTab === 1">
                @if($cartProducts->isEmpty())
                <h2>ya R frer</h2>
                @else
                @foreach ($cartProducts as $item)
                <section class="bg-white p-8 flex {{ $loop->last ? '' : 'border-b-4 border-black' }}">
                    <img src="{{ asset('storage/products/' . $item->product->img) }}" class="h-96 mr-4" alt="{{ $item->product->name }}">
                    <div class="grow font-semibold text-2xl">
                        <div class="flex justify-between text-3xl">
                            <h2>{{ $item->product->name }} - Tome {{ $item->product->volume }}</h2>
                            <h2 class="font-bold">{{ $item->quantity * $item->product_price }}€</h2>
                        </div>
                        <div class="flex justify-between items-end">
                            <form action="{{ route('cart.update', $item) }}" method="POST" class="flex justify-between items-end">
                                @csrf
                                @method('PUT')
                                <div>
                                    <h2 class="font-bold">Quantité</h2>
                                    <input type="number" name="quantity" id="quantity" min="1" value="{{ $item->quantity }}">
                                    <button type="submit" class="text-xl text-white font-bold bg-greenc hover:bg-greenh duration-150 py-2 px-3">Update</button>
                                </div>
                            </form>
                            <form action="{{ route('cart.destroy', $item) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="Supprimer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-greenc hover:text-greenh duration-150" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </section>
                @endforeach

                <section class="my-8 flex justify-between">
                    <h2 class="text-3xl font-semibold"><span class="font-bold">Total</span> ({{ $item->count('quantity') }} article{{ $item->count('quantity') == 1 ? '' : 's' }}) : </h2>
                    <span class="text-3xl font-bold text-red-500">{{ $cart->total }}€</span>
                </section>
                <div class="flex justify-end">
                    <button type="" class="text-2xl text-white font-bold bg-greenc hover:bg-greenh duration-150 py-3 px-5">ETAPE SUIVANTE</button>
                </div>
                @endif
            </div>
            <div x-show="openTab === 2">
            </div>
            <div x-show="openTab === 3">
            </div>
        </div>
    </section>

</div>

@endsection