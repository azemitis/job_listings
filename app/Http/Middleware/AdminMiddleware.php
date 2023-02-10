<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /** Logs out and redirects to homepage users who are not admins, but keeps registration data */

    public function handle($request, Closure $next)
    {
        // Continue to dashboard if you are admin
        if (auth()->check() && auth()->user()->role === 1) {
            return $next($request);
        }

        // Logs out if you are not admin
        auth()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/');
    }

    /** Just loogs out: */
    // public function handle($request, Closure $next)
    // {
    //     if (auth()->check() && auth()->user()->role === 1) {
    //         return $next($request);
    //     }

    //     return redirect('/');
    // }
}
