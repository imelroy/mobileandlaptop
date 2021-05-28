<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\DispmobileController;
use App\Http\Controllers\DisplaptopController;
use App\Http\Controllers\YouraccountController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RealAdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});


Route::post("/login",[RealAdminController::class,'login']);
Route::get("/adminhome",[RealAdminController::class,'create']);
Route::get("/addmobile",[RealAdminController::class,'addMobile']);
Route::post("/mobileread",[RealAdminController::class,'store']);
Route::get("/addlaptop",[RealAdminController::class,'addLaptop']);
Route::post("/laptopread",[RealAdminController::class,'storeLaptop']);
Route::get("/viewallmobiles",[RealAdminController::class,'indexmobile']);
Route::get("/viewalllaptops",[RealAdminController::class,'indexlaptop']);
Route::get('/mobile/{id}/editmobile', [RealAdminController::class,'editmobile']);
Route::post('/mobileeditprocess/{id}', [RealAdminController::class,'updatemobile']);
Route::get('/laptop/{id}/editlaptop', [RealAdminController::class,'editlaptop']);
Route::post('/laptopeditprocess/{id}', [RealAdminController::class,'updatelaptop']);
Route::get('/mobile/{id}/delete', [RealAdminController::class,'mobiledeleteview']);
Route::post('/mobiledeleteprocess/{id}',[RealAdminController::class,'destroymobile']);
Route::get('/laptop/{id}/delete', [RealAdminController::class,'laptopdeleteview']);
Route::post('/laptopdeleteprocess/{id}',[RealAdminController::class,'destroylaptop']);


Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

Route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');
Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');


Route::get('/',[MainController::class,'login'])->name('auth.login');

Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('/home',[MobileController::class,'index']);
    Route::get('/admin/youraccount',[MainController::class,'youraccount']);
    Route::get('/aboutus',[AboutusController::class,'create']);
    Route::get('/admin/{id}/auth/edit',[MainController::class,'edit']);
    Route::post('/usereditprocess/{id}',[MainController::class,'update']);
    Route::get('/contactus',[ContactusController::class,'create']);
    Route::get('/mobile',[DispmobileController::class,'index']);
    Route::get('/laptop',[DisplaptopController::class,'index']);
    Route::get("mobiledetail/{id}",[MobileController::class,'mobiledetail']);
    Route::get("mobiledropview/{id}",[MobileController::class,'mobiledropview']);
    Route::get("laptopdropview/{id}",[LaptopController::class,'laptopdropview']);
    Route::get("search",[MobileController::class,'search']);
    Route::post("add_to_cart",[MobileController::class,'addToCart']);
    Route::get("cartlist",[MobileController::class,'cartList']); 
    Route::get("removecart/{id}",[MobileController::class,'removeCart']); 
    Route::get("ordernow",[MobileController::class,'orderNow']); 
    Route::post("orderplace",[MobileController::class,'orderPlace']);
    Route::get("myorders",[MobileController::class,'myOrders']);
    Route::get("/mcancelorder/{id}/delete",[MobileController::class,'mdeleteview']);
    Route::post("/mcancelorder/{id}",[MobileController::class,'mdestroy']); 
    Route::get("/lcancelorder/{id}/delete",[MobileController::class,'ldeleteview']);
    Route::post("/lcancelorder/{id}",[MobileController::class,'ldestroy']); 

});

