<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaptopController;
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

route::get('/',[HomeController::class,'create']);
route::get('/aboutus',[AboutusController::class,'create']);
route::get('/contactus',[ContactusController::class,'create']);
route::post('/mobileread',[MobileController::class,'store']);
route::get('/mobile',[MobileController::class,'create']);
route::get('/laptop',[LaptopController::class,'create']);
route::post('/laptopread',[LaptopController::class,'store']);
route::post('/registerread',[HomeController::class,'store']);
route::get('/viewallmobiles',[MobileController::class,'index']);
route::get('/youraccount',[YouraccountController::class,'create']);
route::post('/youraccountread',[YouraccountController::class,'store']);
//route::view('/login',"login");
//route::post('/loginread',"HomeController@loginread");

route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');


route::group(['middleware'=>['AuthCheck']],function(){
    route::get('/admin/dashboard',[MainController::class,'dashboard']);
    route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
});