<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addProfile(){
        $user = User::find(1);
        $profile =new Profile;
        $profile -> address = 'Pursat';
        $profile -> phone = '099393709';
        $profile ->user_id = $user->id;
        $profile -> save();

        $user1 = User::find(2);
        $profile1 =new Profile;
        $profile1 -> address = 'Batambang';
        $profile1 -> phone = '0964263915';
        $profile1 ->user_id = $user1->id;
       
        $profile1 -> save();
        return "Success";
    }

    public function showProfile(){
        $user = User::all();
        return view('user.user')->with('profile',$user);
    }
}
