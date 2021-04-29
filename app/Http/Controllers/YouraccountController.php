<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YouraccountModel;

class YouraccountController extends Controller
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
        return view('youraccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getName= request('name'); 
        $getEmail= request('email');
        $getMobile= request('mobile');
        $getAddress= request('address');
        
        
        echo $getName;
        echo "<br>";
        echo $getEmail;
        echo "<br>";
        echo $getMobile;
        echo "<br>";
        echo $getAddress;
        echo "<br>";
        
        $youraccount=new YouraccountModel();

        $youraccount->name=$getName;
        $youraccount->email=$getEmail;
        $youraccount->mobile=$getMobile;
        $youraccount->address=$getAddress;
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
