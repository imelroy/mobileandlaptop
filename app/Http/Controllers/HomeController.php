<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use Illuminate\Support\Facades\DB;
use App\Models\Laptop;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $Username= $request->input('username');  
        // $Name= $request->input('name');
        // $Email= $request->input('email');
        // $Mobile= $request->input('mobile');
        // $Address= $request->input('address');
        // $Password= $request->input('password');
        // echo DB::insert('insert into home_models(username,name,email,mobile,address,password) values(?,?,?,?,?,?)',[$Username,$Name,$Email,$Mobile,$Address,$Password]);

        // $getUsername= request('username'); 
        // $getName= request('name');
        // $getEmail= request('email');
        // $getMobile= request('mobile');
        // $getAddress= request('address');
        // $getPassword= request('password');
        
        // echo $getUsername;
        // echo "<br>";
        // echo $getName;
        // echo "<br>";
        // echo $getEmail;
        // echo "<br>";
        // echo $getMobile;
        // echo "<br>";
        // echo $getAddress;
        // echo "<br>"; 
        // echo $getPassword;
        // echo "<br>";
        

        // $register=new HomeModel();

        // $register->username=$getUsername;
        // $register->name=$getName;
        // $register->email=$getEmail;
        // $register->mobile=$getMobile;
        // $register->address=$getAddress;
        // $register->password=$getPassword;

        // $register->save();
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
