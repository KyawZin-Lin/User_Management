<?php

namespace App\Repositories\user;

use App\Interfaces\user\UserInterface;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserInterface{
    public function getAuthUser()
    {
        return Auth::guard('user');
    }
}
