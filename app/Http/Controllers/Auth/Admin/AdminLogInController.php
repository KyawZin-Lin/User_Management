<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\Throw_;

class AdminLogInController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd(request()->all());
      $validator=  $this->validateLogin($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->only('email', 'remember'));
        }
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // dd(Auth::guard('admin')->user()->isSuperAdmin());
            if (Auth::guard('admin')->user()->isSuperAdmin()) {

                return redirect()->intended(RouteServiceProvider::SUPER_ADMIN_HOME);
            }
            if (Auth::guard('admin')->user()->isAdmin()) {

                return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
            }
        } else {
            // throw new Error($message = 'Check Your Credentials');
            return redirect()->back()->with($message);
        }
    }

    protected function validateLogin(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|string',
        //     'password' => 'required|string',
        // ]);
     return   $validator = Validator::make($request->all(), [
            'email'   => 'required|email|exists:admins,email',
            'password' => 'required|confirmed|min:6'
        ]);
    }

    public function logout()
    {
        // dd(Auth::guard('admin'));
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }
}
