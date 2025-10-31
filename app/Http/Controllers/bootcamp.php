<?php

namespace App\Http\Controllers;

use App\Models\bootcamp; // Menggunakan nama model yang Anda berikan
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BootcampController extends Controller
{
    /**
     * Menampilkan daftar semua bootcamp.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua data bootcamp, urutkan dari yang terbaru, dan paginasi
        $bootcamps = bootcamp::latest()->paginate(10);

        // Kembalikan view 'bootcamps.index' dan kirim data bootcamps
        return view('bootcamps.index', compact('bootcamps'));
    }

    /**
     * Menampilkan form untuk membuat bootcamp baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Kembalikan view 'bootcamps.create'
        return view('bootcamps.create');
    }

    /**
     * Menyimpan data bootcamp baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul'  => 'required|string|max:255',
            'harga'  => 'required|numeric|min:0',
        ]);

        // Jika validasi gagal, kembali ke form 'create' dengan error dan input lama
        if ($validator->fails()) {
            return redirect()->route('bootcamps.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Upload gambar
        $gambar = $request->file('gambar');
        // Simpan gambar di 'storage/app/public/bootcamps'
        $gambarPath = $gambar->store('public/bootcamps');
        $gambarNama = basename($gambarPath); // Dapatkan hanya nama file

        // Buat data bootcamp baru
        bootcamp::create([
            'gambar' => $gambarNama,
            'judul'  => $request->judul,
            'harga'  => $request->harga,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('bootcamps.index')
                         ->with('success', 'Bootcamp berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail satu bootcamp.
     *
     * @param  int  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        // Cari bootcamp berdasarkan ID
        $bootcamp = bootcamp::find($id);

        // Jika data tidak ditemukan, redirect ke index
        if (!$bootcamp) {
            return redirect()->route('bootcamps.index')
                             ->with('error', 'Bootcamp tidak ditemukan.');
        }

        // Kembalikan view 'bootcamps.show' dengan data bootcamp
        return view('bootcamps.show', compact('bootcamp'));
    }

    /**
     * Menampilkan form untuk mengedit bootcamp.
     *
     * @param  int  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        // Cari bootcamp berdasarkan ID
        $bootcamp = bootcamp::find($id);

        // Jika data tidak ditemukan, redirect ke index
        if (!$bootcamp) {
            return redirect()->route('bootcamps.index')
                             ->with('error', 'Bootcamp tidak ditemukan.');
        }

        // Kembalikan view 'bootcamps.edit' dengan data bootcamp
        return view('bootcamps.edit', compact('bootcamp'));
    }

    /**
     * Memperbarui data bootcamp di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Cari bootcamp berdasarkan ID
        $bootcamp = bootcamp::find($id);

        // Jika data tidak ditemukan
        if (!$bootcamp) {
            return redirect()->route('bootcamps.index')
                             ->with('error', 'Bootcamp tidak ditemukan.');
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'judul'  => 'required|string|max:255',
            'harga'  => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Gambar opsional saat update
        ]);

        // Jika validasi gagal, kembali ke form 'edit'
        if ($validator->fails()) {
            return redirect()->route('bootcamps.edit', $bootcamp->id)
                             ->withErrors($validator)
                             ->withInput();
        }

        // Siapkan data untuk di-update
        $dataToUpdate = [
            'judul' => $request->judul,
            'harga' => $request->harga,
        ];

        // Cek jika ada file gambar baru yang diupload
        if ($request->hasFile('gambar')) {
            // Upload gambar baru
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/bootcamps');
            $gambarNama = basename($gambarPath);

            // Hapus gambar lama dari storage
            Storage::delete('public/bootcamps/' . $bootcamp->gambar);

            // Tambahkan nama gambar baru ke data update
            $dataToUpdate['gambar'] = $gambarNama;
        }

        // Update data bootcamp
        $bootcamp->update($dataToUpdate);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('bootcamps.index')
                         ->with('success', 'Bootcamp berhasil diperbarui.');
    }

    /**
     * Menghapus data bootcamp dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Cari bootcamp berdasarkan ID
        $bootcamp = bootcamp::find($id);

        // Jika data tidak ditemukan
        if (!$bootcamp) {
            return redirect()->route('bootcamps.index')
                             ->with('error', 'Bootcamp tidak ditemukan.');
        }

        // Hapus gambar dari storage
        Storage::delete('public/bootcamps/' . $bootcamp->gambar);

        // Hapus data bootcamp dari database
        $bootcamp->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('bootcamps.index')
                         ->with('success', 'Bootcamp berhasil dihapus.');
    }
}