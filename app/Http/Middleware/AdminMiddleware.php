<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Pastikan user sudah login dan role-nya admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, arahkan ke dashboard user
        return redirect()->route('user.dashboard')
            ->with('error', 'Anda tidak memiliki akses ke halaman admin.');
    }
}
