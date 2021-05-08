<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;

use Session;
use Illuminate\Support\Facades\DB;
class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     function index()
    {
        $data= Mobile::all();
        return view('home',['mobiles'=>$data]);
    }
    function detail($id)
    {
        $data =Mobile::find($id);
        return view('detail',['home'=>$data]);
    }

    
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
     public function create()
     {
         return view('mobile');
     }
}
