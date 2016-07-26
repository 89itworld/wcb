<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    function pr($tarr, $temp=0){
        if($temp==0){
                     echo "<pre>";
            print_r($tarr); die("done");
        } else{
            echo "<pre>";
            print_r($tarr);
        }

    }

    function getCategories(){
        $categories = DB::select("select category_id,name,category_url from categories");
        return $categories;
    }


}
