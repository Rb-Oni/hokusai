@extends('layouts.app')


@section('title')
Hokusai
@endsection

@section('content')

<div class="container mx-auto h-45vh flex justify-end items-end">
    <div id="promo" class="w-32rem px-6 py-8 bg-white bg-opacity-95 hover:bg-black hover:bg-opacity-95 hover:text-white duration-150">
        <a href="#" class="text-3xl">
            <p class="font-bold mb-5">MY HERO ACADEMIA</p>
            <p>Action, comédie, ée, super héros et super pouvoirs — Le dernier manga d'Horikoshi Kouhei</p>
        </a>
    </div>
</div>
</div>

<div class="container mx-auto py-16">

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
            <div class="bg-snk bg-cover h-96 flex items-end">
                <div class="flex text-2xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-16">
                    <p class="my-auto mx-auto">L'attaque des Titans</p>
                </div>
            </div>
        </a>
        <a href="#" class="group">
            <div class="bg-berserk bg-cover h-96 flex items-end">
                <div class="flex text-2xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-16">
                    <p class="my-auto mx-auto">Berserk</p>
                </div>
            </div>
        </a>
        <a href="#" class="group">
            <div class="bg-op bg-cover h-96 flex items-end">
                <div class="flex text-2xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-16">
                    <p class="my-auto mx-auto">One Piece</p>
                </div>
            </div>
        </a>
        <a href="#" class="group">
            <div class="bg-tg bg-cover h-96 flex items-end">
                <div class="flex text-2xl text-white font-bold bg-black group-hover:text-black group-hover:bg-white duration-150 mx-auto w-full h-16">
                    <p class="my-auto mx-auto">Tokyo Ghoul</p>
                </div>
            </div>
        </a>
    </div>

</div>

@endsection