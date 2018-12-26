<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class dbcontroller extends Controller
{

	 public function queryrun()
	 {

	 	// $data = DB::table('students')->insert( 

	 	//  [
	 	// 	['name' =>'viki', 'email' => 'viki@gmail.com', 'location' => 'bhind'],
	 	// 	['name' =>'mohit', 'email' => 'mohit@gmail.com', 'location' => 'etawah'],
	 	// 	['name' =>'anit', 'email' => 'anit@gmail.com', 'location' => 'gorami']

	 	// ]

   //      );

	 	// echo $data;

	 	//$data = DB::table('students')->orderBy('id','desc')->get();
	 	//$data =DB::table('students')->where(['id' => 4])->get();

	 	//echo $data = DB::table('students')->where(['id' => 5])->delete();

	 	//echo $data = DB::table('students')->where(['id' =>3])->update(['name' => 'updatename', 'email' =>'d@gmail.com']);

	 	//echo $data = DB::table('students')->count();

	 	//$data = DB::table('students')->pluck("email");
	 	//print_r($data);

	 	$data = DB::table('students')->select('name','email as email_id')->get();
	 	print_r($data);



	 	return view("queryrun",compact("data"));
	 }
}
