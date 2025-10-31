<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    // Laravel otomatis mencari 'materis' (plural) dari 'Materi' (singular)
    // tapi ini adalah cara eksplisit untuk menentukannya.
    protected $table = 'materis';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'materi',
        'durasi',
        'ss_kelas',
    ];

    /**
     * Tipe data asli (native types) untuk atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // Ini akan mengkonversi kolom 'durasi' (tipe TIME) 
        // menjadi string format H:i:s (Jam:Menit:Detik)
        'durasi' => 'datetime:H:i:s', 
    ];
}
