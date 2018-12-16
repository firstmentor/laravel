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
