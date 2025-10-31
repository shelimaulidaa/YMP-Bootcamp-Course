<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Menampilkan daftar semua course.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data course, diurutkan dari yang terbaru, dengan paginasi
        $courses = Course::latest()->paginate(10);
        
        // Mengembalikan view 'courses.index' dan passing data 'courses'
        return view('courses.index', compact('courses'));
    }

    /**
     * Menampilkan form untuk membuat course baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Mengembalikan view 'courses.create'
        return view('courses.create');
    }

    /**
     * Menyimpan course baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validator = Validator::make($request->all(), [
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul'     => 'required|string|max:255',
            'harga'     => 'required|integer|min:0',
            'harga_serti' => 'required|integer|min:0',
            'total_modul_video' => 'required|string|max:255',
            'total_durasi_video' => 'required|string|max:255',
            'level'     => 'required|string|max:100',
            'info_ig'   => 'required|string|max:255',
            'tentang_materi' => 'required|string', // Sebaiknya 'text' di migrasi
        ], [
            'gambar.required' => 'Gambar wajib diupload.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',
            'judul.required' => 'Judul wajib diisi.',
            'harga.required' => 'Harga wajib diisi.',
            'harga.integer' => 'Harga harus berupa angka.',
            // Tambahkan pesan custom lainnya jika perlu
        ]);

        // Jika validasi gagal, kembali ke form dengan error dan input sebelumnya
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // Proses upload gambar
        $gambar = $request->file('gambar');
        $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->storeAs('public/courses', $namaGambar);

        // Buat data course baru
        Course::create([
            'gambar'    => $namaGambar,
            'judul'     => $request->judul,
            'harga'     => $request->harga,
            'harga_serti' => $request->harga_serti,
            'total_modul_video' => $request->total_modul_video,
            'total_durasi_video' => $request->total_durasi_video,
            'level'     => $request->level,
            'info_ig'   => $request->info_ig,
            'tentang_materi' => $request->tentang_materi,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('courses.index')
                         ->with('success', 'Course berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail satu course.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\View\View
     */
    public function show(Course $course)
    {
        // Mengembalikan view 'courses.show' dan passing data 'course'
        // Laravel otomatis mencari course berdasarkan ID (Route Model Binding)
        return view('courses.show', compact('course'));
    }

    /**
     * Menampilkan form untuk mengedit course.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\View\View
     */
    public function edit(Course $course)
    {
        // Mengembalikan view 'courses.edit' dan passing data 'course'
        return view('courses.edit', compact('course'));
    }

    /**
     * Memperbarui data course di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Course $course)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Nullable: gambar boleh tidak diganti
            'judul'     => 'required|string|max:255',
            'harga'     => 'required|integer|min:0',
            'harga_serti' => 'required|integer|min:0',
            'total_modul_video' => 'required|string|max:255',
            'total_durasi_video' => 'required|string|max:255',
            'level'     => 'required|string|max:100',
            'info_ig'   => 'required|string|max:255',
            'tentang_materi' => 'required|string',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // Mengambil semua data yang tervalidasi
        $data = $validator->validated();

        // Cek apakah ada file gambar baru yang diupload
        if ($request->hasFile('gambar')) {
            // 1. Hapus gambar lama
            if ($course->gambar) {
                Storage::delete('public/courses/' . $course->gambar);
            }

            // 2. Upload gambar baru
            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/courses', $namaGambar);

            // 3. Timpa nama gambar di data
            $data['gambar'] = $namaGambar;
        }

        // Update data course
        $course->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('courses.index')
                         ->with('success', 'Course berhasil diperbarui.');
    }

    /**
     * Menghapus course dari database.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Course $course)
    {
        // Hapus gambar terkait dari storage
        if ($course->gambar) {
            Storage::delete('public/courses/' . $course->gambar);
        }

        // Hapus data course dari database
        $course->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('courses.index')
                         ->with('success', 'Course berhasil dihapus.');
    }
}