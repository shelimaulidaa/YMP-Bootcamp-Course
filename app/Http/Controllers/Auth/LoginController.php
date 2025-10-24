<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        // 🧩 1. Validasi input dasar
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'g-recaptcha-response' => 'required', // pastikan token dikirim
        ]);

        // 🔎 2. Verifikasi token reCAPTCHA ke Google
        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret_key'),
            'response' => $request->input('g-recaptcha-response'),
        ]);

        $result = $recaptchaResponse->json();

        // 🧠 3. Cek hasil verifikasi reCAPTCHA
        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            return back()->with('error', 'Verifikasi keamanan gagal. Silakan coba lagi.');
        }

        // 🔐 4. Hanya ambil email dan password untuk login
        $credentials = $request->only('email', 'password');

        // ✅ 5. Lakukan autentikasi
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard')
                ->with('success', 'Login berhasil! Selamat datang 👋');
        }

        // ❌ 6. Jika gagal login
        return back()->with('error', 'Email atau password salah. Silakan coba lagi.')
                     ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}
