<?php

// app/Http/Controllers/Admin/KelasController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Sertifikat; // Asumsi Anda juga punya model ini
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Tampilkan dashboard utama (daftar kelas + statistik).
     */
    public function index()
    {
        // 1. Ambil Statistik
        $totalKelas = Kelas::count();
        $kelasBerjalan = Kelas::where('status', 'berjalan')->count();
        $totalSertifikat = Sertifikat::count(); // Asumsi

        // 2. Ambil data untuk tabel (Read)
        $dataKelas = Kelas::latest()->paginate(10); // Ambil 10 data terbaru

        return view('admin.kelas.index', compact(
            'totalKelas',
            'kelasBerjalan',
            'totalSertifikat',
        ));
    }

    /**
     * Tampilkan form untuk membuat kelas baru.
     */
    public function create()
    {
        return view('admin.kelas.create');
    }

    /**
     * Simpan kelas baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_kelas' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:berjalan,selesai',
        ]);

        // Buat data baru
        Kelas::create($request->all());

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.kelas.index')
                         ->with('success', 'Kelas baru berhasil ditambahkan.');
    }

    // ... (method show, edit, update, destroy akan ada di sini)
}