@extends('layouts.app')


@section('title')
Mon profil | Hokusai
@endsection

@section('content')

<div class="container mx-auto py-16">

    <section x-data="{ openTab: 1 }" class="container mx-auto">
        <ul class="grid grid-cols-3 gap-4 items-center">
            <li @click="openTab = 1" :class="{ 'text-white bg-greenc':openTab === 1 }" class="bg-white text-center py-4">
                <button :class"openTab===1 ? activeClasses : inactiveClasses" class="text-2xl font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                    </svg>
                    <span class="align-middle">Données personnelles</span>
                </button>
            </li>
            <li @click="openTab = 2" :class="{ 'text-white bg-greenc':openTab === 2 }" class="bg-white text-center py-4">
                <button :class"openTab===2 ? activeClasses : inactiveClasses" class="text-2xl font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                    </svg>
                    <span class="align-middle">Commandes / retours</span>
                </button>
            </li>
            <li @click="openTab = 3" :class="{ 'text-white bg-greenc':openTab === 3 }" class="bg-white text-center py-4">
                <button :class"openTab===3 ? activeClasses : inactiveClasses" class="text-2xl font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                    <span class="align-middle">Paramètres</span>
                </button>
            </li>
        </ul>
        <div class="w-full">
            <div x-show="openTab === 1">
                <section class="flex py-8">
                    <div class="mr-8">
                        <img src="{{ asset('storage/products/berserk.jpg') }}" class="h-60 w-60 rounded-full" alt="">
                    </div>
                    <div class="flex flex-col grow">
                        <div class="flex flex-row items-end">
                            <h2 class="font-bold text-4xl mr-4">Robin FALCK</h2>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="text-red-500 text-lg font-semibold" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Déconnexion</button>
                            </form>
                        </div>
                        <span>Membre depuis : 24 octobre 2013</span>
                        <textarea class="border-0 focus:ring-0 h-full mt-12" name="description" id="description" placeholder="Description..." cols="" rows=""></textarea>
                    </div>
                </section>

                <section class="py-2 border-y-4 border-black">
                    <h1 class="text-4xl font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 inline text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                        <span class="align-middle">WHISHLIST</span>
                    </h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 my-8">
                        <a href="#" class="group">
                            <div class="bg-100% bg-top h-28rem flex items-end group-hover:bg-105% duration-300" style="background-image: url('{{ asset('storage/products/berserk.jpg') }}')">
                                <div class="flex text-lg text-white font-semibold bg-black ml-auto mb-2">
                                    <p class="px-3 py-1">Tome 1</p>
                                </div>
                            </div>
                            <div class="flex text-2xl text-black font-semibold w-full bg-white">
                                <h2 class="mx-auto">Berserk</h2>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
            <div x-show="openTab === 2">
            </div>
            <div x-show="openTab === 3">
            </div>
        </div>
    </section>

</div>

@endsection