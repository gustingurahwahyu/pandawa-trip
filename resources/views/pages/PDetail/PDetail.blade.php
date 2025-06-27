<div class="container w-full px-3 mx-auto my-0 mb-16 md:px-8 md:my-4 lg:mb-12 lg:my-20">
    <div class="w-10/12 mx-auto space-y-4 text-center md:space-y-6 lg:w-8/12 xl:w-7/12">
        <h1 class="text-3xl font-bold text-primary md:text-4xl lg:text-6xl" data-aos="fade-up">
            {{ $paket->name }}
        </h1>
        <p class="text-xs text-graytext md:text-base" data-aos="fade-up" data-aos-delay="100">
            {{ $paket->description }}
        </p>
    </div>

    @foreach ($paket->destinasis as $i => $destinasi)
    <div
        class="text-left mt-16 md:mt-20 flex {{ $i % 2 == 0 ? 'flex-col md:flex-row' : 'flex-col-reverse md:flex-row' }}">
        @if ($i % 2 == 0)
        <div class="image-container md:w-6/12 xl:w-5/12 h-[380px] p-2.5">
            <img src="{{ asset('storage/' . $destinasi->image) }}" alt="{{ $destinasi->name }}"
                class="object-cover w-full h-full" data-aos="zoom-in" data-aos-delay="100">
        </div>
        <div class="flex-col px-3 md:w-6/12 xl:w-7/12 md:px-5 lg:ps-16 xl:ps-32">
            <h2 class="mt-3 text-2xl font-bold text-secondary md:text-3xl xl:text-4xl md:mt-10" data-aos="fade-right" data-aos-delay="250">
                {{ $destinasi->name }}
            </h2>
            <p class="mt-2 text-xs text-graytext md:text-base lg:mt-5 lg:pe-16 xl:pe-32" data-aos="fade-right" data-aos-delay="300">
                {{ $destinasi->description }}
            </p>
        </div>
        @else
        <div class="flex-col px-3 md:w-6/12 xl:w-7/12 md:px-5 lg:ps-16 xl:ps-32">
            <h2 class="mt-3 text-2xl font-bold text-secondary md:text-3xl xl:text-4xl md:mt-10" data-aos="fade-right" data-aos-delay="250">
                {{ $destinasi->name }}
            </h2>
            <p class="mt-2 text-xs text-graytext md:text-base lg:mt-5 lg:pe-16 xl:pe-32" data-aos="fade-right" data-aos-delay="300">
                {{ $destinasi->description }}
            </p>
        </div>
        <div class="image-container md:w-6/12 xl:w-5/12 h-[380px] p-2.5">
            <img src="{{ asset('storage/' . $destinasi->image) }}" alt="{{ $destinasi->name }}"
                class="object-cover w-full h-full " data-aos="zoom-in" data-aos-delay="100">
        </div>
        @endif
    </div>
    @endforeach
</div>