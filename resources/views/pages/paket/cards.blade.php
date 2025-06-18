<div class="container flex-col mx-auto px-3 md:px-8 mt-2 md:mt-4 mb-8 md:mb-10 space-y-3.5 md:space-y-5">
    @forelse ($pakets as $paket)
    <a href="{{ url('/PDetail/' . $paket->id) }}" class="block">
        <div
            class="flex group w-full h-[10rem] md:h-[14rem] lg:h-[17rem] xl:h-[21rem] bg-white hover:drop-shadow-sm md:hover:drop-shadow-md rounded-[0.5rem] md:rounded-card overflow-hidden transition-all duration-200 ease-in-out">
            <div class="w-5/12 h-full image-container xl:w-4/12 overflow-hidden">
                <img class="object-cover w-full h-full transition-transform duration-200 ease-in-out group-hover:scale-105" src="{{ asset('storage/' . $paket->image) }}"
                    alt="{{ $paket->name }}">
            </div>
            <div class="flex flex-col w-7/12 p-2 xl:w-8/12 md:p-4 lg:p-6 xl:p-8 justify-between">
                <div class="flex flex-col">
                    <p class="text-lg font-semibold md:text-2xl lg:text-3xl xl:text-4xl text-secondary">
                        {{ $paket->name }}
                    </p>
                    <p
                        class="mt-1 text-xs lg:text-sm xl:text-base md:mt-2 text-graytext line-clamp-2 lg:line-clamp-3 xl:line-clamp-3">
                        {{ $paket->description }}
                    </p>
                    <div class="flex flex-row space-x-4 md:space-x-8 text-graytext mt-1.5 md:mt-3">
                        <div class="flex items-center gap-x-0.5 md:gap-x-1.5 text-xs md:text-base xl:text-lg">
                            <svg class="w-4 md:w-5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                        stroke="#6e6e6e" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                                        stroke="#6e6e6e" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            {{ $paket->capacity ?? '0' }} Orang
                        </div>
                        <div class="flex items-center gap-x-0.5 md:gap-x-1.5 text-xs md:text-base xl:text-lg">
                            <svg class="w-4 md:w-5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="#6e6e6e">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                        stroke="#6e6e6e" stroke-width="1.8" stroke-linecap="round"></path>
                                </g>
                            </svg>
                            {{ $paket->duration ?? '0' }} Hari
                        </div>
                    </div>
                </div>
                <div class="flex-col text-right">
                    <p class="text-xs font-normal line-through text-graytext md:text-lg lg:text-xl xl:text-2xl">
                        Rp{{ number_format($paket->price ?? 0, 0, ',', '.') }}
                    </p>
                    <p class="text-lg font-semibold md:text-2xl lg:text-3xl xl:text-4xl text-primary">
                        Rp{{ number_format($paket->price - $paket->price * ($paket->discount / 100) ?? 0, 0, ',', '.') }}
                    </p>
                    <p class="text-[0.4rem] md:text-[0.5rem] xl:text-xs font-medium text-graytext">
                        + pajak, per paket
                    </p>
                </div>
            </div>
        </div>
    </a>
    @empty
    <p class="text-center text-gray-400">Tidak ada paket ditemukan.</p>
    @endforelse
</div>