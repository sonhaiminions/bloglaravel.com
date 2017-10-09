<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function() {
	echo "xin chao cac bén";
});
// truyen tham so
Route::get('truyenbien/{para?}',function($para=''){
	
	// $para=(int)$para;var_dump($para);
	return "truyen bien  ".$para;


});
 route::get('chitruyenso/{so}',function($so){
 	return "ban dung so :".$so;
 })->where(['so'=>'[0-13]+']);

 route::get('string/{str}',function($str){

 	return 'who are you ? i am :'.$str;

 })->where(['str'=>'[b-zC-D]+']);
 //truyen so hoac chu 2 chux so tro len
 route::get('xsvietlot/{maso}',function($maso){
 	echo "ma du thuong vl : ".$maso;
 })->where(['maso'=>'[0-9a-z]{2,13}']);