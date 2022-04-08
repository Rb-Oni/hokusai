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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="#" class="group">
                <div class="bg-snk bg-cover bg-center h-28rem flex items-end group-hover:bg">
                    <div class="flex text-lg text-white font-semibold bg-black ml-auto mb-2">
                        <p class="px-3 py-1">Tome 1</p>
                    </div>
                </div>
                <div class="flex text-2xl text-black font-semibold w-full justify-between">
                    <h2>L'attaque des Titans</h2>
                    <h3 class="text-red-500">€6</h3>
                </div>
            </a>
        </div>
    </section>

</div>

@endsection