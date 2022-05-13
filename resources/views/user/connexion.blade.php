@extends('layouts.app')


@section('title')
Connexion | Hokusai
@endsection

@section('content')

<div class="container mx-auto py-16 text-center">

    <section>
        <h1 class="text-black text-5xl font-bold">CONNECTEZ-VOUS</h1>
        <div class="flex flex-col w-1/2 my-8 mx-auto">
            <input type="email" name="email" id="email" class="border border-gray-300 focus:ring-0 focus:border-greenc mb-4" placeholder="Saisissez votre adresse e-mail">
            <input type="password" name="password" id="password" class="border border-gray-300 focus:ring-0 focus:border-greenc" placeholder="Saisissez votre mot de passe">
        </div>
        <div class="text-center mt-8 mb-4">
            <button type="submit" class="text-2xl text-white font-bold bg-greenc hover:bg-greenh duration-150 px-6 py-3">SE CONNECTER</button>
        </div>
        <a href="#" class="text-greenc font-semibold">Mot de passe oublié ?</a>
    </section>

    <section class="mt-16">
        <h1 class="text-black text-5xl font-bold">PAS ENCORE DE COMPTE ?</h1>
        <div class="text-center mt-8">
            <button type="submit" class="text-2xl text-white font-bold bg-greenc hover:bg-greenh duration-150 px-6 py-3">CREER UN COMPTE</button>
        </div>
    </section>

</div>

@endsection