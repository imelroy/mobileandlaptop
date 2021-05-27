<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Mobile;
use App\Models\Laptop;
class RealAdminController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/adminhome');
        }

        // $req->validate([
        //     'email'=>'required|email',
        //     'password'=>'required'
        // ]);

        // $userInfo = RealAdmin::where('email','=',$req->email)->first();
        // if(!$userInfo){
        //     return back()-> with ('fail', 'We dont recognize your email');
        // }else {
        //     //check password
        //     if(Hash::check($req->password,$userInfo->password)){
        //         $req->session()->put('LoggedUser',$userInfo->id);
        //         return redirect('/home');
        //     }else {
        //         return back()-> with ('fail', 'Incorrect Password');
        //     }
        // }



        // $req->validate([
        //     'email'=>'required',
        //     'password'=>'required'
        // ]);
        // $getemail=$req->input('email');
        // $getpassword=$req->input('password');
        // $data=DB::select('select email,password from realadmins where email=? and password=?',[$getemail,$getpassword]);

        // if($data)
        // {
        //     $dat= $req->input();
        //     $req->session()->put('LoggedUser',$dat['email']);
        //     return view('adminlogin')
        // }
        // else
        // {
        //     return back()->with('fail', 'Incorrect Email or Password');
        // }



        
    }
    public function create()
    {
        return view('adminhome');
    }

    function addMobile()
    {
        return view('addmobile');
    }
    function addLaptop()
    {
        return view('addlaptop');
    }
    public function store(Request $request)
    {
        
        $getModel= request('Model');
        $getMemory= request('Memory');
        $getDisplay= request('Display');
        $getCamera= request('Camera');
        $getFeatures= request('Features');
        $getPrice= request('Price');
        $getGallery= request('Gallery');
        

        $mobile=new Mobile();

        $mobile->Model=$getModel;
        $mobile->Memory=$getMemory;
        $mobile->Display=$getDisplay;
        $mobile->Camera=$getCamera;
        $mobile->Features=$getFeatures;
        $mobile->Price=$getPrice;
        $mobile->Gallery=$getGallery;
       

        $mobile->save();

        return redirect('/adminhome');

    }

    function storelaptop(Request $request)
    {
        
        $getModel= request('Model');
        $getMemory= request('Memory');
        $getDisplay= request('Display');
        $getPlatform= request('Platform');
        $getProcessor= request('Processor');
        $getGraphics= request('Graphics');
        $getPrice= request('Price');
        $getGallery= request('Gallery');
        

        $laptop=new Laptop();

        $laptop->Model=$getModel;
        $laptop->Memory=$getMemory;
        $laptop->Display=$getDisplay;
        $laptop->Platform=$getPlatform;
        $laptop->Processor=$getProcessor;
        $laptop->Graphics=$getGraphics;
        $laptop->Price=$getPrice;
        $laptop->Gallery=$getGallery;
       

        $laptop->save();

        return redirect('/adminhome');

    }
}
