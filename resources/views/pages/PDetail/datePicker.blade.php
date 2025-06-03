<div class="relative flex justify-center w-full mb-24 md:mb-28 lg:mb-32">
    <div class="w-full image-container">
        <img src="{{ asset('storage/' . $paket->image) }}" class="object-cover w-full h-full"
            alt="background paket detail">
    </div>

    <div
        class="date-picker flex absolute z-1 top-[10rem] md:top-[21rem] lg:top-[28rem] xl:top-[40rem] mx-auto items-center justify-evenly md:justify-around w-11/12 md:w-9/12 lg:w-8/12 xl:w-7/12 h-16 md:h-20 lg:h-24 xl:h-28 rounded-[10px] md:rounded-xl bg-white drop-shadow-md">
        <p class="font-semibold md:text-2xl lg:text-3xl xl:text-4xl text-primary">
            Rp{{ number_format($paket->price, 0, ',', '.') }}
        </p>
        <div>
            <input class="text-[10px] md:text-base lg:text-lg xl:text-xl w-[5.5rem] md:w-36 lg:w-40 xl:w-[11rem]"
                type="date" placeholder="Pilih Tanggal">
        </div>
        <a href="/paket"
            class="items-center px-3 md:px-6 lg:px-8 py-2 lg:py-3.5 text-white text-xs md:text-base font-semibold bg-primary rounded-md brightness-100 hover:brightness-75 transition-all ease-out duration-300">
            Pesan Sekarang
        </a>
    </div>

</div>
