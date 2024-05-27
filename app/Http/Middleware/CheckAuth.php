<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Pengguna sudah login, tampilkan link "Logout"
            view()->share('showLogoutLink', true);
        } else {
            // Pengguna belum login, tampilkan link "Login"
            view()->share('showLoginLink', true);
        }

        return $next($request);
    }
}
