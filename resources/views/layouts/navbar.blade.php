    <div class="container-fluid relative bg-black text-white py-3">
        <div x-data="{ open: true }" class="flex flex-col px-4 lg:items-center lg:justify-between lg:flex-row lg:px-12">
            <div class="flex flex-row justify-between py-3">
                <div>
                    <a class="mr-5" aria-current="page" href="https://www.facebook.com/Les-lutins-tourn%C3%A9s-103836922094428/" rel="noopener noreferrer" target="_blank"><i class="fab fa-2x fa-facebook-f" target="_blank"></i></a>
                    <a class="" aria-current="page" href="https://www.instagram.com/leslutinstournes/" rel="noopener noreferrer" target="_blank"><i class="fab fa-2x fa-instagram"></i></a>
                </div>
                <button class="rounded-lg lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 lg:pb-0 lg:flex lg:justify-end lg:flex-row">
                <a class="after:content-[''] after:block after:w-0 after:h-1 after:bg-white after:transition-width hover:after:w-full hover:after:transition-width hover:after:duration-300 font-semibold text-3xl lg:mt-0 lg:ml-4" href="{{ route('welcome') }}">ACCUEIL</a>
            </nav>
        </div>
    </div>