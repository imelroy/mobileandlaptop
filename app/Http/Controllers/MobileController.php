<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Laptop;
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
    function mobiledetail($id)
    {
         $data= Mobile::find($id);
         return view('mobiledetail',['home'=>$data]);
        
    }
    function mobiledropview($id)
    {
         $data= Mobile::find($id);
         return view('mobiledropview',['mobile'=>$data]);
        
    }
    function search(Request $req)
    {
       $mdata= Mobile::where('Model', 'like', '%'.$req->input('query').'%')
       ->get();

        $ldata= Laptop::where('Model', 'like', '%'.$req->input('query').'%')
        ->get();

       // return view('searchlaptop',['laptops'=>$data]);
        return view('search',['mobiles'=>$mdata],['laptops'=>$ldata]);
    }
    
    function addToCart(Request $req)
    {
        if($req->session()->has('LoggedUser'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('id',session('LoggedUser'));
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/home');
        }
        else
        {
            return redirect('/');
        }
    }

    static function cartItem()
    {
     $userId=Session::get('id',session('LoggedUser'));
     return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        
        $userId=Session::get('id',session('LoggedUser'));
        $mobiles= DB::table('cart')
        ->join('mobiles','cart.product_id','=','mobiles.id')
        ->where('cart.user_id',$userId)
        ->select('mobiles.*','cart.id as cart_id')
        ->get();

        $laptops= DB::table('cart')
        ->join('laptops','cart.product_id','=','laptops.id')
        ->where('cart.user_id',$userId)
        ->select('laptops.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['mobiles'=>$mobiles],['laptops'=>$laptops]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    
    function orderNow()
    {
        $userId=Session::get('id',session('LoggedUser'));
         $mtotal= $mobiles= DB::table('cart')
        ->join('mobiles','cart.product_id','=','mobiles.id')
        ->where('cart.user_id',$userId)
        ->sum('mobiles.Price');
        $ltotal= $laptopss= DB::table('cart')
        ->join('laptops','cart.product_id','=','laptops.id')
        ->where('cart.user_id',$userId)
        ->sum('laptops.Price');

         return view('ordernow',['total'=>$mtotal+$ltotal]);
    }
   
    function orderPlace(Request $req)
    {
        $userId=Session::get('id',session('LoggedUser'));
        $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="Processing";
             $order->payment_method=$req->payment;
             $order->payment_status="Pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/home');
    }

    function myOrders()
    {
        $userId=Session::get('id',session('LoggedUser'));
        $morders= DB::table('orders')
         ->join('mobiles','orders.product_id','=','mobiles.id')
         ->where('orders.user_id',$userId)
         ->get();
        $lorders= DB::table('orders')
         ->join('laptops','orders.product_id','=','laptops.id')
         ->where('orders.user_id',$userId)
         ->get();
         
         return view('myorders',['morders'=>$morders],['lorders'=>$lorders]);


        
    }
    
    function mdeleteview($id)
    {
        $morders=Order::find($id);
        return view('myorders');
    }

    function mdestroy($id)
    {

        $morders=Order::find($id);

        $morders->delete();
        
        return redirect('myorders');
    }

     function ldeleteview($id)
    {
        $lorders=Order::find($id);
        return view('myorders');
    }

    function ldestroy($id)
    {

        $lorders=Order::find($id);

        $lorders->delete();
        
        return redirect('myorders');
    }
    
   
}