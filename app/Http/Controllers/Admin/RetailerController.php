<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Models\Retailers;
use Session;
use App\Models\RetailerToCategory;
use App\Models\RetailerToCountry;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RetailerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request){

        $limit =(int) isset($request->records_per_page) ? (int) $request->records_per_page : 10;
        $sort = isset($request->sort) ? $request->sort : 'retailer_id';
        $order = isset($request->order)  ? $request->order : 'ASC';
        $retailers = Retailers::with('Affnetwork')->select(
            ['Retailers.retailer_id','Retailers.title','Retailers.network_id','Retailers.cashback','Retailers.visits','Retailers.status','Retailers.added']
        )->orderBy('Retailers.'.$sort,$order)->paginate($limit);



        return view( 'admin.retailers.retailers', compact('retailers') );

    }

    public function view($id = null){
        $id = (int) $id;
        if ( $id ){
            $retailer = Retailers::where( 'retailer_id',$id)->first();
            return view('admin.retailers.retailer',compact('retailer'));
        }
        return redirect('/admin/retailers');
    }

    
    public function add(){
        $categories = Categories::select('category_id','name')->orderBy('name')->get();
        $countries = Countries::select('country_id','name')->orderBy('name')->get();
        return view('admin.retailers.add',compact('categories','countries') );
    }



    public function store( Request $request ){

        $this->validate($request, [
            'title' => 'required|unique:retailers|max:255',
            'slug' =>'max:255',
            'tags' => 'max:10',
            'url'  =>'required|min:8',
            'deal_of_week' => 'max:2',
            'featured'=>'max:2',

        ]);
        $retailer = new Retailers();
        $retailer->title = $request->title;
        $retailer->slug = $request->slug;
        $retailer->network_id = $request->network_id;
        $retailer->program_id = $request->program_id;
        $retailer->url = $request->url;
        $retailer->image = $request->image;
        $cashback = $request->cashback;
        $cashback.=$request->cashback_sign;
        $retailer->cashback = $cashback;
        $oldCashback = $request->old_cashback;
        $oldCashback.=$request->old_cashback_sign;
        $retailer->old_cashback = $oldCashback;
        $retailer->conditions = $request->conditions;
        $retailer->description = $request->description;
        $retailer->cashback_rates = $request->cashback_rates;
        $retailer->guidelines_to_earn = $request->guidelines_to_earn;
        $retailer->important = $request->important;
        $retailer->tags = $request->tags;
        $retailer->meta_description = $request->meta_description;
        $retailer->meta_keywords = $request->meta_keywords;
        $retailer->deal_of_week = $request->deal_of_week;
        $retailer->cashback_rates = $request->cashback_rates;
        $retailer->guidelines_to_earn = $request->guidelines_to_earn;
        $retailer->important = $request->important;
        $retailer->added = date('Y-m-d');
        $retailer->featured = $request->featured;
        $retailer->seo_title = $request->seo_title;
        $endDate = $request->end_date;
        $endDate .= ' '.$request->end_time;
        $retailer->end_date = $endDate;
        $retailer->website = $request->website;


       $retailer->save();

        $id = $retailer->retailer_id;
        echo "Retailer Id = $id";
        echo "<pre>";
        print_r($request->category_id);
        echo "</pre>";
        echo "<pre>";
        print_r($request->country_id);
        if ( $request->category_id ){;
            foreach ( $request->category_id as $categoryId ){
            $retailerToCategory = new RetailerToCategory();
                $retailerToCategory->retailer_id = $id;
                $retailerToCategory->category_id = $categoryId;
                $retailerToCategory->save();
                unset($retailerToCategory);
            }
        }

        if ( $request->country_id ){
            foreach($request->country_id as $countryId ){
                $retailerToCountry = new RetailerToCountry();
                $retailerToCountry->retailer_id = $id;
                $retailerToCountry->country_id = $countryId;
                unset($retailerToCountry);
            }
        }



    }

}
