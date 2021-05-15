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

    function cartList()
    {
        
        $userId=Session::get('id',session('LoggedUser'));
        $laptops= DB::table('cart')
        ->join('laptops','cart.product_id','=','laptops.id')
        ->where('cart.user_id',$userId)
        ->select('laptops.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['laptops'=>$laptops]);
    }

    // function orderNow()
    // {
    //     $userId=Session::get('id',session('LoggedUser'));
    //      $ltotal= $laptopss= DB::table('cart')
    //     ->join('laptops','cart.product_id','=','laptops.id')
    //     ->where('cart.user_id',$userId)
    //     ->sum('laptops.Price');

    //     return view('ordernow',['ltotal'=>$ltotal]);
    // }
    // function cartList()
    // {
        
    //     $userId=Session::get('id',session('LoggedUser'));
    //     $laptops= DB::table('cart')
    //     ->join('laptops','cart.product_id','=','laptops.id')
    //     ->where('cart.user_id',$userId)
    //     ->select('laptops.*','cart.id as cart_id')
    //     ->get();

    //     return view('cartlist',['laptops'=>$laptops]);
    // }

    function lmyOrders()
    {
        $userId=Session::get('id',session('LoggedUser'));
       return $orders= DB::table('orders')
         ->join('laptops','orders.product_id','=','laptops.id')
         ->where('orders.user_id',$userId)
         ->get();
 
        // return view('myorders',['orders'=>$orders]);
    }

    // public function create()
    //  {
    //      return view('laptop');
    //  }
}
   