<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800"
      style="background-image: url('{{ asset('images/bgadmin.png') }}');
             background-size: cover;
             background-position: center;
             background-repeat: no-repeat;">

    <div class="flex h-screen overflow-hidden">

        {{-- Sidebar tetap di kiri dan tidak ikut scroll --}}
        <aside class="w-64 bg-white/80 backdrop-blur-md shadow-lg fixed top-0 left-0 h-screen z-20">
            @include('components.sidebar')
        </aside>

        {{-- Konten utama --}}
        <div class="flex-1 ml-64 flex flex-col overflow-y-auto">

            {{-- Topbar --}}
            <div class="px-5 sticky top-0 bg-white/70 backdrop-blur-md z-10 shadow">
                @include('components.topbar')
            </div>

            {{-- Konten halaman --}}
            <main class="flex-1 p-5">
                @yield('content')
            </main>

        </div>
    </div>

</body>
</html>
