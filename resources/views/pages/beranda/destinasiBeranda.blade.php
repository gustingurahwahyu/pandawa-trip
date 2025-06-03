<!-- Fixed Splide Implementation for Laravel Blade + Tailwind -->
<div class="container px-8 py-10 mx-auto lg:py-20 bg-softgray">
    <!-- CSS Fixes -->
    <style>
        /* Fix for the jumping issue with Splide */
        .splide__track {
            overflow: visible !important;
        }

        /* Ensure slides stay properly sized */
        .splide__slide {
            height: auto;
            margin-right: 1.5rem;
        }
    </style>

    <div class="flex flex-col items-center justify-between mx-auto md:flex-row">
        <h2
            class="w-full lg:w-6/12 text-2xl md:pr-60 text-center lg:pr-0 lg:text-4xl/[60px] md:text-start font-bold text-secondary mb-6 md:mb-0">
            Tempat Keren yang
            <span class="text-primary">Wajib Kamu</span> Kunjungi
        </h2>
        <div class="flex space-x-2">
            <button id="prev-arrow"
                class="flex items-center justify-center w-8 h-8 transition rounded-full splide__arrow--prev lg:w-10 lg:h-10 hover:opacity-80">
                <img class="w-[20px] lg:w-[24px]" src="image/icon/arrow-left.svg" alt="arrow left">
            </button>
            <button id="next-arrow"
                class="flex items-center justify-center w-8 h-8 transition rounded-full splide__arrow--next lg:w-10 lg:h-10 hover:opacity-80">
                <img class="w-[20px] lg:w-[24px]" src="image/icon/arrow-right.svg" alt="arrow right">
            </button>
        </div>
    </div>

    <div id="destination-splide" class="mt-8 overflow-hidden splide" aria-label="Destinasi Terbaik">
        <div class="splide__track orverflow-hidden">
            <ul class="flex splide__list">
                @foreach ($destinasis as $destinasi)
                    <li class="splide__slide">
                        <div
                            class="flex-col justify-center md:w-[21rem] lg:w-[19rem] xl:w-[24rem] h-[27rem] bg-white rounded-card">
                            <div class="w-full overflow-hidden bg-white image-container h-80 rounded-card">
                                <img class="object-cover w-full h-full"
                                    src="{{ asset('storage/' . $destinasi->image) }}" alt="{{ $destinasi->name }}">
                            </div>
                            <div class="flex-col p-5 space-y-3">
                                <p class="text-2xl font-semibold text-secondary">{{ $destinasi->name }}</p>
                                <p class="flex font-medium text-secondary">
                                    <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.3996 16.4679C11.7159 15.7735 15.8334 13.2736 15.8334 9.16671C15.8334 5.94505 13.2217 3.33337 10 3.33337C6.77836 3.33337 4.16669 5.94505 4.16669 9.16671C4.16669 13.2736 8.2841 15.7735 9.60049 16.4679C9.85244 16.6008 10.1476 16.6008 10.3996 16.4679ZM10 11.6667C11.3807 11.6667 12.5 10.5474 12.5 9.16671C12.5 7.786 11.3807 6.66671 10 6.66671C8.61931 6.66671 7.50002 7.786 7.50002 9.16671C7.50002 10.5474 8.61931 11.6667 10 11.6667Z"
                                            fill="#FF4900" />
                                    </svg>
                                    {{ $destinasi->location ?? '-' }}
                                </p>
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

<!-- Script inisialisasi Splide -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get reference to navigation buttons
        const prevButton = document.getElementById('prev-arrow');
        const nextButton = document.getElementById('next-arrow');

        // Set initial state - prev button gray, next button orange
        prevButton.classList.add('bg-graytext');
        nextButton.classList.add('bg-primary');

        var splide = new Splide('#destination-splide', {
            type: 'slide',
            perPage: 3,
            perMove: 1,
            gap: '1.5rem',
            drag: 'free',
            snap: true,
            pagination: false,
            arrows: false,
            heightRatio: 0.5,
            fixedHeight: '450px',
            a11y: {
                liveRegion: false
            },
            breakpoints: {
                1280: {
                    perPage: 2,
                },
                1024: {
                    perPage: 3,
                },
                768: {
                    perPage: 2,
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
                    'splide__arrow--prev flex w-8 lg:w-10 h-8 lg:h-10 items-center justify-center rounded-full bg-graytext hover:opacity-80 transition';
            } else {
                // Not at beginning, prev should be orange
                prevButton.className =
                    'splide__arrow--prev flex w-8 lg:w-10 h-8 lg:h-10 items-center justify-center rounded-full bg-primary hover:opacity-80 transition';
            }

            // next button
            if (currentIndex >= lastIndex) {
                // At the end, next should be gray
                nextButton.className =
                    'splide__arrow--next flex w-8 lg:w-10 h-8 lg:h-10 items-center justify-center rounded-full bg-graytext hover:opacity-80 transition';
            } else {
                // Not at end, next should be orange
                nextButton.className =
                    'splide__arrow--next flex w-8 lg:w-10 h-8 lg:h-10 items-center justify-center rounded-full bg-primary hover:opacity-80 transition';
            }
        }

        function updateButtonStylesByTranslateX() {
            setTimeout(function() {
                // Ambil semua slides
                const slides = document.querySelectorAll('#destination-splide .splide__slide');
                const firstSlide = slides[0];
                const lastSlide = slides[slides.length - 1];
                const lastTranslateX = ((slides.length - 3) * (-408)) + 16 + 392;

                const splideList = document.getElementById('destination-splide-list');
                // Ambil nilai transform dari inline style
                const transform = splideList.style.transform; // Contoh: "translateX(-2432px)"
                // Ekstrak angka translateX
                const translateX = parseFloat(transform.match(/translateX\((-?\d+\.?\d*)px\)/)[1]);

                // Cek apakah slide pertama aktif
                if (translateX >= -392) {
                    prevButton.classList.remove('bg-primary');
                    prevButton.classList.add('bg-graytext');
                } else {
                    prevButton.classList.remove('bg-graytext');
                    prevButton.classList.add('bg-primary');
                }

                // Cek apakah slide terakhir aktif
                if (translateX <= lastTranslateX) {
                    nextButton.classList.remove('bg-primary');
                    nextButton.classList.add('bg-graytext');
                } else if (translateX > lastTranslateX - 16) {
                    nextButton.classList.remove('bg-graytext');
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
            setTimeout(updateButtonStyles, 100);
        });

        nextButton.addEventListener('click', function() {
            splide.go('>');
            setTimeout(updateButtonStyles, 100);
        });
    });
</script>
