<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        return $next($request);
    }

    // if (Auth::guard('volunteer')->check()) {
    //       return redirect('/dashboardvolunteer');
    //     }
    //     return $next($request);

    //     if ($guard == "volunteer" && Auth::guard($guard)->check()) {
    //             return redirect('/dashboardvolunteer');
    //         }
    //         if (Auth::guard($guard)->check()) {
    //             return redirect('/home');
    //         }

    //         return $next($request);
    // }
}
