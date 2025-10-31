{{-- resources/views/components/app-layout.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard' }}</title>
    @vite('resources/css/app.css') {{-- kalau pakai Vite --}}
</head>
<body class="bg-gray-100">
    <header>
        {{-- navbar/admin header --}}
    </header>

    <main>
        {{ $slot }}
    </main>
</body>
</html>
