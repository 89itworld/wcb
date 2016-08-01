<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affnetwork extends Model
{
    //
    protected  $primaryKey = 'network_id';
    protected  $table = 'affnetworks';
    public $timestamps = false;

    public function retailers()
    {
        return $this->hasMany('App\Models\Retailers','network_id','network_id');
    }
}
