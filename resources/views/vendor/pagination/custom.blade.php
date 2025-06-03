@if ($paginator->hasPages())
    <div class="flex mt-4 space-x-2 md:mt-6 lg:mb-6 lg:mt-10 xl:space-x-3">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span
                class="flex items-center justify-center w-8 h-8 border-2 rounded-lg opacity-50 cursor-not-allowed md:w-10 lg:w-12 md:h-10 lg:h-12 border-borderColor">
                <svg class="pe-[1px] md:pe-[2px] w-3 md:w-4 lg:w-5" fill="#242424" viewBox="-9.9 -9.9 349.80 349.80"
                    stroke="#242424" stroke-width="16.5">
                    <path
                        d="M111.213,165.004L250.607,25.607c5.858-5.858,5.858-15.355,0-21.213c-5.858-5.858-15.355-5.858-21.213,0.001 l-150,150.004C76.58,157.211,75,161.026,75,165.004c0,3.979,1.581,7.794,4.394,10.607l150,149.996 C232.322,328.536,236.161,330,240,330s7.678-1.464,10.607-4.394c5.858-5.858,5.858-15.355,0-21.213L111.213,165.004z">
                    </path>
                </svg>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                class="flex items-center justify-center w-8 h-8 border-2 rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 border-borderColor">
                <svg class="pe-[1px] md:pe-[2px] w-3 md:w-4 lg:w-5" fill="#242424" viewBox="-9.9 -9.9 349.80 349.80"
                    stroke="#242424" stroke-width="16.5">
                    <path
                        d="M111.213,165.004L250.607,25.607c5.858-5.858,5.858-15.355,0-21.213c-5.858-5.858-15.355-5.858-21.213,0.001 l-150,150.004C76.58,157.211,75,161.026,75,165.004c0,3.979,1.581,7.794,4.394,10.607l150,149.996 C232.322,328.536,236.161,330,240,330s7.678-1.464,10.607-4.394c5.858-5.858,5.858-15.355,0-21.213L111.213,165.004z">
                    </path>
                </svg>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span
                    class="flex items-center justify-center w-8 h-8 border-2 rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 text-secondary border-borderColor">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span
                            class="flex items-center justify-center w-8 h-8 text-white rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 bg-primary">
                            <p class="md:font-medium md:text-lg lg:text-xl">{{ $page }}</p>
                        </span>
                    @else
                        <a href="{{ $url }}"
                            class="flex items-center justify-center w-8 h-8 border-2 rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 text-secondary border-borderColor">
                            <p class="md:font-medium md:text-lg lg:text-xl">{{ $page }}</p>
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
                class="flex items-center justify-center w-8 h-8 border-2 rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 border-borderColor">
                <svg class="pe-[1px] md:pe-[2px] w-3 md:w-4 lg:w-5" fill="#242424" viewBox="-9.9 -9.9 349.80 349.80"
                    stroke="#242424" stroke-width="16.5" style="transform: scaleX(-1);">
                    <path
                        d="M111.213,165.004L250.607,25.607c5.858-5.858,5.858-15.355,0-21.213c-5.858-5.858-15.355-5.858-21.213,0.001 l-150,150.004C76.58,157.211,75,161.026,75,165.004c0,3.979,1.581,7.794,4.394,10.607l150,149.996 C232.322,328.536,236.161,330,240,330s7.678-1.464,10.607-4.394c5.858-5.858,5.858-15.355,0-21.213L111.213,165.004z">
                    </path>
                </svg>
            </a>
        @else
            <span
                class="flex items-center justify-center w-8 h-8 border-2 rounded-lg opacity-50 cursor-not-allowed md:w-10 lg:w-12 md:h-10 lg:h-12 border-borderColor">
                <svg class="pe-[1px] md:pe-[2px] w-3 md:w-4 lg:w-5" fill="#242424" viewBox="-9.9 -9.9 349.80 349.80"
                    stroke="#242424" stroke-width="16.5" style="transform: scaleX(-1);">
                    <path
                        d="M111.213,165.004L250.607,25.607c5.858-5.858,5.858-15.355,0-21.213c-5.858-5.858-15.355-5.858-21.213,0.001 l-150,150.004C76.58,157.211,75,161.026,75,165.004c0,3.979,1.581,7.794,4.394,10.607l150,149.996 C232.322,328.536,236.161,330,240,330s7.678-1.464,10.607-4.394c5.858-5.858,5.858-15.355,0-21.213L111.213,165.004z">
                    </path>
                </svg>
            </span>
        @endif
    </div>
@endif
