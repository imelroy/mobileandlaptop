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
           $cart->user_id=$req->session()->get('LoggedUser')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/home');

        }
        else
        {
            return redirect('/');
        }
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
