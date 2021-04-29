<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaptopModel;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlaptop');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getModell= request('lmodel'); 
        $getLaunchl= request('llaunch');
        $getBrandl= request('lbrand');
        $getDisplayl= request('ldisplay');
        $getPlatforml= request('lplatform');
        $getMemoryl= request('lmemory');
        $getBatteryl= request('lbattery');
        $getGraphicsl= request('lgraphics');
        $getProcessorl= request('lprocessor');
        $getColorl= request('lcolor');
        $getPricel= request('lprice');

        echo $getModell;
        echo "<br>";
        echo $getLaunchl;
        echo "<br>";
        echo $getBrandl;
        echo "<br>";
        echo $getDisplayl;
        echo "<br>";
        echo $getPlatforml;
        echo "<br>";
        echo $getMemoryl;
        echo "<br>";
        echo $getBatteryl;
        echo "<br>";
        echo $getGraphicsl;
        echo "<br>";
        echo $getProcessorl;
        echo "<br>";
        echo $getColorl;
        echo "<br>";
        echo $getPricel;
        echo "<br>";

        $laptop=new LaptopModel();

        $laptop->lmodel=$getModell;
        $laptop->llaunch=$getLaunchl;
        $laptop->lbrand=$getBrandl;
        $laptop->ldisplay=$getDisplayl;
        $laptop->lplatform=$getPlatforml;
        $laptop->lmemory=$getMemoryl;
        $laptop->lbattery=$getBatteryl;
        $laptop->lgraphics=$getGraphicsl;
        $laptop->lprocessor=$getProcessorl;
        $laptop->lcolor=$getColorl;
        $laptop->lprice=$getPricel;

        $laptop->save();
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
