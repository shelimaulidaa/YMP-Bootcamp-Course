@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-[url('/images/bg-circuit.png')] bg-cover bg-center bg-no-repeat bg-fixed bg-opacity-20">
    <div class="container mx-auto py-10">
        <h2 class="text-2xl font-semibold mb-8 text-gray-800">
            Yuk-Mari Gabung Kelasnya Sekarang
        </h2>

        <!-- Semua kartu di dalam satu grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">

            <!-- Bootcamp 1 -->
            <div class="w-96 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-5">
                <div class="relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('images/posterbc1-2.jpg') }}"
                        alt="Bootcamp Class"
                        class="w-full h-37 object-cover rounded-2xl border border-b-black">

                    <!-- Garis warna di dalam gambar -->
                    <div class="absolute top-4 right-0 flex flex-col gap-1 items-end pr-0">
                        <div class="w-10 h-1 bg-red-500 rounded"></div>
                        <div class="w-10 h-1 bg-blue-600 rounded"></div>
                    </div>
                </div>

                <p class="font-bold text-gray-900 mt-2">Bootcamp 1 - Red Team & Blue Team</p>
                <div class="mt-2">
                    <p class="text-red-500 line-through text-sm">Rp2.500.000</p>
                    <p class="text-lg font-semibold text-gray-700">Rp899.000</p>
                </div>
                <div class="text-center">
                    <button class="mt-4 px-10 py-2 bg-yellow-400 hover:bg-yellow-300 rounded-2xl font-semibold text-sm shadow-lg">
                        Beli Sekarang
                    </button>
                </div>
            </div>

            <!-- Bootcamp 2 -->
            <div class="w-96 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-5">
                <div class="relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('images/posterbc2-2.jpg') }}"
                        alt="Bootcamp Class"
                        class="w-full h-37 object-cover rounded-2xl border border-b-black">

                    <!-- Garis warna di dalam gambar -->
                    <div class="absolute top-4 right-0 flex flex-col gap-1 items-end pr-0">
                        <div class="w-10 h-1 bg-red-500 rounded"></div>
                        <div class="w-10 h-1 bg-blue-600 rounded"></div>
                    </div>
                </div>

                <p class="font-bold text-gray-900 mt-2">Bootcamp 2 - Red Team Operation</p>
                <div class="mt-2">
                    <p class="text-red-500 line-through text-sm">Rp3.500.000</p>
                    <p class="text-lg font-semibold text-gray-700">Rp499.000</p>
                </div>
                <div class="text-center">
                    <button class="mt-4 px-10 py-2 bg-yellow-400 hover:bg-yellow-300 rounded-2xl font-semibold text-sm shadow-lg">
                        Beli Sekarang
                    </button>
                </div>
            </div>

            <!-- Bootcamp 3 -->
            <div class="w-96 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-5">
                <div class="relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('images/posterbc3-2.jpg') }}"
                        alt="Bootcamp Class"
                        class="w-full h-37 object-cover rounded-2xl border border-b-black">

                    <!-- Garis warna di dalam gambar -->
                    <div class="absolute top-4 right-0 flex flex-col gap-1 items-end pr-0">
                        <div class="w-10 h-1 bg-red-500 rounded"></div>
                        <div class="w-10 h-1 bg-blue-600 rounded"></div>
                    </div>
                </div>

                <p class="font-bold text-gray-900 mt-2">Bootcamp 3 - Blue Team Operation</p>
                <div class="mt-2">
                    <p class="text-red-500 line-through text-sm">Rp3.200.000</p>
                    <p class="text-lg font-semibold text-gray-700">Rp159.000</p>
                </div>
                <div class="text-center">
                    <button class="mt-4 px-10 py-2 bg-yellow-400 hover:bg-yellow-300 rounded-2xl font-semibold text-sm shadow-lg">
                        Beli Sekarang
                    </button>
                </div>
            </div>

            <!-- Bootcamp 4 -->
            <div class="w-96 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-5">
                <div class="relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('images/posterbc4-2.png') }}"
                        alt="Bootcamp Class"
                        class="w-full h-37 object-cover rounded-2xl shadow-2xl border border-b-black">

                    <!-- Garis warna di dalam gambar -->
                    <div class="absolute top-4 right-0 flex flex-col gap-1 items-end pr-0">
                        <div class="w-10 h-1 bg-red-500 rounded"></div>
                        <div class="w-10 h-1 bg-blue-600 rounded"></div>
                    </div>
                </div>

                <p class="font-bold text-gray-900 mt-2">Bootcamp 4 - DevSecOps Workflow Basics: Building Security into Development (For Beginners)</p>
                <div class="mt-2">
                    <p class="text-red-500 line-through text-sm">Rp2.200.000</p>
                    <p class="text-lg font-semibold text-gray-700">Rp229.000</p>
                </div>
                <div class="text-center">
                    <button class="mt-4 px-10 py-2 bg-yellow-400 hover:bg-yellow-300 rounded-2xl font-semibold text-sm shadow-lg">
                        Beli Sekarang
                    </button>
                </div>
            </div>

            <!-- Bootcamp 5 -->
            <div class="w-96 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-5">
                <div class="relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('images/posterbc5-5.png') }}"
                        alt="Bootcamp Class"
                        class="w-full h-37 object-cover rounded-2xl shadow-2xl border border-b-black">

                    <!-- Garis warna di dalam gambar -->
                    <div class="absolute top-4 right-0 flex flex-col gap-1 items-end pr-0">
                        <div class="w-10 h-1 bg-red-500 rounded"></div>
                        <div class="w-10 h-1 bg-blue-600 rounded"></div>
                    </div>
                </div>

                <p class="font-bold text-gray-900 mt-2">Bootcamp 5 - Capture The Flag, Merdeka Challenge Preparation</p>
                <div class="mt-2">
                    <p class="text-red-500 line-through text-sm">Rp2.500.000</p>
                    <p class="text-lg font-semibold text-gray-700">Rp379.000</p>
                </div>
                <div class="text-center">
                    <button class="mt-4 px-10 py-2 bg-yellow-400 hover:bg-yellow-300 rounded-2xl font-semibold text-sm shadow-lg">
                        Beli Sekarang
                    </button>
                </div>
            </div>
        </div> <!-- end grid -->
    </div>
</div>
@endsection
