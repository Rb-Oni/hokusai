<x-app-layout>
    <x-slot name="header">
        <h2 class="font-şemibold text-xl text-gray-800 leading-tight">
            Paniers
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="w-full lg:w-5/6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors />
            <x-success-message />
        </div>

        <div class="w-full lg:w-5/6 max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row justify-between">
            <form action="" method="GET" class="flex items-center">
                <input type="search" name="search" id="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Rechercher un produit" aria-label="Search" aria-describedby="button-addon2">
            </form>

        </div>

        <div class="w-full lg:w-5/6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead class="">
                        <tr class="bg-greenc text-white uppercase text-md leading-normal">
                            <th class="py-3 px-6 text-center">Name</th>
                            <th class="py-3 px-6 text-center">Cart ID</th>
                            <th class="py-3 px-6 text-center">Products</th>
                        </tr>
                    </thead>
                    <tbody class="text-black text-md">

                        @foreach($carts as $cart)
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{ $cart->user->lastname }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{ $cart->id }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    @foreach($cart->cartProducts as $cartProduct)
                                    <span>{{ $cartProduct->product->name }}</span>
                                    @if ($loop->last)
                                    @else
                                    /
                                    @endif
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>