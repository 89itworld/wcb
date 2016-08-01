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
       *Description:Columns to filled at backed and added_at and updated_at false
      */
    protected $fillable = array('title','slug','network_id','program_id','url','rss_feedurl','image','cashback','old_cashback','conditions','description','offers','position','featured','visits','status','added','end_date','seo_title','website','tags','meta_description','meta_keywords','deal_of_week','guidelines_to_earn','important');

    public  $timestamps = false;
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
