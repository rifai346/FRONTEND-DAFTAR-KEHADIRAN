<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyToken
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('token')) {
            return redirect()->route('login')->withErrors(['login_error' => 'Silakan login terlebih dahulu']);
        }

        return $next($request);
    }
}
