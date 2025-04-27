<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo-pandawa-trip-invert.svg">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Pandawa Trip')</title>
</head>
<body class="bg-softgray">
    @include('components.navbar')

    @yield('content')

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>