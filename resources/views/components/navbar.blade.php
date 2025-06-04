<nav class="bg-white/0 sticky top-0 z-[11] transtion-all ease-out duration-100" id="navbar">
  <div class="container flex items-center justify-between p-5 lg:p-8 mx-auto">

    <!-- Logo and Tagline -->
    <div class="flex items-center">
      <img class="w-36 md:w-48 xl:w-56" src="{{ asset('image/logo-pandawa-trip.svg') }}" alt="Pandawa Trip">
    </div>

    <!-- Navigation Links -->
    <div id="navbar-element" class="space-x-8 lg:flex hidden">
      <a href="/" class="text-graytext font-medium">Beranda</a>
      <a href="/paket" class="text-graytext font-medium">Paket</a>
      <a href="/destinasi" class="text-graytext font-medium">Destinasi</a>
      <a href="/tentangKami" class="text-graytext font-medium">Tentang Kami</a>
    </div>

    <!-- Pesan Sekarang dan Hamburger -->
    <div class="flex space-x-5 items-center">

      <!-- Pesan Sekarang Button -->
      <div class="hidden md:flex">
        <a href="/paket" class=" px-8 py-3.5 text-white font-semibold bg-primary rounded-md brightness-100 hover:brightness-75 transition-all ease-out duration-300">
          Pesan Sekarang
        </a>
      </div>

      <!-- hamburger -->
      <div class="lg:hidden">

        <!-- drawer init and show -->
        <div class="text-center">
          <button class="text-white font-medium rounded-lg text-sm focus:outline-none" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" data-drawer-backdrop="false" aria-controls="drawer-navigation">
            <svg class="md:w-10 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
              <path d="M4 18L20 18" stroke="#6E6E6E" stroke-width="2" stroke-linecap="round" />
              <path d="M4 12L20 12" stroke="#6E6E6E" stroke-width="2" stroke-linecap="round" />
              <path d="M4 6L20 6" stroke="#6E6E6E" stroke-width="2" stroke-linecap="round" />
            </svg>
          </button>
        </div>

        <!-- drawer component -->
        <div id="drawer-navigation" class="fixed top-0 left-0 z-[9999] h-screen p-5 overflow-y-auto transition-transform -translate-x-full bg-primary w-full" tabindex="-1" aria-labelledby="drawer-navigation-label">
          <h5 id="drawer-navigation-label" class="text-base font-semibold text-white uppercase">Menu</h5>
          <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center transition-all ease-out duration-150">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
          </button>
          <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
              <li>
                <a href="/" class="flex items-center p-2 text-white rounded-lg group">
                  <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill=" #ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.398 491.398" xml:space="preserve" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <g>
                        <g id="Icons_19_">
                          <path d="M481.765,220.422L276.474,15.123c-16.967-16.918-44.557-16.942-61.559,0.023L9.626,220.422 c-12.835,12.833-12.835,33.65,0,46.483c12.843,12.842,33.646,12.842,46.487,0l27.828-27.832v214.872 c0,19.343,15.682,35.024,35.027,35.024h74.826v-97.62c0-7.584,6.146-13.741,13.743-13.741h76.352 c7.59,0,13.739,6.157,13.739,13.741v97.621h74.813c19.346,0,35.027-15.681,35.027-35.024V239.091l27.812,27.815 c6.425,6.421,14.833,9.63,23.243,9.63c8.408,0,16.819-3.209,23.242-9.63C494.609,254.072,494.609,233.256,481.765,220.422z"></path>
                        </g>
                      </g>
                    </g>
                  </svg>
                  <span class="ms-3">Beranda</span>
                </a>
              </li>
              <li>
                <a href="/paket" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="#ffffff" viewBox="-64 0 512 512" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path d="M336 160H48c-26.51 0-48 21.49-48 48v224c0 26.51 21.49 48 48 48h16v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h128v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h16c26.51 0 48-21.49 48-48V208c0-26.51-21.49-48-48-48zm-16 216c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zM144 48h96v80h48V48c0-26.51-21.49-48-48-48h-96c-26.51 0-48 21.49-48 48v80h48V48z"></path>
                    </g>
                  </svg>
                  <span class="ms-3">Paket</span>
                </a>
              </li>
              <li>
                <a href="/destinasi" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="#ffffff" viewBox="0 -32 576 576" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path>
                    </g>
                  </svg>
                  <span class="ms-3">Destinasi</span>
                </a>
              </li>
              <li>
                <a href="/tentangKami" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <rect width="16" height="16" id="icon-bound" fill="none"></rect>
                      <path d="M14,12.5C14,11.837 13.737,11.201 13.268,10.732C12.799,10.263 12.163,10 11.5,10C9.447,10 6.553,10 4.5,10C3.837,10 3.201,10.263 2.732,10.732C2.263,11.201 2,11.837 2,12.5C2,14.147 2,15 2,15L14,15C14,15 14,14.147 14,12.5ZM12,6L14,6C14.53,6 15.039,6.211 15.414,6.586C15.789,6.961 16,7.47 16,8L16,11L14.663,11C14.101,9.818 12.896,9 11.5,9L10.645,9C11.476,8.267 12,7.194 12,6ZM1.337,11L0,11C0,11 0,9.392 0,8C0,7.47 0.211,6.961 0.586,6.586C0.961,6.211 1.47,6 2,6L4,6C4,7.194 4.524,8.267 5.355,9L4.5,9C3.104,9 1.899,9.817 1.337,11ZM8,3C9.656,3 11,4.344 11,6C11,7.656 9.656,9 8,9C6.344,9 5,7.656 5,6C5,4.344 6.344,3 8,3ZM4.127,4.996C4.085,4.999 4.043,5 4,5C2.896,5 2,4.104 2,3C2,1.896 2.896,1 4,1C4.954,1 5.753,1.67 5.952,2.564C5.061,3.097 4.394,3.966 4.127,4.996ZM10.048,2.564C10.247,1.67 11.046,1 12,1C13.104,1 14,1.896 14,3C14,4.104 13.104,5 12,5C11.957,5 11.915,4.999 11.873,4.996C11.606,3.966 10.939,3.097 10.048,2.564Z"></path>
                    </g>
                  </svg>
                  <span class="ms-3">Tentang Kami</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>



    </div>
  </div>
</nav>

<script>
  const navbar = document.getElementById('navbar');

  window.addEventListener("scroll", () => {
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

    if (scrollTop > 100) {
      navbar.classList.add('bg-white/100');
      navbar.classList.remove('bg-white/0');
    } else {
      navbar.classList.add('bg-white/0');
      navbar.classList.remove('bg-white/100');
    }
  });

  // Ketika Navbar berada di detail
  if (window.location.pathname.startsWith('/paket') ||
    window.location.pathname.startsWith('/destinasi')
  ) {
    // Hilangkan sticky-top navbar
    navbar.classList.remove('sticky');
    navbar.classList.remove('top-0');


  }
  // ketika navbar berada di page biasa
  else {

  }

  // navbar active and inactive element style
  const navbarElement = document.getElementById('navbar-element');
  const navbarElementLinks = navbarElement.querySelectorAll('a');

  navbarElementLinks.forEach(link => {
    const linkPath = new URL(link.href).pathname;
    const currentPath = window.location.pathname;

    // Custom logic untuk menentukan active link
    let isActive = false;

    if (linkPath === '/') {
      isActive = currentPath === '/';
    } else if (linkPath === '/paket') {
      // Aktif saat di /paket atau /PDetail
      isActive = currentPath.startsWith('/paket') || currentPath.startsWith('/PDetail');
    } else if (linkPath === '/destinasi') {
      isActive = currentPath.startsWith('/destinasi');
    } else {
      isActive = currentPath.startsWith(linkPath);
    }

    if (isActive) {
      link.classList.remove("text-graytext");
      link.classList.add("text-secondary", "border-primary", "border-b-2", "font-semibold");
    } else {
      link.classList.remove("text-secondary", "border-primary", "border-b-2", "font-semibold");
      link.classList.add("text-graytext");
    }
  });
</script>