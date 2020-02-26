<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile(){
        $user = User::all();
        return view('user.user')->with('profile',$user);
    }

    public function create()
    {
        return view('add');
    }
}
