<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogInController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd(request()->all());
        $this->validateLogin($request);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // dd(Auth::guard('admin')->user()->isSuperAdmin());
            if (Auth::guard('admin')->user()->isSuperAdmin()) {
                // dd('hello');
                // dd(RouteServiceProvider::SUPER_ADMIN_HOME);
                return redirect()->intended(RouteServiceProvider::SUPER_ADMIN_HOME);
            }
        }
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function logout()
    {
        // dd(Auth::guard('admin'));
        Auth::guard('admin')->logout();
        return redirect(route('login'));
    }
}
