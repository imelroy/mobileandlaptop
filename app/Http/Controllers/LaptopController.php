<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

use Session;
use Illuminate\Support\Facades\DB;
class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     function index()
    {
        $data= Laptop::all();
        return view('home',['laptops'=>$data]);
    }
    function laptopdropview($id)
    {
         $data= Laptop::find($id);
         return view('laptopdropview',['laptop'=>$data]);
        
    }
    
}
   