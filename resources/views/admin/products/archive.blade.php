<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-şemibold text-xl text-gray-800 leading-tight">
                    Produits supprimés
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12 px-5 lg:px-0">

        <div class="w-full lg:w-5/6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors />
            <x-success-message />
        </div>

        @if($products->isEmpty())
        <h1 class="font-bold font-times text-4xl text-center mt-12">Aucun produit supprimé</h1>
        @else
        <div class="w-full lg:w-5/6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded my-6">
                <table class="w-full table-auto">
                    <thead class="">
                        <tr class="bg-greenc text-white uppercase text-md leading-normal">
                            <th class="py-3 px-6 text-center">Nom</th>
                            <th class="py-3 px-6 text-center hidden lg:table-cell">Catégorie</th>
                            <th class="py-3 px-6 text-center hidden lg:table-cell">Genres</th>
                            <th class="py-3 px-6 text-center hidden lg:table-cell">Auteur</th>
                            <th class="py-3 px-6 text-center hidden lg:table-cell">Date de sortie</th>
                            <th class="py-3 px-6 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-black text-md">

                        @foreach($products as $product)
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 lg:px-6">
                                <div class="flex items-center justify-center">
                                    <div class="text-center">
                                        <span class="font-bold text-2xl">{{ $product->name }}</span>
                                        <img class="object-scale-down h-20 w-20 lg:h-60 lg:w-60" src="{{ asset('storage/products/'.$product->img) }}">
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center hidden lg:table-cell">
                                <div class="flex items-center justify-center">
                                    <span>{{ $product->category->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center hidden lg:table-cell">
                                @foreach($product->genres as $genre)
                                <div class="flex items-center justify-center">
                                    <span>{{ $genre->name }}</span>
                                </div>
                                @endforeach
                            </td>
                            <td class="py-3 px-6 text-center hidden lg:table-cell">
                                <div class="flex items-center justify-center">
                                    <span>{{ $product->author }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center hidden lg:table-cell">
                                <div class="flex items-center justify-center">
                                    <span>{{ date('d M Y', strtotime($product->date)) }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <form action="{{ route('products.restore', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md" value="Supprimer">Restaurer</button>
                                    </form>
                                    <div class="w-4 mr-2 hover:text-red-500" x-data="{ showModal : false }">
                                        <a href="#" @click="showModal = !showModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </a>

                                        <div x-show="showModal" class="fixed w-full flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
                                            <!-- Modal -->
                                            <div x-show="showModal" class="bg-white rounded-md shadow-2xl p-6 lg:w-3/12 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                                                <!-- Title -->
                                                <span class="block text-black text-2xl mb-3">Souhaitez vous supprimer définitivement le produit ?</span>
                                                <span class="text-2xl font-bold text-greenc">{{ $product->name }}</span>
                                                <img class="object-scale-down h-60 w-60 mx-auto mt-3" src="{{ asset('storage/products/'.$product->img) }}">
                                                <!-- Buttons -->
                                                <div class="text-right mt-5">
                                                    <button @click="showModal = !showModal" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                                                        </svg><span class="align-middle">Annuler</span></button>
                                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md" value="Supprimer"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                            </svg><span class="align-middle">Supprimer</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        @endif

    </div>
</x-app-layout>