<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('user')&&($request->path()!='/login')) {
            return redirect('/login')->with ('fail','You must be logged in');
        }
        if(session()->has('user')&&($request->path()=='/login')) {
            return back();
        }
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');



        // $user= User::where(['email'=>$req->email])->first();
        // if(!$user || !Hash::check($req->password,$user->password))
        // {
        //     return "Username or password is not matched";
        // }
        // else{
        //     $req->session()->put('user',$user);
        //     return redirect('/adminhome');
        // }
        //return $next($request);
    }
}
