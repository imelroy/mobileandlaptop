<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Mobile;
use App\Models\Laptop;
use App\Models\Admin;
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

    public function indexmobile()
    {
    
        $mobiles=Mobile::all();

        return view('viewallmobiles',compact('mobiles'));

    }
    public function indexlaptop()
    {
    
        $laptops=Laptop::all();

        return view('viewalllaptops',compact('laptops'));

    }

    public function editmobile($id)
    {
        $mobiles=Mobile::find($id);
        return view('mobileeditview',compact('mobiles'));
    }

    public function updatemobile(Request $request, $id)
    {
        $mobile=Mobile::find($id);

        $getModel= request('Model');
        $getMemory= request('Memory');
        $getDisplay= request('Display');
        $getCamera= request('Camera');
        $getFeatures= request('Features');
        $getPrice= request('Price');
        $getGallery= request('Gallery');
        
        $mobile->Model=$getModel;
        $mobile->Memory=$getMemory;
        $mobile->Display=$getDisplay;
        $mobile->Camera=$getCamera;
        $mobile->Features=$getFeatures;
        $mobile->Price=$getPrice;
        $mobile->Gallery=$getGallery;
       

        $mobile->save();

        return redirect('/viewallmobiles');
    }

    public function editlaptop($id)
    {
        $laptops=Laptop::find($id);
        return view('laptopeditview',compact('laptops'));
    }

    public function updatelaptop(Request $request, $id)
    {
        $laptop=Laptop::find($id);

        $getModel= request('Model');
        $getMemory= request('Memory');
        $getDisplay= request('Display');
        $getPlatform= request('Platform');
        $getProcessor= request('Processor');
        $getGraphics= request('Graphics');
        $getPrice= request('Price');
        $getGallery= request('Gallery');
        
        $laptop->Model=$getModel;
        $laptop->Memory=$getMemory;
        $laptop->Display=$getDisplay;
        $laptop->Platform=$getPlatform;
        $laptop->Processor=$getProcessor;
        $laptop->Graphics=$getGraphics;
        $laptop->Price=$getPrice;
        $laptop->Gallery=$getGallery;

        $laptop->save();
       
        return redirect('/viewalllaptops');
    }

    public function mobiledeleteview($id)
    {
        $mobiles=Mobile::find($id);
        return view('mobiledeleteview',compact('mobiles'));
    }

    public function destroymobile($id)
    {
        $mobile=Mobile::find($id);

        $mobile->delete();

        return redirect('/viewallmobiles');
    }

    public function laptopdeleteview($id)
    {
        $laptops=Laptop::find($id);
        return view('laptopdeleteview',compact('laptops'));
    }

    public function destroylaptop($id)
    {
        $laptop=Laptop::find($id);

        $laptop->delete();

        return redirect('/viewalllaptops');
    }

    
}
