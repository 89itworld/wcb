<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Retailers;
use Session;
use App\Models\User;
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
        return view('admin.retailers.add');
    }
}
