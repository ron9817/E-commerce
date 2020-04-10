<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Hash;

class User extends Model
{
    //
    protected $table="user";

    public function setPasswordAttribute($pass){

        $this->attributes['password'] = Hash::make($pass);
    
    }
}
