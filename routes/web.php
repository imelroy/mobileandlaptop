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
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route::get('/home',[HomeController::class,'create']);

//route::get('/youraccount',[YouraccountController::class,'create']);
//route::post('/youraccountread',[YouraccountController::class,'store']);
//route::view('/login',"login");
//route::post('/loginread',"HomeController@loginread");
//route::post('/mobileread',[MobileController::class,'store']);
// route::get('/mobile',[MobileController::class,'create']);
// route::get('/laptop',[LaptopController::class,'create']);
// route::post('/laptopread',[LaptopController::class,'store']);
// route::post('/registerread',[HomeController::class,'store']);
// route::get('/viewallmobiles',[MobileController::class,'index']);

route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');

route::get('/',[MainController::class,'login'])->name('auth.login');

route::group(['middleware'=>['AuthCheck']],function(){
    route::get('/home',[MobileController::class,'index']);
    route::get('/admin/youraccount',[MainController::class,'youraccount']);
    route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
    route::get('/aboutus',[AboutusController::class,'create']);
    route::get('/contactus',[ContactusController::class,'create']);
    route::get('/mobile',[DispmobileController::class,'index']);
    route::get('/laptop',[DisplaptopController::class,'index']);
    Route::get("mobiledetail/{id}",[MobileController::class,'mobiledetail']);
    Route::get("mobiledropview/{id}",[MobileController::class,'mobiledropview']);
    Route::get("laptopdropview/{id}",[LaptopController::class,'laptopdropview']);
    Route::get("search",[MobileController::class,'search']);
    Route::get("searchlaptop",[LaptopController::class,'searchlaptop']);
    Route::post("add_to_cart",[MobileController::class,'addToCart']);
   // Route::post("add_to_cart",[LaptopController::class,'addToCart']);
    Route::get("cartlist",[MobileController::class,'cartList']); 
   // Route::get("cartlist",[LaptopController::class,'cartList']);
    Route::get("removecart/{id}",[MobileController::class,'removeCart']); 
    Route::get("ordernow",[MobileController::class,'orderNow']); 
   // Route::get("ordernow",[LaptopController::class,'orderNow']); 
    Route::post("orderplace",[MobileController::class,'orderPlace']);

});