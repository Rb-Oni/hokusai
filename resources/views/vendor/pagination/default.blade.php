@if ($paginator->hasPages())
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center">
    <div class="flex justify-between flex-1 sm:hidden">
        @if ($paginator->onFirstPage())
        <span class="items-center text-black cursor-default rounded-md">Précédent</span>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="items-center text-gray-700 rounded-md hover:text-black transition ease-in-out duration-150">Précédent</a>
        @endif

        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="items-center ml-3 text-gray-700 rounded-md hover:text-black transition ease-in-out duration-150">Suivant</a>
        @else
        <span class="items-center ml-3 text-black cursor-default rounded-md">Suivant</span>
        @endif
    </div>

    <div class="hidden mt-12 sm:flex-1 sm:flex sm:items-center sm:justify-center font-semibold">
        <span class="relative z-0 inline-flex">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                <span class="items-center text-gray-500 cursor-default" aria-hidden="true">
                    <svg class="w-8 h-8 inline" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
            </span>
            @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="items-center text-black duration-150" aria-label="{{ __('pagination.previous') }}">
                <svg class="w-8 h-8 inline" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </a>
            @endif

            <div class="px-16">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <span aria-disabled="true">
                    <span class="items-center text-black cursor-default">{{ $element }}</span>
                </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <span aria-current="page">
                    <span class="items-center text-greenc text-xl px-2">{{ $page }}</span>
                </span>
                @else
                <a href="{{ $url }}" class="items-center text-black text-xl px-2" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">{{ $page }}</a>
                @endif
                @endforeach
                @endif
                @endforeach
            </div>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="items-center text-black duration-150" aria-label="{{ __('pagination.next') }}">
                <svg class="w-8 h-8 inline" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </a>
            @else
            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                <span class="items-center text-gray-500 cursor-default rounded-r-md" aria-hidden="true">
                    <svg class="w-8 h-8 inline" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
            </span>
            @endif
        </span>
    </div>
</nav>
@endif