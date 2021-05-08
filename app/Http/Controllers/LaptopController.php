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
    function detail($id)
    {
        $data =Laptop::find($id);
        return view('detail',['home'=>$data]);
    }


    public function create()
     {
         return view('laptop');
     }
}
   