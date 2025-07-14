<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedCustom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Sudah login, coba akses login/register
        if (Auth::check() && ($request->is('login') || $request->is('register'))) {
            return redirect()->route('dashboard');
        }

        // Belum login, coba akses dashboard
        if (!Auth::check() && $request->is('dashboard')) {
            return redirect()->route('login-page')->with('error', 'Silakan login dulu.');
        }

        return $next($request);
    }
}
