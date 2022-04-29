@if(Route::is('welcome'))
<div class="bg-mha bg-cover bg-top">
    @elseif(Route::is('mangas'))
    <div class="bg-manga bg-cover bg-top">
        @endif

        <div class="container-fluid relative bg-white bg-opacity-95 text-black {{  Route::is('manga') ? 'border-b-4 border-black' : ''  }}">
            <div x-data="{ open: true }" class="flex flex-col pr-4 lg:items-end lg:justify-between lg:flex-row lg:pr-12">
                <div class="flex flex-row justify-between">
                    <div class="flex justify-end bg-black w-96 lg:w-32rem">
                        <a class="" href="{{ route('welcome') }}"><img src="{{ asset('img/logo_black.png') }}" alt="Hokusai logo" class=""></a>
                    </div>
                    <button class="rounded-lg lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden mx-5 pb-4 lg:pb-2 lg:flex lg:justify-start lg:flex-row">
                    <a class="after:content-[''] after:block after:w-0 after:h-1.5 after:bg-black after:transition-width hover:after:w-full hover:after:transition-width hover:after:duration-300 font-bold text-3xl lg:mt-0 lg:ml-4" href="{{ route('mangas') }}">MANGAS</a>
                    <a class="after:content-[''] after:block after:w-0 after:h-1.5 after:bg-black after:transition-width hover:after:w-full hover:after:transition-width hover:after:duration-300 font-bold text-3xl lg:mt-0 lg:ml-4" href="#">CONTACT</a>
                    <a class="after:content-[''] after:block after:w-0 after:h-1.5 after:bg-black after:transition-width hover:after:w-full hover:after:transition-width hover:after:duration-300 font-bold text-3xl lg:mt-0 lg:ml-4" href="#">CALENDRIER</a>
                </nav>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 lg:pb-2 lg:flex lg:justify-end lg:flex-row">
                    <a class="hover:text-greenc mr-4" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                    </a>
                    <a class="hover:text-greenc" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>