<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retailers extends Model
{
    //
    protected $primaryKey = 'retailer_id';
    public function coupons()
    {
        return $this->hasMany('App\Models\Coupons','retailer_id');
    }
    public function getCouponsPaginatedAttribute()
    {
        return $this->coupons()->paginate(5);
    }
}
