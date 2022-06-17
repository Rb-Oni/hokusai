@extends('layouts.app')


@section('title')
Connexion | Hokusai
@endsection

@section('content')

<div class="container mx-auto py-16 text-center">

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-validation-errors class="mb-4" :errors="$errors" />

    <section>
        <h1 class="text-black text-5xl font-bold">CONNECTEZ-VOUS</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-col w-1/2 my-8 mx-auto">
                <input type="email" name="email" id="email" class="border border-gray-300 focus:ring-0 focus:border-greenc mb-4" placeholder="Saisissez votre adresse e-mail" :value="old('email')" required autofocus>
                <input type="password" name="password" id="password" class="border border-gray-300 focus:ring-0 focus:border-greenc" placeholder="Saisissez votre mot de passe" required autocomplete="current-password">
                <!-- Remember Me -->
                <div class="flex flex-row justify-between mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-greenc shadow-sm focus:border-greenc focus:ring focus:ring-greenc focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                    </label>
                    <div>
                        @if (Route::has('password.request'))
                        <a class="text-greenc font-semibold" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="text-center mt-8 mb-4">
                <button type="submit" class="text-2xl text-white font-bold bg-greenc hover:bg-greenh duration-150 px-6 py-3">SE CONNECTER</button>
            </div>
        </form>
    </section>

    <section class="mt-16">
        <h1 class="text-black text-5xl font-bold">PAS ENCORE DE COMPTE ?</h1>
        <div class="text-center mt-12">
            <a href="{{ route('register') }}" class="text-2xl text-white font-bold bg-greenc hover:bg-greenh duration-150 px-6 py-3">CREER UN COMPTE</a>
        </div>
    </section>

    <div x-data="{ open: false }" x-init="() => setTimeout(() => open = true, 500)" class="">

        <div x-show="open" x-transition:enter-start="opacity-0 scale-90" x-transition:enter="transition duration-200 transform ease" x-transition:leave="transition duration-200 transform ease" x-transition:leave-end="opacity-0 scale-90" class="max-w-screen-lg mx-auto fixed bg-white inset-x-5 p-5 bottom-40 rounded-lg drop-shadow-2xl flex gap-4 flex-wrap md:flex-nowrap text-center md:text-left items-center justify-center md:justify-between">
            <p class="w-full font-semibold"><span class="font-bold text-greenc">E-mail :</span> admin@admin.com</p>
            <p class="w-full font-semibold"><span class="font-bold text-greenc">Mot de passe :</span> password</p>
            <div class="flex gap-4 items-center flex-shrink-0">
                <button @click="open = false, setTimeout(() => open = true, 3000)" class="text-red-500 focus:outline-none hover:underline">Fermer</button>
            </div>
        </div>

    </div>

</div>

@endsection