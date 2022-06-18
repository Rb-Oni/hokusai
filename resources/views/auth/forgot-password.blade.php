@extends('layouts.app')


@section('title')
Connexion | Hokusai
@endsection

@section('content')

<div class="container px-5 lg:px-0 mx-auto py-16 text-center">

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-validation-errors class="mb-4" :errors="$errors" />

    <section>
        <h1 class="text-black text-5xl font-bold">MOT DE PASSE OUBLIÉ ?</h1>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="my-8 text-md lg:w-1/2 mx-auto">
                {{ __('Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d\'en choisir un nouveau.') }}
            </div>

            <div class="flex flex-col lg:w-1/2 mb-8 mx-auto">
                <input type="email" name="email" class="border border-gray-300 focus:ring-0 focus:border-greenc mb-4" placeholder="Saisissez votre adresse e-mail" :value="old('email')" required autofocus>
            </div>
            <div class="text-center mt-8 mb-4">
                <button type="submit" class="text-2xl text-white font-bold bg-greenc hover:bg-greenh duration-150 px-6 py-3">RÉINISIALISER LE MOT DE PASSE</button>
            </div>
        </form>
    </section>

</div>

@endsection