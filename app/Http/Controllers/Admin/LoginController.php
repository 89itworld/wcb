<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('admin', ['except' => ['login','postLogin','logout','reset']]);
    }

    public function login(){
        return view('admin.login')->with('msg','');
    }

    public function postLogin(Request $request){

        $username = $request->username;
        $password =md5(sha1($request->password));
        $user = User::where('username',$username)->where('password',$password)->where('admin','true')->select('id','username')->first();
        if ( $user ) {

            Session::set('admin',$user->id);
            Session::set('adminName',$user->username);
            return redirect('admin/dashboard');
        }
        return view('admin.login')->with('msg','Invalid Username/Password');

    }

    public function reset(){
        return view('admin.email');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(){
        Session::set('admin','');
        return redirect('/admin');
    }
}
