<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLogInController extends Controller
{
    public function showUserLoginForm()
    {
        return view('auth.user.login');
    }

    public function showUserRegisterForm()
    {
        return view('auth.user.register');
    }
    public function login(Request $request)
    {

        $this->validateLogin($request);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended(RouteServiceProvider::USER_HOME);
        } else {
            // dd('hello');
            return redirect()->intended(route('user.login'));
        }
    }

    public function register(Request $request)
    {
        $this->validateRegister($request);
        $user = new User();
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = request()->password;
        $user->phone = request()->phone;
        $user->address = request()->address;
        $user->birthday = request()->birthday;
        $user->save();
        return redirect()->intended(route('user.login'));
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
            'terms' => 'required'
        ]);
    }
    protected function validateRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
            'terms' => 'required',
            'phone' => 'required',
            'address' => 'required|string',
            'birthday' => 'required|date',
        ]);
    }

    public function logout()
    {

        Auth::guard('user')->logout();
        return redirect(route('user.login'));
    }
}
