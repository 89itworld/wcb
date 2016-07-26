<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = array('username', 'email','password', 'activation_key','unsubscribe_key','status');
    //
}
