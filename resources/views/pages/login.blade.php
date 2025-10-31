@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex mt-10">
    <!-- Bagian kiri (form login) -->
    <div class="rounded-l-2xl w-3/6 h-[500px] flex flex-col justify-center items-center px-10 bg-white">
        <img src="{{ asset('images/logoymp.png') }}" alt="Logo" class="w-20 mb-8">

        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Masuk ke akunmu</h2>

        {{-- ALERT NOTIFIKASI --}}
        @if (session('success'))
            <div class="w-full max-w-sm mb-4 p-3 text-green-700 bg-green-100 border border-green-300 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="w-full max-w-sm mb-4 p-3 text-red-700 bg-red-100 border border-red-300 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="w-full max-w-sm mb-4 p-3 text-red-700 bg-red-100 border border-red-300 rounded-lg">
                {{ $errors->first() }}
            </div>
        @endif
        {{-- END ALERT --}}

        <form action="{{ route('login.post') }}" method="POST" class="w-full max-w-sm space-y-4">
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full p-3 rounded-full border border-gray-300 focus:outline-yellow-400 ">
            <input type="password" name="password" placeholder="Password" class="w-full p-3 rounded-full border border-gray-300 focus:outline-yellow-400 ">

            <div class="flex justify-between items-center text-sm text-gray-600">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="rounded border-gray-300 text-yellow-500 focus:ring-yellow-400">
                    <span>Ingat saya</span>
                </label>
                <a href="#" class="hover:underline text-yellow-600">Lupa password?</a>
            </div>

            <button type="submit" class="w-full py-3 rounded-full bg-yellow-400 text-white font-semibold hover:bg-yellow-500 transition">
                Masuk
            </button>
        </form>
    </div>

    <!-- Bagian kanan -->
    <div class="rounded-r-2xl w-3/6 h-[500px] bg-cover bg-center relative" style="background-image: url('{{ asset('images/sirkuit.jpg') }}');">
        <div class="absolute rounded-r-2xl inset-0 bg-yellow-500/70"></div>
        <div class="relative flex flex-col justify-center items-center h-full">
            <img src="{{ asset('images/logoymp.png') }}" alt="Logo" class="w-40">
        </div>
    </div>
</div>
@endsection
