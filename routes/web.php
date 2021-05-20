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



route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');



route::get('/',[MainController::class,'login'])->name('auth.login');

route::group(['middleware'=>['AuthCheck']],function(){
    route::get('/home',[MobileController::class,'index']);
    route::get('/admin/youraccount',[MainController::class,'youraccount']);
    route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
    route::get('/aboutus',[AboutusController::class,'create']);
    route::get('/admin/{id}/auth/edit',[MainController::class,'edit']);
    route::post('/usereditprocess/{id}',[MainController::class,'update']);
    route::get('/contactus',[ContactusController::class,'create']);
    route::get('/mobile',[DispmobileController::class,'index']);
    route::get('/laptop',[DisplaptopController::class,'index']);
    Route::get("mobiledetail/{id}",[MobileController::class,'mobiledetail']);
    Route::get("mobiledropview/{id}",[MobileController::class,'mobiledropview']);
    Route::get("laptopdropview/{id}",[LaptopController::class,'laptopdropview']);
    Route::get("search",[MobileController::class,'search']);
    Route::get("searchlaptop",[LaptopController::class,'searchlaptop']);
    Route::post("add_to_cart",[MobileController::class,'addToCart']);
    Route::get("cartlist",[MobileController::class,'cartList']); 
    Route::get("removecart/{id}",[MobileController::class,'removeCart']); 
    Route::get("ordernow",[MobileController::class,'orderNow']); 
    Route::post("orderplace",[MobileController::class,'orderPlace']);
    Route::get("myorders",[MobileController::class,'myOrders']);
});