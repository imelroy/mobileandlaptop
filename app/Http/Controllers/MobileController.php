<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobileModel;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobiles=MobileModel::all();
        return view('viewallmobiles',compact('mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createmobile');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getModel= request('mmodel');
        $getNetwork= request('mnetwork');
        $getLaunch= request('mlaunch');
        $getBody= request('mbody');
        $getDisplay= request('mdisplay');
        $getPlatform= request('mplatform');
        $getMemory= request('mmemory');
        $getBattery= request('mbattery');
        $getMaincamera= request('mmaincamera');
        $getSelfiecamera= request('mselfiecamera');
        $getFeatures= request('mfeatures');
        $getPrice= request('mprice');

        echo $getModel;
        echo "<br>";
        echo $getNetwork;
        echo "<br>";
        echo $getLaunch;
        echo "<br>";
        echo $getBody;
        echo "<br>";
        echo $getDisplay;
        echo "<br>";
        echo $getPlatform;
        echo "<br>";
        echo $getMemory;
        echo "<br>";
        echo $getBattery;
        echo "<br>";
        echo $getMaincamera;
        echo "<br>";
        echo $getSelfiecamera;
        echo "<br>";
        echo $getFeatures;
        echo "<br>";
        echo $getPrice;
        echo "<br>";

        $mobile=new MobileModel();

        $mobile->mmodel=$getModel;
        $mobile->mnetwork=$getNetwork;
        $mobile->mlaunch=$getLaunch;
        $mobile->mbody=$getBody;
        $mobile->mdisplay=$getDisplay;
        $mobile->mplatform=$getPlatform;
        $mobile->mmemory=$getMemory;
        $mobile->mbattery=$getBattery;
        $mobile->mmaincamera=$getMaincamera;
        $mobile->mselfiecamera=$getSelfiecamera;
        $mobile->mfeatures=$getFeatures;
        $mobile->mprice=$getPrice;

        $mobile->save();

        return redirect('/viewallmobiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
