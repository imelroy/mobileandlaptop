<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class MainController extends Controller
{
   function login() {
       return view('auth.login');
   }
   function register() {
    return view('auth.register');
}
    function save(Request $request){
        
        $request->validate([
            'username'=>'required|unique:admins',
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'mobile'=>'required',
            'address'=>'required',
            'password'=>'required|min:5|max:15'
        ]);
            $admin =new Admin;
            $admin->username= $request->username;
            $admin->name= $request->name;
            $admin->email= $request->email;
            $admin->mobile= $request->mobile;
            $admin->address= $request->address;
            $admin->password=Hash::make($request->password);

            $save = $admin->save();

            if($save){
                return back()->with ('Success','New User has been successfully created');
            }else{
                return back()->with ('Fail','Something went wrong, try again later');
            }
    }
    function check(Request $request) {
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'
        ]);

        $userInfo = Admin::where('email','=',$request->email)->first();
        if(!userInfo){
            return back()-> with ('fail', 'We dont recognize your email');
        }else {
            if(Hash::check($request->password,$userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            }else {
                return back()-> with ('fail', 'Incorrect Password');
            }
        }
    }
}
 

