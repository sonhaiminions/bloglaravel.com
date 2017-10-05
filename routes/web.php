<?php

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
});
Route::get('mu/{tyso}',function($tyso){
	echo "ty so la: ".$tyso;
})->where(['tyso'=>'[0-9a-z]{3}+']);

 route::get('xsvietlot/{maso}',function($maso){
 	echo "ma du thuong vl : ".$maso;
 })->where(['maso'=>'[0-9a-z]{2,13}']);