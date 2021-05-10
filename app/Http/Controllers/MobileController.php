<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Cart;

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
       $data= Mobile::where('Model', 'like', '%'.$req->input('query').'%')
       ->get();

        return view('search',['mobiles'=>$data]);
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

        return view('cartlist',['mobiles'=>$mobiles]);
    }
    
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    //  public function create()
    //  {
    //      return view('mobile');
    //  }
}
