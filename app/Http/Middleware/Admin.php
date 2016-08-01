<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//    public function handle($request, Closure $next)
//    {
//        return $next($request);
//    }
    public function handle($request, Closure $next)
    {
        $id = Session::get('admin');
        
        $user = User::find($id);
        if ( $user && $user->admin =='true' ){

            return $next($request);
        } else {
            return redirect('/admin');
        }

    }
}
