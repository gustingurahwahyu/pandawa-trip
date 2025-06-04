<div id="searchbar"
    class="container flex-col px-3 md:px-8 mx-auto py-1.5 md:py-2 xl:py-4 z-[10] bg-softgray/0">
    <form class="w-full space-y-2 md:space-y-3 xl:space-y-6" method="GET" action="{{ route('destinasi') }}">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 z-10 flex items-center pointer-events-none start-0 ps-4 md:ps-5">
                <svg class="w-4 md:w-8 text-graytext" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" name="search" value="{{ request('search') }}"
                class="block w-full px-3.5 md:px-4 py-3.5 md:py-6 ps-10 md:ps-16 text-xs md:text-base lg:text-lg xl:text-xl outline-none text-gray-900 rounded-card drop-shadow-md"
                placeholder="Temukan Destinasi Wisata Impianmu" />
            <input type="hidden" name="sort" id="sort-input" value="{{ request('sort') }}">
            <button type="submit"
                class="text-white hidden md:inline-block absolute end-5 bottom-3 bg-primary focus:outline-none font-medium rounded-lg text-base px-10 py-3.5">
                Cari
            </button>
        </div>
        <div class="relative inline-block">
            <button id="dropdownDefaultButton" type="button"
                class="flex items-center px-2 py-1 text-xs bg-transparent border rounded-full border-graytext md:text-lg text-secondary md:py-2 md:px-4">
                <img class="w-4 md:w-6 p-0.5 md:pe-1" src="{{ asset('image/icon/sort.svg') }}" alt="sort">
                Urutkan
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown"
                class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <button type="button"
                            class="block w-full px-4 py-2 text-xs text-left hover:bg-gray-100 md:text-base sort-option"
                            data-sort="name">Nama Paket</button>
                    </li>
                    <li>
                        <button type="button"
                            class="block w-full px-4 py-2 text-xs text-left hover:bg-gray-100 md:text-base sort-option"
                            data-sort="price">Harga</button>
                    </li>
                </ul>
            </div>
        </div>
    </form>

</div>

<script>
    // Dropdown toggle
    document.getElementById('dropdownDefaultButton').addEventListener('click', function() {
        document.getElementById('dropdown').classList.toggle('hidden');
    });

    // Sort option click
    document.querySelectorAll('.sort-option').forEach(function(el) {
        el.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('sort-input').value = this.dataset.sort;
            this.closest('form').submit();
        });
    });

    // Sticky searchbar logic (tetap)
    const searchbar = document.getElementById('searchbar');
    if (window.location.pathname.startsWith('/paket') ||
        window.location.pathname.startsWith('/destinasi')
    ) {
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