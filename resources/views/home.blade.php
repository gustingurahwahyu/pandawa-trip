<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Pandawa Trip</title>
</head>

<body>
    <nav class="text-white bg-gray-800">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <!-- Logo and Tagline -->
            <div class="flex items-center">
                <span class="text-2xl font-bold">Pandawa<span class="text-orange-500">Trip</span></span>
                <p class="ml-2 text-sm">Your travel companion</p>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-4 md:flex">
                <a href="#" class="text-white hover:text-orange-500">Beranda</a>
                <a href="/paket" class="text-white hover:text-orange-500">Paket</a>
                <a href="/destinasi" class="text-white hover:text-orange-500">Destinasi</a>
                <a href="/about" class="text-white hover:text-orange-500">Tentang Kami</a>
            </div>
            <!-- Login Button -->
            <div>
                <button class="flex items-center px-4 py-2 space-x-2 text-white bg-orange-500 rounded">
                    Masuk
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <h1 class="mt-10 text-3xl font-bold text-center text-red-400">
        Welcome to Pandawa Trip
    </h1>
</body>

</html>
