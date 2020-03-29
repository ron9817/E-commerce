<?php

namespace App\Helpers;

use App\Models\User;

use Carbon\Carbon;

class AuthHelper
{
    public function register($userName, $password){
        $newUser= new User;
        $newUser->first_name=$userName;
        $newUser->password=$password;
        return $newUser->save();
    }

    public function getPassword($userName){
        $password= User::where("first_name",$userName)->select("password")->first();
        return $password;
    }
    
}
