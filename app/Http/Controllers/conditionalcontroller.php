<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conditionalcontroller extends Controller
{
   

   public function conditional(){

         $name ="pninfosys"; //condition statement

         $names =[""];


   	     return view('include.conditional',compact("name"));
   }
}
