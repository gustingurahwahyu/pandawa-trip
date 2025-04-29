<div class="container flex-col px-8 mx-auto my-4 space-y-6">
  <form class="w-full">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
      <div class="absolute z-10 inset-y-0 start-0 flex items-center ps-5 pointer-events-none">
        <svg class="w-8 h-8 text-graytext" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
        </svg>
      </div>
      <input type="search" id="default-search" class="block w-full px-4 py-6 ps-16 text-xl outline-none text-gray-900 rounded-card drop-shadow-md" placeholder="Temukan Paket Ideal Untuk Liburanmu" required />
      <button type="submit" class="text-white absolute end-5 bottom-3 bg-primary focus:outline-none font-medium rounded-lg text-base px-10 py-3.5">
        Cari
      </button>
    </div>
  </form>
  <button class="flex bg-transparent border border-graytext text-lg text-secondary py-2 px-4 rounded-full">
    <img src="image/icon/sort.svg" alt="sort">
    Urutkan
  </button>
</div>