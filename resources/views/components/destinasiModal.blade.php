<!-- Modal toggle
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button> -->

<!-- Main modal -->
<div id="default-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-[999] hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-5xl max-h-full py-8 md:py-12 px-8 md:px-14 bg-white rounded-card">

        <!-- Close Button -->
        <div class="absolute z-[98] top-0 right-0 md:top-4 md:right-4">
            <a href="/destinasi" type="button" class="text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center data-modal-hide=" default-modal">
                <svg class="w-[18px] md:w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" fill="none">
                    <path d="M18 0.5C8.25 0.5 0.5 8.25 0.5 18C0.5 27.75 8.25 35.5 18 35.5C27.75 35.5 35.5 27.75 35.5 18C35.5 8.25 27.75 0.5 18 0.5ZM24.75 26.75L18 20L11.25 26.75L9.25 24.75L16 18L9.25 11.25L11.25 9.25L18 16L24.75 9.25L26.75 11.25L20 18L26.75 24.75L24.75 26.75Z" fill="#FF4900" />
                </svg>
                <span class="sr-only">Close modal</span>
            </a>
        </div>

        <!-- Modal content -->
        <div class="grid grid-cols-1 md:grid-cols-2 relative shadow-sm gap-4 md:gap-7 lg:gap-10">

            <!-- Modal Images -->
            <div class="flex flex-col gap-y-2 md:gap-y-5 justify-center">
                <!-- Big Image -->
                <div class="image-big-container w-full rounded-card overflow-hidden h-40 md:h-[25rem]">
                    <img src="image/background-paket-detail.jpg" alt="barong dance" class="h-full w-full object-cover ">
                </div>
            </div>

            <!-- Modal Detail -->
            <div class="flex flex-col space-y-2 md:space-y-3 lg:space-y-4 justify-around">
                <div class="flex flex-col gap-y-2 md:gap-y-3.5 lg:gap-y-5">
                    <h1 class="text-lg md:text-3xl lg:text-4xl font-bold text-secondary">
                        Monkey Forest
                    </h1>
                    <p class="flex font-medium text-xs md:text-sm lg:text-base text-graytext">
                        <svg class="mr-1 md:mr-2 lg:mr-3 w-3 md:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3996 16.4679C11.7159 15.7735 15.8334 13.2736 15.8334 9.16671C15.8334 5.94505 13.2217 3.33337 10 3.33337C6.77836 3.33337 4.16669 5.94505 4.16669 9.16671C4.16669 13.2736 8.2841 15.7735 9.60049 16.4679C9.85244 16.6008 10.1476 16.6008 10.3996 16.4679ZM10 11.6667C11.3807 11.6667 12.5 10.5474 12.5 9.16671C12.5 7.786 11.3807 6.66671 10 6.66671C8.61931 6.66671 7.50002 7.786 7.50002 9.16671C7.50002 10.5474 8.61931 11.6667 10 11.6667Z" fill="#FF4900" />
                        </svg>
                        Ubud, Gianyar
                    </p>
                    <p class="text-[10px] md:text-sm lg:text-base text-graytext">
                        Ubud Trip menawarkan pengalaman budaya dan alam yang memikat di jantung Bali. Nikmati keindahan sawah terasering, kunjungi pura kuno, jelajahi pasar seni tradisional, dan rasakan ketenangan di tengah alam. Cocok untuk pelancong yang mencari kedamaian, inspirasi, dan petualangan khas Bali yang tak terlupakan.
                    </p>
                </div>
                <div class="flex flex-col lg:flex-row justify-between items-end lg:items-center gap-2 lg:gap-0">
                    <p class="text-xl md:text-3xl lg:text-4xl font-semibold text-primary">
                        Rp515.200
                    </p>
                    <a href="#" class="items-center px-4 md:px-6 py-2 md:py-2.5 lg:px-8 lg:py-3.5 text-white text-xs md:text-base font-medium md:font-semibold bg-primary rounded-md brightness-100 hover:brightness-75 transition-all ease-out duration-300">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>