@extends('layouts.app')


@section('title')
Contact | Hokusai
@endsection

@section('content')

<div class="container mx-auto py-16">

    <h1 class="font-bold text-5xl border-b-4 border-black pb-3 mb-6">CONTACTEZ NOUS</h1>
    <section class="grid xl:grid-cols-2">
        <div>
            <h2 class="font-bold text-3xl">Hokusai</h2>
            <ul class="font-semibold text-xl mt-2">
                <li><a href="https://www.google.com/maps?ll=49.204442,6.954777&z=15&t=m&hl=fr&gl=FR&mapclient=embed&cid=16237456434978358748" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg><span class="align-middle"> 50 Rue des Godrans, 57350 Stiring-Wendel</span></a>
                </li>
                <li class="my-2"><a href="tel:0981685612"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg><span class="align-middle"> 09 81 68 56 12</span></a>
                </li>
                <li><a href="mailto:contact@hokusai.fr"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg><span class="align-middle"> contact@hokusai.fr</span></a>
                </li>
            </ul>
        </div>
        <div class="hidden xl:block">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2069.0269970908103!2d6.94953127028436!3d49.20415184846117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4795b38269fe7c95%3A0xe15708990ec405dc!2sAuchan%20Supermarch%C3%A9%20Breme%20d&#39;Or%20-%20Forbach!5e0!3m2!1sfr!2sfr!4v1629704279350!5m2!1sfr!2sfr" class="w-full" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <h1 class="font-bold text-5xl border-b-4 border-black pb-3 mb-6 mt-12">ENVOYEZ UN MESSAGE</h1>
    <section>
        <div class="grid xl:grid-cols-2 gap-4">
            <div class="grid grid-flow-row">
                <div class="flex flex-col">
                    <label for="object" class="text-2xl font-semibold mb-1">Objet</label>
                    <input type="text" class="border border-gray-300" placeholder="Saisissez un objet" name="object" id="object">
                </div>
                <div class="flex flex-col justify-end">
                    <label for="mail" class="text-2xl font-semibold mb-1">E-Mail</label>
                    <input type="email" class="border border-gray-300" placeholder="Saisissez votre adresse mail" name="mail" id="mail">
                </div>
            </div>
            <div class="flex flex-col">
                <label for="message" class="text-2xl font-semibold mb-1">Message</label>
                <textarea class="border border-gray-300" rows="5" placeholder="Saisissez votre message" name="message" id="message"></textarea>
            </div>
        </div>
        <div class="text-center mt-6">
            <button type="submit" class="text-3xl text-white font-bold bg-greenc hover:bg-greenh duration-150 px-8 py-3">ENVOYER</button>
        </div>
    </section>

</div>

@endsection