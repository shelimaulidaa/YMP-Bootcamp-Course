@extends('layouts.admin')

@section('title', 'Sertifikat')

@section('content')
<div class="min-h-screen bg-[url('/images/bg-circuit.png')] bg-cover bg-center bg-no-repeat bg-fixed py-15 px-4">
    <div class="max-w-6xl mx-auto bg-white rounded-3xl shadow-md border border-gray-200 overflow-hidden">

        <!-- Header Tabel -->
        <div class="grid grid-cols-3 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center bg-gray-100 text-gray-700 font-semibold text-center py-3 rounded-t-3xl">
            <div>ID Sertifikat</div>
            <div>Nama Course</div>
            <div>Action</div>
        </div>

        <!-- Isi Tabel -->
        @if(isset($certificates) && count($certificates) > 0)
            @foreach($certificates as $cert)
                <div class="grid grid-cols-3 text-center border-t border-gray-100 py-4 items-center">
                    <div>{{ $cert->id }}</div>
                    <div class="font-medium text-gray-800">{{ $cert->course_name }}</div>
                    <div>
                        <a href="{{ route('cert.download', $cert->id) }}"
                           class="inline-block px-4 py-2 bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold text-sm rounded-full shadow-sm transition-all duration-200">
                           Download
                        </a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-center text-gray-600 py-12">
                Tidak ada sertifikat
            </div>
        @endif
    </div>
</div>
@endsection
