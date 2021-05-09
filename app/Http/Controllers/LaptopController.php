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
    function searchlaptop(Request $req)
    {
       $data= Laptop::where('Model', 'like', '%'.$req->input('query').'%')
       ->get();

        return view('searchlaptop',['laptops'=>$data]);
    }


    // public function create()
    //  {
    //      return view('laptop');
    //  }
}
   