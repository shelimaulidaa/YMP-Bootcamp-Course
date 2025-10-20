@extends('layouts.main')

@section('title', 'About')

@section('content')
<div class="min-h-screen text-center">
    <img src="{{ asset('images/sirkuit.jpg') }}" class="w-full h-[870px] absolute opacity-10 left-0 top-0 z-[-1]" alt="">
    <div class="bg-gray-300/70 p-5 flex flex-col items-center justify-center mt-5 rounded-4xl">
        <img src="{{ asset('images/logoymp.png') }}" alt="" class="w-36 mb-10">
        <div class="space-y-10 text-lg font-semibold">
            <h1>
                Yuk-Mari Project (YMP) adalah sebuah startup di bidang Edutech dan Cybersecurity yang dirintis oleh
                mahasiswa dari berbagai kampus ternama di Kota Bandung, seperti ITB, UIN SGD, UPI, dan UNPAD. Berawal dari 
                semangat kolaboratif dan keinginan untuk menghadirkan solusi nyata bagi masyarakat, pelajar, dan profesional muda,
                YMP hadir sebagai wadah untuk meningkatkan kapasitas, pengalaman, dan karya—baik di bidang teknologi maupun non-teknologi.
            </h1>
            <h1>
                Dengan memanfaatkan potensi talenta muda Indonesia, kami menciptakan platform dan layanan berbasis keamanan
                informasi untuk mendukung transformasi digital di berbagai sektor, mulai dari edukasi keamanan siber,
                pengembangan aplikasi yang aman, hingga perlindungan data dan sistem.
            </h1>
            <h1>
                Kami percaya masa depan teknologi dibangun oleh kolaborasi, bukan kompetisi. Oleh karena itu, YMP menghadirkan
                ruang terbuka bagi mahasiswa, profesional muda, dan pelaku industri untuk bersama-sama menciptakan solusi Cyber
                Security yang berdampak dan berkelanjutan.
            </h1>
            <h1>
                Kami berdomisili di Kota Bandung, Jawa Barat, Indonesia. Perjalanan kami dimulai dari inisiatif komunitas Yuk-Mari Kuliner (2020–2022), lalu berkembang menjadi
                Yuk-Mari Indonesia (2022–2023), Yuk-Mari Project Indonesia sejak tahun 2023-2024, dan di tahun 2025 - sekarang lebih
                difokuskan ke bidang Cyber Security.
            </h1>
        </div>
    </div>
</div>
@endsection
