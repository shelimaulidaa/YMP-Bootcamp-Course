<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'courses';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'gambar',
        'judul',
        'harga',
        'harga_serti',
        'total_modul_video',
        'total_durasi_video',
        'level',
        'info_ig',
        'tentang_materi',
    ];

    /**
     * Tipe data asli (native types) untuk atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'harga' => 'integer',
        'harga_serti' => 'integer',
    ];
}
