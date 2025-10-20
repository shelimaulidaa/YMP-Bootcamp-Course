<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar tampil di semua halaman --}}
    @include('components.navbar')

    {{-- Konten halaman --}}
    <main class="max-w-7xl mx-auto p-4">
        @yield('content')
    </main>

    {{-- Footer tampil di semua halaman --}}
     @include('components.footer')
</body>
</html>
