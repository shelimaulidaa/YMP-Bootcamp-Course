<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Untuk mengambil data user
use App\Models\Bootcamp;              // Untuk mengambil data bootcamp
use App\Models\Transaksi;            // Untuk data statistik
use App\Models\Sertifikat;           // Untuk data statistik

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard utama pengguna.
     */
    public function index()
    {
        // 1. Ambil data user yang sedang login
        // Ini untuk menampilkan nama "Natasya Farahdiva"
        $user = Auth::user();

        // 2. Ambil data statistik untuk user ini (angka 0, 0, 0 di atas)
        $totalKelas = Transaksi::where('user_id', $user->id)
                                ->where('status', 'sukses') // Hanya hitung kelas yang sudah dibeli
                                ->count();
        
        $sedangBerjalan = Transaksi::where('user_id', $user->id)
                                ->where('status', 'sukses')
                                ->where('progress', '>', 0)   // Asumsi ada kolom progress
                                ->where('progress', '<', 100)
                                ->count();

        $totalSertifikat = Sertifikat::where('user_id', $user->id)->count();

        // 3. Ambil semua data produk bootcamp yang akan dijual
        // Ini untuk menampilkan card "CYBER SECURITY"
        $bootcamps = Bootcamp::where('status', 'published') // Ambil yang aktif saja
                             ->orderBy('created_at', 'desc') // Urutkan
                             ->get();

        // 4. Kirim semua data ini ke file view (frontend)
        return view('admin.dashboard', [
            'user' => $user,
            'total_kelas' => $totalKelas,
            'sedang_berjalan' => $sedangBerjalan,
            'total_sertifikat' => $totalSertifikat,
            'semua_bootcamp' => $bootcamps
        ]);
    }
}