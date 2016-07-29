<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retailers extends Model
{
    //
    protected $primaryKey = 'retailer_id';


    /*
   * Created At: 29-July-2016
   *Author: Amit
   *Description:Relation with network table
  */
    public  function Affnetwork(){
        return $this->belongsTo('App\Models\Affnetwork','network_id','network_id');
    }


    public function coupons()
    {
        return $this->hasMany('App\Models\Coupons','retailer_id');
    }
    
    public function getCouponsPaginatedAttribute()
    {
        return $this->coupons()->paginate(5);
    }
}
