<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas; // Pastikan kamu punya model Kelas

class AdminKelasController extends Controller
{
    public function index()
    {
        $dataKelas = Kelas::paginate(10); // ambil data kelas
        $totalKelas = Kelas::count();
        $kelasBerjalan = Kelas::where('status', 'berjalan')->count();
        $totalSertifikat = 0; // misal nanti dihubungkan dengan tabel sertifikat

        return view('admin.admins', compact(
                'dataKelas',
                'totalKelas',
                'kelasBerjalan',
                'totalSertifikat'
            ));
    }
}
