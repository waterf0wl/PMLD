<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Cek apakah user sudah login dan memiliki role administrator
        if (Auth::check() && Auth::user()->roles === 'administrator') {
            return $next($request);
        }

        // Jika bukan admin, abort dengan status 403 (Forbidden)
        abort(403, 'Unauthorized action.');
    }
}

