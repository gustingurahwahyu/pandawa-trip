<div id="searchbar" class="container flex-col px-3 md:px-8 mx-auto py-1.5 md:py-2 xl:py-4 space-y-2 md:space-y-3 xl:space-y-6 z-[10] bg-softgray/0">
    <form class="w-full">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute z-10 inset-y-0 start-0 flex items-center ps-4 md:ps-5 pointer-events-none">
                <svg class="w-4 md:w-8 text-graytext" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" class="block w-full px-3.5 md:px-4 py-3.5 md:py-6 ps-10 md:ps-16 text-xs md:text-base lg:text-lg xl:text-xl outline-none text-gray-900 rounded-card drop-shadow-md" placeholder="Temukan Destinasi Wisata Impianmu" required />
            <button type="submit" class="text-white hidden md:inline-block absolute end-5 bottom-3 bg-primary focus:outline-none font-medium rounded-lg text-base px-10 py-3.5">
                Cari
            </button>
        </div>
    </form>

    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" data-dropdown-offset-skidding="25" class="flex items-center bg-transparent border border-graytext text-xs md:text-lg text-secondary py-1 md:py-2 px-2 md:px-4 rounded-full">
        <img class="w-4 md:w-6 p-0.5 md:pe-1" src="image/icon/sort.svg" alt="sort">
        Urutkan
    </button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-xs md:text-base">Nama Paket</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-xs md:text-base">Harga</a>
            </li>
        </ul>
    </div>

</div>

<script>
    const searchbar = document.getElementById('searchbar');

    // Ketika Navbar berada di paket dan destinasi
    if (window.location.pathname.startsWith('/paket') ||
        window.location.pathname.startsWith('/destinasi')
    ) {
        // Tambahkan sticky-top searchbar
        searchbar.classList.add('sticky');
        searchbar.classList.add('top-0');

        window.addEventListener("scroll", () => {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

            if (scrollTop > 60) {
                searchbar.classList.add('bg-softgray/100');
                searchbar.classList.remove('bg-softgray/0');
            } else {
                searchbar.classList.add('bg-softgray/0');
                searchbar.classList.remove('bg-softgray/100');
            }
        });

    }
</script>