<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\myform;

class formcontroller extends Controller
{
     
     public function myform(){

     	return view("form.myform");
     }

    public function submitmyform(myform $request){
    /* public function submitmyform(Request $request){
     	//die("form submitted");
     	//validated method
         $this->validate($request, [

         	'name' => 'required',
         	'email' => 'required |max :20|min:8|email|unique: students',
         	'age' => 'required'


           ],[ 

           	 'name.required'=>'Name should be filled',
           	  'email.required' => 'email should be filled',
           	  'email.min' =>'Lenght should be more than 8'


           
          ]); */

     	print_r($request->all());



     }




}
