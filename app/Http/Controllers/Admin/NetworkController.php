<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Affnetwork;
use App\Models\Retailers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NetworkController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){

        $limit = isset($limit) ? $limit : 10;
        $affNetworks = Affnetwork::with('Retailers')->select(
            ['affnetworks.network_id','affnetworks.network_name','affnetworks.last_cashback_update','affnetworks.status']
        )->paginate($limit);
        return view('admin.network.index',compact('affNetworks'));

    }
}
