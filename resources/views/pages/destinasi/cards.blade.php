<div class="container px-3 mx-auto my-6 md:px-8">
    <!-- Destinasi Cards -->
    <div class="grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4 md:gap-5">
        @forelse ($destinasis as $destinasi)
        <button type="button" class="block open-modal" data-name="{{ $destinasi->name }}"
            data-image="{{ asset('storage/' . $destinasi->image) }}" data-location="{{ $destinasi->location }}"
            data-description="{{ $destinasi->description }}"
            data-price="Rp{{ number_format($destinasi->price, 0, ',', '.') }}" data-modal-target="default-modal"
            data-modal-toggle="default-modal">
            <div
                class="destinasi-card group flex flex-col h-[210px] md:h-[295px] lg:h-[335px] xl:h-[340px] rounded-md md:rounded-card overflow-hidden hover:drop-shadow-sm md:hover:drop-shadow-md bg-white transition-all duration-300 ease-in-out">
                <div class="flex w-full image-container h-[100px] md:h-[150px] overflow-hidden">
                    <img src="{{ asset('storage/' . $destinasi->image) }}" class="object-cover w-full h-[150px] transition-transform duration-300 ease-in-out group-hover:scale-110"
                        alt="{{ $destinasi->name }}">
                </div>
                <div class="flex flex-col p-2 bg-white card-detail h-5/12 md:p-4 md:rounded-card">
                    <p class="text-xs font-bold md:text-sm lg:text-base text-secondary text-start">
                        {{ $destinasi->name }}
                    </p>
                    <p class="flex text-[0.5rem] font-medium text-graytext md:text-xs lg:text-sm mt-1">
                        <svg class="w-4 mr-1 md:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.3996 16.4679C11.7159 15.7735 15.8334 13.2736 15.8334 9.16671C15.8334 5.94505 13.2217 3.33337 10 3.33337C6.77836 3.33337 4.16669 5.94505 4.16669 9.16671C4.16669 13.2736 8.2841 15.7735 9.60049 16.4679C9.85244 16.6008 10.1476 16.6008 10.3996 16.4679ZM10 11.6667C11.3807 11.6667 12.5 10.5474 12.5 9.16671C12.5 7.786 11.3807 6.66671 10 6.66671C8.61931 6.66671 7.50002 7.786 7.50002 9.16671C7.50002 10.5474 8.61931 11.6667 10 11.6667Z"
                                fill="#FF4900" />
                        </svg>
                        {{ $destinasi->location }}
                    </p>
                    <p
                        class="mt-0.5 md:mt-2 text-[0.5rem] text-graytext md:text-xs lg:text-sm line-clamp-2 md:line-clamp-2 lg:line-clamp-3 text-start">
                        {{ $destinasi->description }}
                    </p>
                    <div class="flex items-center justify-between mt-1 md:mt-2 lg:mt-3">
                        <!-- like btn -->
                        <div class="flex items-center gap-1">
                            <div id="like-btn-{{ $destinasi->id }}" class="pointer like-btn">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-[12px] md:h-[18px] stroke-graytext fill-transparent transition-all duration-200"
                                    viewBox="0 0 48 48">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                        d="M15 8C8.925 8 4 12.925 4 19c0 11 13 21 20 23.326C31 40 44 30 44 19c0-6.075-4.925-11-11-11-3.72 0-7.01 1.847-9 4.674A10.99 10.99 0 0 0 15 8" />
                                </svg>
                            </div>
                            <span class="text-graytext like-count"
                                id="like-count-{{ $destinasi->id }}">{{ $destinasi->likes }}</span>
                        </div>

                        <p class="font-semibold text-end md:text-lg lg:text-xl xl:text-2xl text-primary">
                            Rp{{ number_format($destinasi->price, 0, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
        </button>
        @empty
        <p class="col-span-4 text-center text-gray-400">Tidak ada destinasi ditemukan.</p>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="container flex items-center justify-center mx-auto">
        {{ $destinasis->appends(request()->only(['search', 'sort']))->links('vendor.pagination.custom') }}
    </div>
</div>

<script>
    document.querySelectorAll('.like-btn').forEach(function(btn) {
        const id = btn.id.replace('like-btn-', '');
        const svg = btn.querySelector('svg');
        const likeCountSpan = document.getElementById('like-count-' + id);

        // Set tampilan awal
        function setLiked(liked) {
            if (liked) {
                svg.classList.add('fill-primary', 'stroke-primary');
                svg.classList.remove('stroke-graytext', 'fill-transparent');
            } else {
                svg.classList.remove('fill-primary', 'stroke-primary');
                svg.classList.add('stroke-graytext', 'fill-transparent');
            }
        }

        setLiked(localStorage.getItem('liked_destinasi_' + id));

        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const liked = localStorage.getItem('liked_destinasi_' + id);

            if (!liked) {
                // Like
                fetch('/destinasi/' + id + '/like', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        likeCountSpan.innerText = data.likes;
                        setLiked(true);
                        localStorage.setItem('liked_destinasi_' + id, '1');
                    });
            } else {
                // Unlike
                fetch('/destinasi/' + id + '/like?unlike=1', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        likeCountSpan.innerText = data.likes;
                        setLiked(false);
                        localStorage.removeItem('liked_destinasi_' + id);
                    });
            }
        });
    });

    document.querySelectorAll('.open-modal').forEach(function(card) {
        card.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('modal-name').innerText = this.dataset.name;
            document.getElementById('modal-image').src = this.dataset.image;
            document.getElementById('modal-location').innerText = this.dataset.location;
            document.getElementById('modal-description').innerText = this.dataset.description;
            document.getElementById('modal-price').innerText = this.dataset.price;
            document.getElementById('default-modal').classList.remove('hidden');
        });
    });

    // function kirimPesanWA(btn) {
    //     const destinasi = btn.getAttribute('data-destinasi');
    //     const nomor = btn.getAttribute('data-wa');

    //     const pesan = `Halo, saya tertarik untuk memesan paket ${destinasi}. Apakah masih tersedia?`;

    //     const url = `https://wa.me/${nomor}?text=${encodeURIComponent(pesan)}`;
    //     window.open(url, '_blank');
    // }
</script>