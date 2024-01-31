<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\user\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;

    }
    public function profile(){
        $user=$this->userInterface->getAuthUser();
        return view('user.layouts.master');
    }
}
