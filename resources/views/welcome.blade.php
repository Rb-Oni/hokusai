@extends('layouts.app')


@section('title')
Hokusai
@endsection

@section('content')

<div class="container mx-auto xl:h-45vh flex justify-end items-end">
    <div class="hidden xl:block w-32rem px-6 py-8 bg-white bg-opacity-95 hover:bg-black hover:bg-opacity-95 hover:text-white duration-150">
        <a href="#" class="text-3xl">
            <p class="font-bold mb-5">MY HERO ACADEMIA</p>
            <p>Action, comédie, ée, super héros et super pouvoirs — Le dernier manga d'Horikoshi Kouhei</p>
        </a>
    </div>
</div>
</div>

<div class="container mx-auto py-16">

    <section>
        <div class="mb-8 flex flex-row justify-between items-end">
            <div class="">
                <a href="#" class="after:content-[''] after:block after:w-0 after:h-1.5 after:bg-greenc after:transition-width hover:after:w-full hover:after:transition-width hover:after:duration-300 text-5xl font-bold">
                    <h2><span>Tendances</span></h2>
                </a>
            </div>
            <div class="hidden md:block">
                <a href="#" class="text-xl font-semibold hover:text-greenc duration-150">Voir les mangas du moment</a>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="#" class="group">
                <div class="bg-snk bg-cover h-90 flex items-end">
                    <div class="flex text-2xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-16">
                        <p class="my-auto mx-auto">L'attaque des Titans</p>
                    </div>
                </div>
            </a>
            <a href="#" class="group">
                <div class="bg-berserk bg-cover h-90 flex items-end">
                    <div class="flex text-2xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-16">
                        <p class="my-auto mx-auto">Berserk</p>
                    </div>
                </div>
            </a>
            <a href="#" class="group">
                <div class="bg-op bg-cover h-90 flex items-end">
                    <div class="flex text-2xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-16">
                        <p class="my-auto mx-auto">One Piece</p>
                    </div>
                </div>
            </a>
            <a href="#" class="group">
                <div class="bg-tg bg-cover h-90 flex items-end">
                    <div class="flex text-2xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-16">
                        <p class="my-auto mx-auto">Tokyo Ghoul</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <section class="my-16">
        <div class="mb-8 flex flex-row justify-between items-end">
            <div class="">
                <a href="#" class="after:content-[''] after:block after:w-0 after:h-1.5 after:bg-greenc after:transition-width hover:after:w-full hover:after:transition-width hover:after:duration-300 text-5xl font-bold">
                    <h2><span>Nouveautés</span></h2>
                </a>
            </div>
            <div class="hidden md:block">
                <a href="#" class="text-xl font-semibold hover:text-greenc duration-150">Voir les dernières sorties</a>
            </div>
        </div>
        <div class="grid lg:grid-flow-col gap-4">
            <a href="#" class="group flex text-white h-60 font-bold bg-cover bg-sl">
                <div class="flex invisible group-hover:visible duration-150 group-hover:animate-news m-auto h-14 w-full bg-black bg-opacity-95">
                    <p class="text-3xl m-auto">Solo Leveling</p>
                </div>
            </a>
            <a href="#" class="group flex text-white h-60 font-bold bg-cover bg-jujutsu bg-center">
                <div class="flex invisible group-hover:visible duration-150 group-hover:animate-news m-auto h-14 w-full bg-black bg-opacity-95">
                    <p class="text-3xl m-auto">Jujutsu Kaisen</p>
                </div>
            </a>
            <a href="#" class="group flex text-white h-60 lg:h-31rem font-bold bg-cover bg-kny row-span-2">
                <div class="flex invisible group-hover:visible duration-150 group-hover:animate-news m-auto h-14 w-full bg-black bg-opacity-95">
                    <p class="text-3xl m-auto">Demon Slayer</p>
                </div>
            </a>
            <a href="#" class="group flex text-white h-60 font-bold bg-cover bg-haikyu">
                <div class="flex invisible group-hover:visible duration-150 group-hover:animate-news m-auto h-14 w-full bg-black bg-opacity-95">
                    <p class="text-3xl m-auto">Haikyuu!!</p>
                </div>
            </a>
            <a href="#" class="group flex text-white h-60 font-bold bg-cover bg-vs">
                <div class="flex invisible group-hover:visible duration-150 group-hover:animate-news m-auto h-14 w-full bg-black bg-opacity-95">
                    <p class="text-3xl m-auto">Vinland Saga</p>
                </div>
            </a>
        </div>
    </section>

</div>

<div class="bg-genres bg-cover bg-center">
    <div class="container mx-auto py-16">
        <div class="mb-16">
            <h2 class="text-5xl text-center font-bold">Genres</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-white font-bold text-center text-4xl">
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Action</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Aventure</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Drame</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Comédie</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Horreur</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Romance</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Tranches de vie</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Surnaturel</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Fantaisie</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Science-fiction</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Historique</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Mystère</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Thriller</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Psychologique</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Tragique</a>
            <a href="#" class="bg-greenc hover:bg-greenh duration-150 p-4">Sport</a>
        </div>
    </div>
</div>

@endsection