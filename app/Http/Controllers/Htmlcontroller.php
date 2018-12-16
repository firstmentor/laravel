<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Htmlcontroller extends Controller
{
    
    public function home(){

    	return view ("html.home");


    }

    public function featured(){
        
        return view ("html.featured");

    }

    public function reviews(){

    	return view ("html.reviews");
    }

    public function download(){
        
        return view ("html.download");
    	
    }
}
