<div id="searchbar"
    class="container flex-col px-3 md:px-8 mx-auto py-1.5 md:py-2 z-[10] bg-softgray/0">
    <form class="w-full space-y-2 md:space-y-3" method="GET" action="{{ route('paket') }}">
        <label for="default-search" class="mb-2 text-sm font-medium text-secondary sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 z-10 flex items-center pointer-events-none start-0 ps-4 md:ps-5">
                <svg class="w-4 md:w-6 text-graytext" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" name="search" value="{{ request('search') }}"
                class="block w-full px-3.5 md:px-4 py-3.5 md:py-4 ps-10 md:ps-16 text-xs md:text-base outline-none text-secondary rounded-card drop-shadow-sm"
                placeholder="Temukan Paket Ideal Untuk Liburanmu" required />
            <input type="hidden" name="sort" id="sort-input" value="{{ request('sort') }}">
            <button type="submit"
                class="text-white hidden absolute end-5 bottom-3 bg-primary focus:outline-none font-medium rounded-lg text-base px-10 py-3.5">
                Cari
            </button>
        </div>
        <div class="relative inline-block">
            <button id="dropdownDefaultButton" type="button"
                class="flex items-center px-2 py-1 text-xs bg-transparent border rounded-full border-graytext md:text-sm text-graytext md:py-1.5 md:px-3 hover:brightness-50 ease-out duration-200 transtition">
                <img class="w-4 md:w-6 p-0.5 md:pe-1 scale-y-[-1]" src="{{ asset('image/icon/sort.svg') }}" alt="sort">
                Urutkan
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown"
                class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-32 md:w-44 mt-1 md:mt-1.5">
                <ul class="py-2 text-sm text-graytext" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <button type="button"
                            class="flex w-full px-2 md:px-4 py-2 text-xs md:text-sm text-left hover:bg-gray-100 sort-option"
                            data-sort="name">
                            <svg class="w-5 md:w-7 pe-1 md:pe-1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 7C2.25 6.58579 2.58579 6.25 3 6.25H13C13.4142 6.25 13.75 6.58579 13.75 7C13.75 7.41421 13.4142 7.75 13 7.75H3C2.58579 7.75 2.25 7.41421 2.25 7ZM16.5 6.25C16.7951 6.25 17.0628 6.42309 17.1839 6.69223L21.6839 16.6922C21.8539 17.07 21.6855 17.514 21.3078 17.6839C20.93 17.8539 20.486 17.6855 20.3161 17.3078L18.8787 14.1136H14.1213L12.6839 17.3078C12.514 17.6855 12.07 17.8539 11.6922 17.6839C11.3145 17.514 11.1461 17.07 11.3161 16.6922L15.8161 6.69223C15.9372 6.42309 16.2049 6.25 16.5 6.25ZM14.7963 12.6136H18.2037L16.5 8.82764L14.7963 12.6136ZM2.25 12C2.25 11.5858 2.58579 11.25 3 11.25H10C10.4142 11.25 10.75 11.5858 10.75 12C10.75 12.4142 10.4142 12.75 10 12.75H3C2.58579 12.75 2.25 12.4142 2.25 12ZM2.25 17C2.25 16.5858 2.58579 16.25 3 16.25H8C8.41421 16.25 8.75 16.5858 8.75 17C8.75 17.4142 8.41421 17.75 8 17.75H3C2.58579 17.75 2.25 17.4142 2.25 17Z" fill="#6E6E6E"></path>
                                </g>
                            </svg>
                            <p class="flex items-center">Nama Paket</p>
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class="flex w-full px-2 md:px-4 py-2 text-xs md:text-sm text-left hover:bg-gray-100 sort-option"
                            data-sort="price">
                            <svg class="w-5 md:w-7 pe-1 md:pe-1.5" viewBox="0 0 24 24" id="rupiah-2" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path id="primary" d="M21,13.5h0A2.5,2.5,0,0,0,18.5,11H16v5h2.5A2.5,2.5,0,0,0,21,13.5ZM16,16v4" style="fill: none; stroke: #6E6E6E; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                    <path id="primary-2" data-name="primary" d="M8,12H3V4H8a4,4,0,0,1,4,4h0A4,4,0,0,1,8,12ZM3,10v8m8,0L8,12" style="fill: none; stroke: #6E6E6E; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                </g>
                            </svg>
                            <p class="flex items-center">Harga</p>
                        </button>
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