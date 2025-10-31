<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bootcamp extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'bootcamps'; // Opsional jika nama model sudah singular dari tabel

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'gambar',
        'judul',
        'harga',
        'tanggal_pembuatan',
        'peserta_daftar',
        'benefit',
        'tentang_materi',
    ];

    /**
     * Tipe data asli (native types) untuk atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'harga' => 'integer',
        'tanggal_pembuatan' => 'date', // Otomatis mengkonversi ke objek Carbon
        'peserta_daftar' => 'integer',
    ];
}
