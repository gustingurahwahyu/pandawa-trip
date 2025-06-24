<div class="bg-primary">
  <footer class="container px-8 pt-10 lg:pt-16 pb-16 mx-auto text-white footer">
    <div class="flex md:flex-row flex-col mb-5 md:mb-12 lg:mb-16">
      <div class="flex flex-col w-full md:w-8/12 space-y-7 lg:mb-0 mb-5 text-center md:text-left">
        <img class="w-36 lg:w-40 xl:w-48 mx-auto md:mx-0 lg:mx-0" src="{{ asset('image/logo-pandawa-trip-invert.svg') }}" alt="Pandawa Trip">
        <p class="md:pr-32 lg:pr-60 xl:pr-80 text-xs lg:text-sm text-softgray">
          Jangan tunda lagi, saatnya liburan ke Bali dan temukan keindahan serta pengalaman seru yang belum pernah kamu rasakan sebelumnya.
        </p>
        <div class="flex space-x-5 mx-auto md:mx-0">
          <a href="https://www.instagram.com/">
            <svg class="h-8" fill="#F0F0F0" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M20.445 5h-8.891A6.559 6.559 0 0 0 5 11.554v8.891A6.559 6.559 0 0 0 11.554 27h8.891a6.56 6.56 0 0 0 6.554-6.555v-8.891A6.557 6.557 0 0 0 20.445 5zm4.342 15.445a4.343 4.343 0 0 1-4.342 4.342h-8.891a4.341 4.341 0 0 1-4.341-4.342v-8.891a4.34 4.34 0 0 1 4.341-4.341h8.891a4.342 4.342 0 0 1 4.341 4.341l.001 8.891z"></path>
                <path d="M16 10.312c-3.138 0-5.688 2.551-5.688 5.688s2.551 5.688 5.688 5.688 5.688-2.551 5.688-5.688-2.55-5.688-5.688-5.688zm0 9.163a3.475 3.475 0 1 1-.001-6.95 3.475 3.475 0 0 1 .001 6.95zM21.7 8.991a1.363 1.363 0 1 1-1.364 1.364c0-.752.51-1.364 1.364-1.364z"></path>
              </g>
            </svg>
          </a>
          <a href="https://www.facebook.com/" class="flex justify-center items-center">
            <svg class="h-6" fill="#F0F0F0" xmlns="http://www.w3.org/2000/svg" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg>
          </a>
          <a href="https://www.x.com/" class="flex justify-center items-center">
            <svg class="h-6" fill="#F0F0F0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M 2.3671875 3 L 9.4628906 13.140625 L 2.7402344 21 L 5.3808594 21 L 10.644531 14.830078 L 14.960938 21 L 21.871094 21 L 14.449219 10.375 L 20.740234 3 L 18.140625 3 L 13.271484 8.6875 L 9.2988281 3 L 2.3671875 3 z M 6.2070312 5 L 8.2558594 5 L 18.033203 19 L 16.001953 19 L 6.2070312 5 z"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="flex flex-col md:w-4/12 lg:h-48 text-xs lg:text-sm text-center md:text-left space-y-3 text-softgray">
        <p class="font-semibold mt-2 md:mt-0 mb-2 text-white text-base">Peta Situs</p>
        <a href="/">Beranda</a>
        <a href="/paket">Paket</a>
        <a href="/destinasi">Destinasi</a>
        <a href="/tentangKami">Tentang Kami</a>
        <div class="pt-4">
          <button id="backToTopStatic"
            class="hidden md:flex border-2 border-softgray text-softgray hover:bg-softgray hover:text-primary text-xs px-4 py-2.5 rounded transition duration-200">
            <svg class="h-3.5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
            </svg>
            KEMBALI KE ATAS
          </button>
        </div>
      </div>
    </div>
    <div>

    </div>

    <div class="w-full py-7 px-9 text-white bg-secondary rounded-lg text-center text-xs md:text-sm lg:text-base">
      dibuat oleh <b>LimaKala</b>, menggunakan Tailwind Css, Js, Laravel. <b> © 2025 PandawaTrip. All rights reserved.</b>
    </div>

  </footer>
</div>

<script>
  // Back to top button functionality
  document.getElementById('backToTopStatic').addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
</script>