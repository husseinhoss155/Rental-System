<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomerController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\ReservationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\CarController;


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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('/login','login')->name('loginpage');
Route::post('/login',[LoginController::class,'CheckLogin'])->name('login');

Route::view('/specifiedperiodreport','/specifiedperiodreport')->name('showdatereport');
Route::post('/showfirstreport',[ReservationController::class,'show_res_dates'])->name('showspecreport');

Route::view('/specifiedcarreport','/specifiedcarreport')->name('showcarreport');
Route::post('/showsecondreport',[ReservationController::class,'show_car_dates'])->name('showcreport');

Route::view('/payment','/payment')->name('showpayment');
Route::post('/paymentreport',[ReservationController::class,'show_payment_dates'])->name('showpaymentreport');

Route::view('/creserve','/creserve')->name('customerreservations');
Route::post('/creservereport',[ReservationController::class,'show_cust_dates'])->name('showcustomerreservations');

Route::view('/carstatus','/carstatus')->name('cstatus');
Route::post('/carstatusshow',[CustomerController::class,'show_car_status'])->name('cstatusshow');

Route::view('/admincar','admincar')->name('addcar');
Route::post('/admincar',[Admin::class,'newcar'])->name('caradd');
Route::view('/updatecar','updatecar')->name('updatecar');
Route::post('/updatecar',[Admin::class,'updatecar'])->name('carupdate');
Route::view('/adminpage','adminpage');
Route::post('/adminpage',[Admin::class,'s']);

Route::view('reservation','reservation');
Route::view('paymentsuccess','paymentsuccess');
Route::get('output',[CustomerController::class,'viewOutput'])->name('viewoutput');
Route::view('reservedone','reservedone');
//Route::view('showreservations','showreservations');
Route::post('/output',[CustomerController::class,'reserve'])->name('reserve');
Route::get('/userpage/{SSN}',[CustomerController::class,'showReservations'])->name('showres');
//Route::view('/showcar/showcalculate','/output');
//Route::view('/reservation/calculate','/output');
Route::view('/userpage','userpage')->name('userpage');
Route::post('/userpage/reset',[CustomerController::class,'reset'])->name('reset');
Route::post('/userpage/logout',[LoginController::class,'Logout'])->name('logout');
Route::post('/userpage/searchby',[CustomerController::class,'searchby'])->name('search');
Route::get('/userpage/{plate_id}/{SSN}',[CustomerController::class,'reserveview'])->name('reservepage');
Route::get('/showreservations/{plate_id}/{SSN}',[CustomerController::class,'pay'])->name('payment');
Route::post('/showcar',[CustomerController::class,'showCarDetails'])->name('showcar');
//Route::post('/reservation/calculate/done',[CustomerController::class,'reserve'])->name('reserve');
//Route::post('/showcar/showcalculate/done',[CustomerController::class,'reserve'])->name('showreserve');
Route::post('/showcar/showcalculate',[CustomerController::class,'calculatePrice'])->name('showcalculate');
Route::post('/reservation/calculate',[CustomerController::class,'calculatePrice'])->name('calculate');
Route::get('/userpage/pickup',[CustomerController::class,'pickup'])->name('pickup');
Route::get('/userpage/return',[CustomerController::class,'return'])->name('return');
Route::get('/userpage/pay',[CustomerController::class,'pay'])->name('pay');


Route::view('/carregister','carregister');
Route::post('/carregister',[CarController::class,'newcar']);


Route::view('/register','register');
Route::post('/register',[CustomerController::class,'newcustomer'])->name('newCustomer');
