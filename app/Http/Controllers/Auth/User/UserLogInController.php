<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLogInController extends Controller
{
    public function showUserLoginForm()
    {
        return view('auth.user.login');
    }
    public function login(Request $request)
    {
        // dd(request()->all());
        $this->validateLogin($request);
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // dd(auth()->guard('user')->user());
                return redirect()->intended(RouteServiceProvider::USER_HOME);

        }else{
            // dd('hello');
            return redirect()->intended(route('user.login'));
        }
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
            'terms'=>'required'
        ]);
    }
}
