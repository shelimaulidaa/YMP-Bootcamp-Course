<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800"
      style="background-image: url('{{ asset('images/bgadmin.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">


    <div class="flex min-h-screen">

        {{-- Sidebar tampil di semua halaman --}}
        @include('components.sidebar')

        {{-- Konten utama (Topbar + Content) --}}
        <div class="flex-1 flex flex-col">

            {{-- Topbar --}}
            <div class="px-5">
                @include('components.topbar')
            </div>

            <main class="flex-1 p-5">
                @yield('content')
            </main>

        </div>
    </div>

</body>
</html>
