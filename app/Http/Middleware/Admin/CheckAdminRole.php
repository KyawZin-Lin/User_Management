<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::guard('admin')->user()?->hasRole($role)) {
            if ($request->ajax() || $request->wantsJson()) {


                return response('Unauthorized.', 401);
            } else {
                // dd('hi',$role);
                if ($role == 'Super Admin')
                    return redirect(route('admin.login'));
                if ($role == 'Admin')
                    return redirect(route('admin.login'));
            }
        } else {
            return $next($request);
        }
    }
}
