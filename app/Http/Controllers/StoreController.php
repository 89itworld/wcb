<?php
namespace App\Http\Controllers;

use App\Models\Retailers;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



Class StoreController extends Controller{
/*Function edited by yasar on 27-July-2016*/
   public function getIndex(Request $request,$letter=''){
       $date = new DateTime();
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

              $retailersData = Retailers::select(['title','slug','cashback','url','image','old_cashback','description'])->where('status','active')->orderBy($rrorder, $show_type)->paginate($show);
           $page_data['first_item']=$retailersData->firstItem();
           $page_data['last_item']=$retailersData->lastItem();
           $page_data['total_items']=$retailersData->total();
            return view('stores.index', ['retailers'=>$retailersData->appends(['show_type' => $show_type,'sort_by'=>$sort_by,'show'=>$show]),'page_data'=>$page_data]);

       }
      else if($letter=='')
        $retailersData = Retailers::select(['title','slug','cashback','url','image','old_cashback','description'])->where('status','active')->orderBy("visits", "DESC")->paginate(10);
       else if($letter!='' && $letter !='0-9') {
           $retailersData = Retailers::where('status', 'active')->where(function ($inner_query) use ($date) {
                   return $inner_query->where('end_date', '0000-00-00 00:00:00')->orWhere('end_date', '>=', $date->format('Y-m-d H:i:s'));
               })
               ->where( DB::raw('UPPER(title)'),'LIKE', $letter.'%')->orderBy("visits", "DESC")->paginate(10);
         }else if($letter =='0-9'){

           $retailersData = Retailers::where('status', 'active')->where(function ($inner_query) use ($date) {

               return $inner_query->where('end_date', '0000-00-00 00:00:00')->orWhere('end_date', '>=', $date->format('Y-m-d H:i:s'));
           })
               ->whereRaw('title REGEXP \'^[0-9]\'')->orderBy("visits", "DESC")->paginate(10);
       }
    /*  echo "<pre>";
       print_r($retailersData->currentPage());

       print_r($retailersData->currentPage()+$retailersData->total());
     print_r($retailersData);
       exit;*/
       $page_data['first_item']=$retailersData->firstItem();
       $page_data['last_item']=$retailersData->lastItem();
       $page_data['total_items']=$retailersData->total();

        return view('stores.index', ['retailers'=>$retailersData,'page_data'=>$page_data]);
    }
}
