<div class="container flex-col mx-auto px-3 md:px-8 mt-4 md:mt-8 mb-8 md:mb-10 space-y-3.5 md:space-y-5">
    @forelse ($pakets as $paket)
        <a href="{{ url('/paket/' . $paket->id) }}" class="block">
            <div
                class="flex w-full h-[10rem] md:h-[14rem] lg:h-[17rem] xl:h-[21rem] bg-white drop-shadow-sm md:drop-shadow-lg rounded-[0.5rem] md:rounded-card overflow-hidden">
                <div class="w-5/12 h-full image-container xl:w-4/12">
                    <img class="object-cover w-full h-full" src="{{ asset('storage/' . $paket->image) }}"
                        alt="{{ $paket->name }}">
                </div>
                <div class="flex-col w-7/12 p-2 xl:w-8/12 md:p-4 lg:p-6 xl:p-8">
                    <p class="text-lg font-semibold md:text-2xl lg:text-3xl xl:text-4xl text-secondary">
                        {{ $paket->name }}
                    </p>
                    <p
                        class="mt-1 text-xs lg:text-sm xl:text-base md:mt-2 text-graytext line-clamp-2 lg:line-clamp-3 xl:line-clamp-none">
                        {{ $paket->description }}
                    </p>
                    <div class="flex flex-row space-x-4 md:space-x-8 text-graytext mt-1.5 md:mt-3">
                        <div class="flex items-center gap-x-1 md:gap-x-2.5 text-xs md:text-base xl:text-lg">
                            {{ $paket->capacity ?? '0' }} Orang
                        </div>
                        <div class="flex items-center gap-x-1 md:gap-x-2.5 text-xs md:text-base xl:text-lg">
                            {{ $paket->duration ?? '0' }} Hari
                        </div>
                    </div>
                    <div class="flex-col text-right">
                        <p class="text-xs font-normal line-through text-graytext md:text-lg lg:text-xl xl:text-2xl">
                            Rp{{ number_format($paket->price ?? 0, 0, ',', '.') }}
                        </p>
                        <p class="text-lg font-semibold md:text-2xl lg:text-3xl xl:text-4xl text-primary">
                            Rp{{ number_format($paket->discount ?? 0, 0, ',', '.') }}
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
