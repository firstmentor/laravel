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


Route::get('a','hellocontroller@index');

Route::get('b','hellocontroller@index');

Route::get('c','hellocontroller@text');

Route::get('rjit','pncontroller@rjit');
Route::get('itm','itmcontroller@itm');
Route::get('array','arraycontroller@array');

Route::get('product','homecontroller@product');
Route::get('service','homecontroller@service');
Route::get('team','homecontroller@team');



Route::get('/', function () {
    return view('welcome');
});

//HTML THEME//

Route::get("home","Htmlcontroller@home");
Route::get("featured","Htmlcontroller@featured");
Route::get("reviews","Htmlcontroller@reviews");

Route::get("download","Htmlcontroller@download");

//Conditional statement//
Route::get("conditional","conditionalcontroller@conditional");


//FOR//

Route::get("for","ForController@for");

//query builder//

Route::get("queryrun", "dbcontroller@queryrun");

//modelinseret//

Route::get("modelinsert","productcontroller@insertorm");

//select update delete model //
Route::get("select", "productcontroller@selectmodel");
Route::get("update", "productcontroller@updatemodel");
Route::get("delete", "productcontroller@deletemodel");

//form 
Route::get("myform","formcontroller@myform");
Route::post("submitmyform","formcontroller@submitmyform");


//Resource//

Route::resource('movie','MovieContoller');

