<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


     /*
   * Created At: 29-July-2016
   *Author: Amit
   *Description:added and updated column not at table
  */
   protected  $timestamp = false;

    protected $fillable = array('username', 'email','password', 'activation_key','unsubscribe_key','status');


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /*
   * Created At: 29-July-2016
   *Author: Amit
   *Description:admin checking
  */
    public function isAdmin(){
        if ( $this->admin == 'true'){
            return true;
        }
        return false;
    }
    
}
