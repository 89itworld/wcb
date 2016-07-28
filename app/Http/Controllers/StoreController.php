<?php
namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Retailers;
use App\Models\RetailerToCategory;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Library\Userfunctions;



Class StoreController extends Controller{
/*Function edited by yasar on 27-July-2016*/
    public function getIndex(Request $request,$letter=''){

        $segment = $request->segment(1);
        $date = new DateTime();
        $retailers_per_category='';
        $category='';
        if($segment=='retailer')
            $letter=$request->input('letter');
        else {
            $category_data=Categories::where('category_url',$letter)->select('category_id')->first();
            $category_id=$category_data->category_id;
            $category=$letter;
            $retailers_id=RetailerToCategory::where('category_id',$category_id)->select('retailer_id')->get();
            $retailers_per_category='';
            foreach($retailers_id as $retailer_id)
            {
                $retailers_per_category[]=$retailer_id->retailer_id;
            }
            //$retailers_per_category=implode(",", $retailer_per_category_array);
            $letter = '';
        }
        if($request->isMethod('get') && (!empty($request->input('sort_by') || !empty($request->input('show_type') || !empty($request->input('show') ) ))) ){

            $show=$request->input('show');
            $show_type=$request->input('show_type');
            $sort_by=$request->input('sort_by');



            switch ($sort_by)
            {
                case "title":
                    $rrorder = "title";
                    break;
                case "added":
                    $rrorder = "added";
                    break;
                case "visits":
                    $rrorder = "visits";
                    break;
                case "cashback":
                    $rrorder = "cashback";
                    break;
                default:
                    $rrorder = "title";
                    break;
            }

            $page_data='';
            if($show=='All')
                $show=100000;

            if($letter == '') {
                if($segment=='retailer'){
                    $retailersData = Retailers::select(['title', 'slug', 'cashback', 'url', 'image', 'old_cashback', 'description'])->where(function ($inner_query) use ($date) {
                        return $inner_query->where('end_date', '0000-00-00 00:00:00')->orWhere('end_date', '>=', $date->format('Y-m-d H:i:s'));
                    })->where('status', 'active')->orderBy($rrorder, $show_type)->paginate($show);
                }else{
                    $retailersData = Retailers::select(['title', 'slug', 'cashback', 'url', 'image', 'old_cashback', 'description'])->where(function ($inner_query) use ($date) {
                        return $inner_query->where('end_date', '0000-00-00 00:00:00')->orWhere('end_date', '>=', $date->format('Y-m-d H:i:s'));
                    })->where('status', 'active')->whereIn('retailer_id', $retailers_per_category)->orderBy($rrorder, $show_type)->paginate($show);
                }
            }else if($letter!='' && $letter !='0-9' && $segment =='retailer'){
                $retailersData = Retailers::select(['title', 'slug', 'cashback', 'url', 'image', 'old_cashback', 'description'])->where(function ($inner_query) use ($date) {
                    return $inner_query->where('end_date', '0000-00-00 00:00:00')->orWhere('end_date', '>=', $date->format('Y-m-d H:i:s'));
                })->where('status', 'active')->where( DB::raw('UPPER(title)'),'LIKE', $letter.'%')->orderBy($rrorder, $show_type)->paginate($show);
            }else if($letter =='0-9'  && $segment =='retailer'){
                $retailersData = Retailers::select(['title', 'slug', 'cashback', 'url', 'image', 'old_cashback', 'description'])->where(function ($inner_query) use ($date) {
                    return $inner_query->where('end_date', '0000-00-00 00:00:00')->orWhere('end_date', '>=', $date->format('Y-m-d H:i:s'));
                })->whereRaw('title REGEXP \'^[0-9]\'')->orderBy($rrorder, $show_type)->paginate($show);
            }

            $page_data['first_item']=$retailersData->firstItem();
            $page_data['last_item']=$retailersData->lastItem();
            $page_data['total_items']=$retailersData->total();
            return view('stores.index', ['retailers'=>$retailersData->appends(['show_type' => $show_type,'sort_by'=>$sort_by,'show'=>$show,'letter'=>$letter,'cat'=>$category]),'page_data'=>$page_data]);

        }
        else if($letter=='') {
            if($segment=='retailer') {
                $retailersData = Retailers::select(['title', 'slug', 'cashback', 'url', 'image', 'old_cashback', 'description'])->where('status', 'active')->orderBy("visits", "ASC")->paginate(10);

            }else{
                $retailersData = Retailers::select(['title', 'slug', 'cashback', 'url', 'image', 'old_cashback', 'description'])->where('status', 'active')->whereIn('retailer_id', $retailers_per_category)->orderBy("visits", "ASC")->paginate(10);

            }

        }
        else if($letter!='' && $letter !='0-9') {
            $retailersData = Retailers::where('status', 'active')->where(function ($inner_query) use ($date) {
                return $inner_query->where('end_date', '0000-00-00 00:00:00')->orWhere('end_date', '>=', $date->format('Y-m-d H:i:s'));
            })
                ->where( DB::raw('UPPER(title)'),'LIKE', $letter.'%')->orderBy("visits", "ASC")->paginate(10);
        }else if($letter =='0-9'){

            $retailersData = Retailers::where('status', 'active')->where(function ($inner_query) use ($date) {

                return $inner_query->where('end_date', '0000-00-00 00:00:00')->orWhere('end_date', '>=', $date->format('Y-m-d H:i:s'));
            })
                ->whereRaw('title REGEXP \'^[0-9]\'')->orderBy("visits", "ASC")->paginate(10);
        }
        /*  echo "<pre>";
           print_r($retailersData->currentPage());

           print_r($retailersData->currentPage()+$retailersData->total());
         print_r($retailersData);
           exit;*/
        $page_data['first_item']=$retailersData->firstItem();
        $page_data['last_item']=$retailersData->lastItem();
        $page_data['total_items']=$retailersData->total();

        return view('stores.index', ['retailers'=>$retailersData->appends(['letter'=>$letter,'cat'=>$category]),'page_data'=>$page_data,'letter'=>$letter,'cat'=>$category]);
    }
    /*Date:28-July-2016
     *Description:Function to get coupons on search autocomplete
     * Created By:Yasar
    */
    public function getSearchCoupons(Request $request){

        if($request->isMethod('get')){
         $q=$request->Input('term');
         $q = strtolower($this->clean($q));
         $q = substr(trim($q), 0, 100);
         $date = new DateTime();
         $coupons_data=Retailers::where('title','LIKE',$q.'%')->where(function($query) use($date){return $query->where('end_date', '0000-00-00 00:00:00')->orWhere('end_date', '>=', $date->format('Y-m-d H:i:s'));})
             ->where('status','active')->select(['retailer_id','title','slug','image','cashback'])->distinct(20)->limit(20)->get();
          foreach ($coupons_data as $coupon_data) {
              $data[] = ['key' => $coupon_data->title,
                  'label' => $coupon_data->title,
                  'desc' => Userfunctions::DisplayCashback($coupon_data->cashback) . " Cash Back",
                  'url' => Userfunctions::GetRetailerLink_BySlug($coupon_data->slug, $coupon_data->title)
              ];
          }

            echo json_encode($data);

            //SELECT DISTINCT retailer_id, title,slug, image, cashback FROM cashbackengine_retailers WHERE (title LIKE '$q%') AND (end_date='0000-00-00 00:00:00' OR end_date > NOW()) AND status='active' LIMIT 20
        }
    }
    public static function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
}
