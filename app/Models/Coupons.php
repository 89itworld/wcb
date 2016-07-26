<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    //
    protected $primaryKey = 'coupon_id';
    public function retailers()
    {
        return $this->belongsTo('App\Models\Retailers','retailer_id');
    }
}
