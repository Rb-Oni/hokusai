@extends('layouts.app')


@section('title')
Creer un compte | Hokusai
@endsection

@section('content')

<div class="container mx-auto py-16 text-center">

    <section>
        <h1 class="text-black text-5xl font-bold">CREER UN COMPTE</h1>
        <div class="grid grid-cols-1 w-1/2 my-8 mx-auto">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <input type="text" name="lastname" id="lastname" class="border border-gray-300 focus:ring-0 focus:border-greenc" placeholder="Nom">
                <input type="text" name="firstname" id="firstname" class="border border-gray-300 focus:ring-0 focus:border-greenc" placeholder="Prénom">
            </div>
            <input type="email" name="email" id="email" class="border border-gray-300 focus:ring-0 focus:border-greenc mb-4" placeholder="Adresse e-mail">
            <input type="password" name="password" id="password" class="border border-gray-300 focus:ring-0 focus:border-greenc mb-4" placeholder="Mot de passe">
            <input type="password" name="confirm_password" id="confirm_password" class="border border-gray-300 focus:ring-0 focus:border-greenc" placeholder="Confirmez votre mot de passe">
        </div>
        <div class="text-center mt-8 mb-4">
            <button type="submit" class="text-2xl text-white font-bold bg-greenc hover:bg-greenh duration-150 px-6 py-3">CREER UN COMPTE</button>
        </div>
    </section>

    <section class="mt-16">
        <h1 class="text-black text-5xl font-bold">CONNECTEZ VOUS</h1>
        <div class="text-center mt-8">
            <a href="#" class="text-2xl text-white font-bold bg-greenc hover:bg-greenh duration-150 px-6 py-3">SE CONNECTER</a>
        </div>
    </section>

</div>

@endsection