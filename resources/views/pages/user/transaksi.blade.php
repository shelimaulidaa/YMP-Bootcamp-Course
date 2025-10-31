@extends('layouts.admin')

@section('title', 'Transaksi')

@section('content')
<div class="min-h-screen bg-[url('/images/bg-circuit.png')] bg-cover bg-center bg-no-repeat bg-fixed py-15 px-4">
    <div class="max-w-6xl mx-auto bg-white rounded-3xl shadow-md border border-gray-200 overflow-hidden">

        <!-- Header Tabel -->
        <div class="grid grid-cols-4 bg-gray-100 text-gray-700 font-semibold text-center py-3 rounded-t-3xl">
            <div>ID Transaksi</div>
            <div>Course</div>
            <div>Status</div>
            <div>Action</div>
        </div>

        <!-- Isi Tabel -->
        @if(isset($transactions) && count($transactions) > 0)
            @foreach($transactions as $trx)
                <div class="grid grid-cols-4 text-center border-t border-gray-100 py-4 items-center">
                    <div>{{ $trx->id }}</div>
                    <div class="font-medium text-gray-800">{{ $trx->course_name }}</div>
                    <div>
                        @if($trx->status === 'paid')
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Sukses</span>
                        @elseif($trx->status === 'pending')
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-semibold rounded-full">Menunggu</span>
                        @else
                            <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded-full">Gagal</span>
                        @endif
                    </div>
                    <div>
                        <a href="{{ route('transaction.detail', $trx->id) }}"
                           class="inline-block px-4 py-2 bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold text-sm rounded-full shadow-sm transition-all duration-200">
                           Detail
                        </a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-center text-gray-600 py-12">
                Tidak ada Transaksi
            </div>
        @endif
    </div>

   <!-- Tombol Bantuan -->
    <div class="flex items-center mt-6 ml-6 bg-white border border-gray-300 rounded-full shadow-md px-6 py-2 w-fit hover:bg-green-50 transition-all duration-300">
        <a href="https://wa.me/6282119205610" target="_blank" 
        class="flex items-center gap-2 text-gray-700 font-medium text-sm no-underline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
            </svg>
            <span>Butuh bantuan?</span>
        </a>
    </div>


@endsection


