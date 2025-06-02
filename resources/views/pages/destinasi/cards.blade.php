<div class="container px-3 mx-auto my-6 md:px-8">

  <!-- Destinasi Cards -->
  <div class="grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4 md:gap-5">
    @forelse ($destinasis as $destinasi)
    <a href="#" data-modal-target="default-modal" data-modal-toggle="default-modal" class="block">
      <div
        class="destinasi-card flex flex-col h-[220px] md:h-[290px] lg:h-[340px] xl:h-[380px] rounded-md md:rounded-card overflow-hidden drop-shadow-sm md:drop-shadow-md xl:drop-shadow-lg bg-white">
        <div class="flex w-full image-container h-[150px]">
          <img src="{{ asset('storage/' . $destinasi->image) }}" class="object-cover w-full h-full"
            alt="{{ $destinasi->name }}">
        </div>
        <div class="flex flex-col p-2 bg-white rounded-md card-detail h-5/12 md:p-4 md:rounded-card">
          <p class="font-semibold md:text-lg lg:text-xl text-secondary">
            {{ $destinasi->name }}
          </p>
          <p class="flex text-xs font-medium text-graytext md:text-sm lg:text-base">
            <svg class="w-4 mr-1 md:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10.3996 16.4679C11.7159 15.7735 15.8334 13.2736 15.8334 9.16671C15.8334 5.94505 13.2217 3.33337 10 3.33337C6.77836 3.33337 4.16669 5.94505 4.16669 9.16671C4.16669 13.2736 8.2841 15.7735 9.60049 16.4679C9.85244 16.6008 10.1476 16.6008 10.3996 16.4679ZM10 11.6667C11.3807 11.6667 12.5 10.5474 12.5 9.16671C12.5 7.786 11.3807 6.66671 10 6.66671C8.61931 6.66671 7.50002 7.786 7.50002 9.16671C7.50002 10.5474 8.61931 11.6667 10 11.6667Z"
                fill="#FF4900" />
            </svg>
            {{ $destinasi->location }}
          </p>
          <p
            class="mt-2 text-xs text-graytext md:text-sm lg:text-base line-clamp-2 md:line-clamp-2 lg:line-clamp-3">
            {{ $destinasi->description }}
          </p>
          <p class="mt-2 text-lg font-semibold text-end md:text-xl lg:text-2xl text-primary">
            Rp{{ number_format($destinasi->price, 0, ',', '.') }}
          </p>
        </div>
      </div>
    </a>
    @empty
    <p class="col-span-4 text-center text-gray-400">Tidak ada destinasi ditemukan.</p>
    @endforelse
  </div>




  <!-- Pagination -->
  <div class="container flex items-center justify-center mx-auto">
    <div class="flex mt-4 space-x-2 md:mt-6 lg:mb-6 lg:mt-10 xl:space-x-3">

      <!-- prev -->
      <a href=""
        class="flex items-center justify-center w-8 h-8 border-2 rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 border-borderColor">
        <svg class="pe-[1px] md:pe-[2px] w-3 md:w-4 lg:w-5" fill="#242424" version="1.1" id="Layer_1"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="-9.9 -9.9 349.80 349.80" xml:space="preserve" stroke="#242424" stroke-width="16.5">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path id="XMLID_92_"
              d="M111.213,165.004L250.607,25.607c5.858-5.858,5.858-15.355,0-21.213c-5.858-5.858-15.355-5.858-21.213,0.001 l-150,150.004C76.58,157.211,75,161.026,75,165.004c0,3.979,1.581,7.794,4.394,10.607l150,149.996 C232.322,328.536,236.161,330,240,330s7.678-1.464,10.607-4.394c5.858-5.858,5.858-15.355,0-21.213L111.213,165.004z">
            </path>
          </g>
        </svg>
      </a>

      <!-- Nomor Pagination -->
      <a href=""
        class="flex items-center justify-center w-8 h-8 text-white rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 bg-primary">
        <p class="md:font-medium md:text-lg lg:text-xl">
          1
        </p>
      </a>
      <a href=""
        class="flex items-center justify-center w-8 h-8 border-2 rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 text-secondary border-borderColor">
        <p class="md:font-medium md:text-lg lg:text-xl">
          2
        </p>
      </a>
      <a href=""
        class="flex items-center justify-center w-8 h-8 border-2 rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 text-secondary border-borderColor">
        <p class="md:font-medium md:text-lg lg:text-xl">
          3
        </p>
      </a>

      <!-- next -->
      <a href=""
        class="flex items-center justify-center w-8 h-8 border-2 rounded-lg md:w-10 lg:w-12 md:h-10 lg:h-12 border-borderColor">
        <svg class="pe-[1px] md:pe-[2px] w-3 md:w-4 lg:w-5" fill="#242424" height="20px" width="20px"
          version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-9.9 -9.9 349.80 349.80" xml:space="preserve"
          stroke="#242424" stroke-width="16.5" transform="matrix(-1, 0, 0, 1, 0, 0)">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path id="XMLID_92_"
              d="M111.213,165.004L250.607,25.607c5.858-5.858,5.858-15.355,0-21.213c-5.858-5.858-15.355-5.858-21.213,0.001 l-150,150.004C76.58,157.211,75,161.026,75,165.004c0,3.979,1.581,7.794,4.394,10.607l150,149.996 C232.322,328.536,236.161,330,240,330s7.678-1.464,10.607-4.394c5.858-5.858,5.858-15.355,0-21.213L111.213,165.004z">
            </path>
          </g>
        </svg>
      </a>

    </div>
  </div>

</div>