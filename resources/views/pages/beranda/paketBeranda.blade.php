<!-- splide with fixes -->
<div class="container px-8 py-10 mx-auto lg:pt-20 bg-softgray">
  <!-- Add this style block to fix the jumping issue -->
  <style>
    /* Fix for the jumping issue with Splide */
    .splide__sr {
      position: absolute !important;
      height: 1px !important;
      width: 1px !important;
      overflow: hidden !important;
      clip: rect(1px, 1px, 1px, 1px) !important;
      border: 0 !important;
      padding: 0 !important;
      margin: 0 !important;
    }

    .splide__container {
      position: relative;
    }

    .splide__track {
      overflow: visible !important;
    }
  </style>

  <div class="flex flex-col items-center justify-between mx-auto mb-10 md:flex-row">
    <h2
      class="w-full md:w-5/12 text-2xl lg:text-4xl/[60px] font-bold text-secondary text-center md:text-start mb-6 md:mb-0">
      Paket Terbaik dari <span class="text-primary">Pandawa Trip</span>
    </h2>

    <div class="flex space-x-2 splide__arrows">
      <button
        class="flex items-center justify-center w-8 h-8 transition rounded-full splide__arrow--prev lg:w-10 lg:h-10 bg-graytext hover:opacity-80">
        <img class="w-[20px] lg:w-[24px]" src="image/icon/arrow-left.svg" alt="arrow left">
      </button>
      <button
        class="flex items-center justify-center w-8 h-8 transition rounded-full splide__arrow--next lg:w-10 lg:h-10 bg-primary hover:opacity-80">
        <img class="w-[20px] lg:w-[24px]" src="image/icon/arrow-right.svg" alt="arrow right">
      </button>
    </div>
  </div>

  <div id="paket-splide" class="overflow-hidden splide" aria-label="Paket Terbaik">
    <div class="pb-20 splide__track lg:pb-28">
      <ul class="splide__list flex h-[20rem] lg:h-[26rem]">
        @foreach ($pakets as $paket)
        <li class="splide__slide">
          <div class="flex group justify-center relative md:[13.6rem] lg:w-[19rem] xl:w-72 mx-auto">
            <div
              class="image-container w-full h-[20rem] lg:h-[26rem] bg-white rounded-card overflow-hidden">
              <img class="object-cover w-full h-full transition-transform duration-200 ease-in-out group-hover:scale-105" src="{{ asset('storage/' . $paket->image) }}"
                alt="{{ $paket->name }}">
            </div>
            <div
              class="card-detail w-[15rem] md:w-[12rem] lg:w-[17rem] h-28 lg:h-44 bg-white z-10 rounded-card absolute top-64 lg:top-80 mx-auto drop-shadow-sm p-3 lg:p-5 space-y-1 lg:space-y-4 transition-all duration-200 ease-in-out group-hover:drop-shadow-md">
              <p class="flex text-xs font-medium lg:text-base text-secondary">
                <svg class="mr-2 w-[15px] lg:w-[20px]" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10.3996 16.4679C11.7159 15.7735 15.8334 13.2736 15.8334 9.16671C15.8334 5.94505 13.2217 3.33337 10 3.33337C6.77836 3.33337 4.16669 5.94505 4.16669 9.16671C4.16669 13.2736 8.2841 15.7735 9.60049 16.4679C9.85244 16.6008 10.1476 16.6008 10.3996 16.4679ZM10 11.6667C11.3807 11.6667 12.5 10.5474 12.5 9.16671C12.5 7.786 11.3807 6.66671 10 6.66671C8.61931 6.66671 7.50002 7.786 7.50002 9.16671C7.50002 10.5474 8.61931 11.6667 10 11.6667Z"
                    fill="#FF4900" />
                </svg>
                {{ $paket->lokasi ?? 'Bali, Indonesia' }}
              </p>
              <p class="text-lg font-semibold lg:text-xl text-secondary">{{ $paket->name }}</p>
              <div class="flex items-center justify-between">
                <p class="text-graytext text-medium lg:text-xl">
                  Rp{{ number_format($paket->price, 0, ',', '.') }}</p>
                <a href="{{ route('show', $paket->id) }}"
                  class="flex items-center justify-center transition rounded-full w-7 lg:w-10 h-7 lg:h-10 bg-primary hover:opacity-80">
                  <svg class="w-[18px] lg:w-[24px] ms-0.5" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 6L15 12L9 18" stroke="white" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

<!-- Splide JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get reference to navigation buttons
    const prevButton = document.querySelector('.splide__arrow--prev');
    const nextButton = document.querySelector('.splide__arrow--next');

    // Set initial state - prev button gray, next button orange
    prevButton.classList.add('bg-graytext/50');
    nextButton.classList.add('bg-primary');

    var splide = new Splide('#paket-splide', {
      type: 'slide',
      perPage: 4,
      perMove: 1,
      gap: '1.5rem',
      snap: true,
      drag: 'free',
      pagination: false,
      arrows: false,
      heightRatio: 0.5,
      fixedHeight: '450px',
      a11y: {
        liveRegion: false
      },
      breakpoints: {
        1280: {
          perPage: 3,
        },
        1024: {
          perPage: 3,
        },
        768: {
          perPage: 3,
        },
        640: {
          perPage: 1,
        }
      }
    });


    // A simple approach - just check if we can move in each direction
    function updateButtonStyles() {
      const currentIndex = splide.index;
      const lastIndex = splide.length - splide.options.perPage;

      // prev button
      if (currentIndex <= 0) {
        prevButton.className =
          'splide__arrow--prev flex w-8 lg:w-10 h-8 lg:h-10 items-center justify-center rounded-full bg-graytext/50 hover:opacity-80 transition';
      } else {
        // Not at beginning, prev should be orange
        prevButton.className =
          'splide__arrow--prev flex w-8 lg:w-10 h-8 lg:h-10 items-center justify-center rounded-full bg-primary hover:opacity-80 transition';
      }

      // next button
      if (currentIndex >= lastIndex) {
        // At the end, next should be gray
        nextButton.className =
          'splide__arrow--next flex w-8 lg:w-10 h-8 lg:h-10 items-center justify-center rounded-full bg-graytext/50 hover:opacity-80 transition';
      } else {
        // Not at end, next should be orange
        nextButton.className =
          'splide__arrow--next flex w-8 lg:w-10 h-8 lg:h-10 items-center justify-center rounded-full bg-primary hover:opacity-80 transition';
      }
    }

    function updateButtonStylesByTranslateX() {
      setTimeout(function() {
        // Ambil semua slides
        const slides = document.querySelectorAll('#paket-splide .splide__slide');
        const firstSlide = slides[0];
        const lastSlide = slides[slides.length - 1];
        const lastTranslateX = ((slides.length - 4) * (-310));

        const splideList = document.getElementById('paket-splide-list');
        // Ambil nilai transform dari inline style
        const transform = splideList.style.transform; // Contoh: "translateX(-2432px)"
        // Ekstrak angka translateX
        const translateX = parseFloat(transform.match(/translateX\((-?\d+\.?\d*)px\)/)[1]);

        console.log(translateX);
        console.log(lastTranslateX);

        // Cek apakah slide pertama aktif
        if (translateX >= -294) {
          prevButton.classList.remove('bg-primary');
          prevButton.classList.add('bg-graytext/50');
        } else {
          prevButton.classList.remove('bg-graytext/50');
          prevButton.classList.add('bg-primary');
        }

        // Cek apakah slide terakhir aktif
        if (translateX <= lastTranslateX) {
          nextButton.classList.remove('bg-primary');
          nextButton.classList.add('bg-graytext/50');
        } else if (translateX > lastTranslateX - 16) {
          nextButton.classList.remove('bg-graytext/50');
          nextButton.classList.add('bg-primary');
        }
      }, 50);
    }

    // Gunakan fungsi ini untuk semua event, termasuk drag
    splide.on('mounted move dragging dragged', updateButtonStylesByTranslateX);

    // Tambahkan juga listener untuk mouseup/touchend events
    splide.root.addEventListener('mouseup', updateButtonStylesByTranslateX);
    splide.root.addEventListener('touched', updateButtonStylesByTranslateX);

    splide.mount();

    // Custom navigation
    prevButton.addEventListener('click', function() {
      splide.go('<');
      setTimeout(updateButtonStyles, 50);
    });

    nextButton.addEventListener('click', function() {
      splide.go('>');
      setTimeout(updateButtonStyles, 50);
    });
  });
</script>