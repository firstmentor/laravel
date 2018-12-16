<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class arraycontroller extends Controller
{
    
    public function array()
    {  
       $users = ["vikas","mohit","rahul"];
       $name ="PNINFOSYS";
      // return view('include.array', array("users"=>$users , "name=>$name")); 


       //return view('include.array', compact("users","name"));



       //return view('include.array')->with(["users"=>$users, "name"=>$name]);


       return view('include.array')->withUsers($users)->withname($name);



    }
}
