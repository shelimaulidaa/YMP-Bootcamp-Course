@extends('layouts.main')

@section('title', 'Home')

@section('content')
<img src="{{ asset('images/bghero.jpg') }}" alt="Logo" class="z-[-1] w-full h-3/4 object-cover absolute top-0 left-0">
<div class="z-50">
    <h1 class="text-white text-[50px] font-bold">BANGUN KARIER DIGITALMU <br> BERSAMA YUKMARI!</h1>
    <h1 class="text-white text-3xl font-light mt-3">Pelajari skill terkini langsung dari mentor berpengalaman. <br> Mulai dari dasar hingga siap kerja melalui bootcamp & proyek nyata.</h1>
    <div class="flex justify-center mt-20">
        <button class="border font-bold border-white rounded-bl-4xl rounded-tr-4xl backdrop-blur-xl bg-white/15 text-white px-10 py-2">Yuk-Mari Belajar Sekarang</button>
    </div>
    <div class="flex justify-center mt-2">
        <h2 class="text-white text-lg">Solusi Edutech & Cybersecurity dari Talenta Muda Indonesia</h2>
    </div>
    <div class="absolute top-[495px] text-white font-semibold text-lg left-0 px-28 py-3 bg-gradient-to-l from-orange-400 to-black rounded-r-full">
        <h1>Program dan Layanan Edutech</h1>
    </div>
    <div class="mt-28">
        <img src="{{ asset('images/sirkuit.jpg') }}" alt="Logo" class="opacity-10 z-[-1] w-full h-[3200px] object-cover absolute top-[521px] left-0">
        <div class="flex justify-between items-center">
            <a class="text-xl text-white px-4 py-2 rounded-4xl bg-gradient-to-l from-yellow-600/80 via-yellow-from-yellow-600m-yellow-from-yellow-600/80 to-black/80">Konsultasi Akademik</a>
            <a class="text-xl text-white px-4 py-2 rounded-4xl bg-gradient-to-l from-yellow-600/80 via-yellow-from-yellow-600m-yellow-from-yellow-600/80 to-black/80">Bimbingan Belajar Online</a>
            <a class="text-xl text-white px-4 py-2 rounded-4xl bg-gradient-to-l from-yellow-600/80 via-yellow-from-yellow-600m-yellow-from-yellow-600/80 to-black/80">Bimbingan Belajar Offline</a>
            <a class="text-xl text-white px-4 py-2 rounded-4xl bg-gradient-to-l from-yellow-600/80 via-yellow-from-yellow-600m-yellow-from-yellow-600/80 to-black/80">Project Program Mahasiswa</a>
        </div>
    </div>
    <div class="flex gap-5 mt-48 w-full">
        <div class="w-1/2 flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold text-justify bg-gradient-to-r from-black via-yellow-300 to-yellow-300 bg-clip-text text-transparent ">Yuk Nikmatin promo special dari Yuk-Mari Course !</h1>
        </div>
        <div class="w-1/2 bg-white shadow-2xl rounded-2xl p-5">
            <h1 class="text-lg font-bold">Bootcamp 3 <br> Blue Team Operation</h1>
            <h1 class="text-lg font-bold"> </h1>
            <h1 class="mt-3">Harga: <span class="line-through">Rp3.200.000</span> <span class="text-red-600">Rp159.000</span></h1>
            <img src="{{ asset('images/poster1.jpg') }}" alt="Logo" class="w-full h-96 rounded-2xl object-fill mt-5">
            <h1 class="mt-3 font-bold text-justify">Bootcamp 3 - Blue Teaming Operation merupakan Bootcamp yang diselenggarakan pada Bulan Mei 2025. Dapatkan Module lengkapnya + Rekaman Video yang bisa dipelajari kapan saja dalam mempelajari strategi simulasi Blue Team.</h1>
            <div class="flex justify-center items-center mt-5">
                <button class="px-10 py-3 bg-yellow-500 rounded-full font-bold">Beli Sekarang</button>
            </div>
        </div>
    </div>
    <div class="mt-28">
        <h1 class="text-5xl font-bold">Kenapa Harus Bergabung dengan <br> Yuk-Mari Project ?</h1>

        <div class="p-5 mt-10 shadow-xl bg-gradient-to-r w-[50%] rounded-xl from-yellow-400 to-white">
            <h1 class="font-bold text-lg">Mentor & Praktisi Profesional</h1>
            <h2>Belajar langsung dari para mentor dan praktisi yang berpengalaman di dunia Cyber Security dan teknologi digital.</h2>
        </div>
        <div class="p-5 mt-7 shadow-xl bg-gradient-to-r w-[55%] rounded-xl from-yellow-400 to-white">
            <h1 class="font-bold text-lg">Mentor & Praktisi Profesional</h1>
            <h2>Belajar langsung dari para mentor dan praktisi yang berpengalaman di dunia Cyber Security dan teknologi digital.</h2>
        </div>
        <div class="p-5 mt-7 shadow-xl bg-gradient-to-r w-[60%] rounded-xl from-yellow-400 to-white">
            <h1 class="font-bold text-lg">Mentor & Praktisi Profesional</h1>
            <h2>Belajar langsung dari para mentor dan praktisi yang berpengalaman di dunia Cyber Security dan teknologi digital.</h2>
        </div>
        <div class="p-5 mt-7 shadow-xl bg-gradient-to-r w-[65%] rounded-xl from-yellow-400 to-white">
            <h1 class="font-bold text-lg">Mentor & Praktisi Profesional</h1>
            <h2>Belajar langsung dari para mentor dan praktisi yang berpengalaman di dunia Cyber Security dan teknologi digital.</h2>
        </div>
        <div class="p-5 mt-7 shadow-xl bg-gradient-to-r w-[70%] rounded-xl from-yellow-400 to-white">
            <h1 class="font-bold text-lg">Mentor & Praktisi Profesional</h1>
            <h2>Belajar langsung dari para mentor dan praktisi yang berpengalaman di dunia Cyber Security dan teknologi digital.</h2>
        </div>
    </div>
    <div class="p-5 bg-white/70 rounded-2xl mt-28">
        <div class="flex gap-5">
            <div class="p-3 rounded-xl bg-white shadow-2xl w-[45%]">
                <h1 class="mb-5 font-bold">Bootcamp 1 - Red Team <br> & Blue Team</h1>
                <img src="{{ asset('images/poster2.jpg') }}" alt="Logo" class="rounded-2xl">
                <div class="flex justify-center items-center mt-5">
                    <h1 class="font-bold"><span class="line-through">Rp2.500.000</span> <span class="text-red-500">Rp899.000</span></h1>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-[55$]">
                <h1 class="text-4xl bg-gradient-to-tr from-black via-yellow-300 to-yellow-300 font-bold text-transparent bg-clip-text">Belajar Cyber Security ga perlu nunggu live class! Tinggal Akses modul & video ekslusif dari Yuk-Mari Kapanpun Dimanapun</h1>
                <h1 class="text-4xl bg-gradient-to-tr from-black via-yellow-300 mt-3 to-yellow-300 font-bold text-transparent bg-clip-text">Cocok banget buat kamu yang pelajar & calon professional</h1>
                <div class="flex justify-center items-center mt-5">
                    <button class="px-5 py-2 font-bold text-xl bg-yellow-200 rounded-full">Yuk-Mulai Sekarang!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex text-4xl font-semibold rounded-2xl mt-28 bg-gradient-to-r from-orange-300 to-orange-200 justify-center items-center w-full py-5">
        <h1>Pertanyaan Kawan Yuk-Mari</h1>
    </div>
    <div class="rounded-2xl mt-3 bg-gradient-to-r from-orange-300 to-orange-200 w-full p-5">
        <div class="bg-white/50 shadow-2xl rounded-tl-full rounded-br-full px-10 py-3">
            <h1 class="font-bold text-lg">1. Bootcamp ini untuk siapa aja?</h1>
            <h2 class="px-5">Bootcamp ini cocok buat pelajar,mahasiswa,dan siapa pun yang ingin belajar keamanan siber dari nol atau upgrade skill buat karir digital.</h2>
        </div>
        <div class="mt-3 bg-white/50 shadow-2xl rounded-tl-full rounded-br-full px-10 py-3">
            <h1 class="font-bold text-lg">2. Apakah bootcamp ini full online?</h1>
            <h2 class="px-5">Ya! Semua materi tersedia dalam modul eksklusif dan video yang bisa kamu akses kapan saja, dimana saja.</h2>
        </div>
        <div class="mt-3 bg-white/50 shadow-2xl rounded-tl-full rounded-br-full px-10 py-3">
            <h1 class="font-bold text-lg">3. Materinya mulai dari dasar atau tingkat lanjut?</h1>
            <h2 class="px-5">Materi dimulai dari dasar banget, lalu naik ke level menengah hingga siap pakai di dunia kerja.</h2>
        </div>
        <div class="mt-3 bg-white/50 shadow-2xl rounded-tl-full rounded-br-full px-10 py-3">
            <h1 class="font-bold text-lg">4. Apakah dapat sertifikat setelah selesai?</h1>
            <h2 class="px-5">Ya, peserta yag menyelesaikan seluruh modul akan mendapatkan e-sertifikat resmi dari Yuk-Mari Project</h2>
        </div>
        <div class="mt-3 bg-white/50 shadow-2xl rounded-tl-full rounded-br-full px-10 py-3">
            <h1 class="font-bold text-lg">5. Berapa lama akses materi bisa digunakan?</h1>
            <h2 class="px-5">Akses ke modul dan video bisa digunakan seumur hidup (Lifetime Acces) setelah kamu mendaftar</h2>
        </div>
        <div class="mt-3 bg-white/50 shadow-2xl rounded-tl-full rounded-br-full px-10 py-3">
            <h1 class="font-bold text-lg">6. Apakah ada komunitas atau mentor yang bisa ditanya?</h1>
            <h2 class="px-5">Iya, peserta akan bergabung ke grup komunitas belajar eksklusif buat diskusi dan tanya mentor </h2>
        </div>
    </div>
</div>
@endsection
