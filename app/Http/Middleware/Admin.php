<?php

namespace App\Http\Middleware;

use Closure;
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
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if($user == NULL){
            return redirect('/login') ->with('autoLogout', 'Error! Login again');;

        }
        if($user -> role == '1'){
            return $next($request);
        }
          else{
            Auth::logout();
            abort(403, 'Unauthorized action.');
                   
        }
       
    }
}
