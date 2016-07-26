<?php
namespace App\Http\Controllers;

use App\Models\Retailers;


Class StoreController extends Controller{

   public function getIndex(){
       // $cat_slug=Input::get('cat');
     
      //  $cat_result=DB::select("SELECT * FROM cashbackengine_categories WHERE category_url='$cat_slug' LIMIT 1");
        $retailersData = Retailers::select(['title','slug','cashback','url','image','old_cashback','description'])->where('status','active')->orderBy("visits", "DESC")->paginate(10);

      //  $cat_result=DB::select("SELECT * FROM cashbackengine_retailers WHERE $where ORDER BY title ASC");
    //  echo"<pre>"; print_r($retailersData);exit;
        return view('stores.index', ['retailers'=>$retailersData]);
    }
}
