<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForController extends Controller
{
    

    public function for(){

         $name ="Online web Tutor";

        $names = ["vikas","amit","aman","vikas"];
    	return view('include.for',compact("name","names"));
    }
}
