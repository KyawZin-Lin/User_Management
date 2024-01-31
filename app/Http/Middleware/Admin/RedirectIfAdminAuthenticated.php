<?php

namespace App\Http\Middleware\Admin;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // dd('hi');
        if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->isSuperAdmin()) {

            return redirect(RouteServiceProvider::SUPER_ADMIN_HOME);
        }
        if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->isAdmin()) {

            return redirect(RouteServiceProvider::ADMIN_HOME);
        }
        // if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->isSuperAdmin()) {
        //     dd('hello');
        //     return redirect(RouteServiceProvider::SUPER_ADMIN_HOME);
        // }

        return $next($request);
    }
}
