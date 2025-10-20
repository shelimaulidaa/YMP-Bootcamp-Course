@extends('layouts.main')

@section('title', 'Register')

@section('content')
<div class="min-h-screen flex mt-2">
    <!-- Bagian kiri (form register) -->
    <div class="rounded-l-2xl w-3/6 h-[600px] flex flex-col justify-center items-center px-10 bg-white">
        <img src="{{ asset('images/logoymp.png') }}" alt="Logo" class="w-20 mb-8">

        <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Buat akunmu untuk menggunakan platform</h2>

        <form action="#" method="POST" class="w-full max-w-sm space-y-4">
            @csrf

            <input type="text" name="fullname" placeholder="Nama Lengkap"
                class="w-full p-3 rounded-full border border-gray-300 focus:outline-yellow-400">

            <input type="text" name="username" placeholder="Username"
                class="w-full p-3 rounded-full border border-gray-300 focus:outline-yellow-400">

            <input type="email" name="email" placeholder="Email"
                class="w-full p-3 rounded-full border border-gray-300 focus:outline-yellow-400">

            <input type="password" name="password" placeholder="Password"
                class="w-full p-3 rounded-full border border-gray-300 focus:outline-yellow-400">

            <input type="tel" name="phone" placeholder="No Telepon"
                class="w-full p-3 rounded-full border border-gray-300 focus:outline-yellow-400">

            <div class="flex items-center space-x-2 text-sm text-gray-600">
                <input type="checkbox" id="privacy" class="rounded border-gray-300 text-yellow-500 focus:ring-yellow-400">
                <label for="privacy">Saya sudah memahami penjelasan kebijakan privasi</label>
            </div>

            <button type="submit"
                class="w-full py-3 rounded-full bg-yellow-400 text-white font-semibold hover:bg-yellow-500 transition">
                Buat Akun
            </button>
        </form>

        <p class="text-gray-600 mt-6 text-sm">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-yellow-500 hover:underline font-medium">Masuk di sini</a>
        </p>
    </div>

    <!-- Bagian kanan (gambar background) -->
    <div class="rounded-r-2xl w-3/6 h-[600px] bg-cover bg-center relative"
        style="background-image: url('{{ asset('images/sirkuit.jpg') }}');">
        <div class="absolute rounded-r-2xl inset-0 bg-yellow-500/70"></div>
        <div class="relative flex flex-col justify-center items-center h-full">
            <img src="{{ asset('images/logoymp.png') }}" alt="Logo" class="w-40">
        </div>
    </div>
</div>
@endsection
