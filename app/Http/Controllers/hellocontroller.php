<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class hellocontroller extends BaseController
{

   public function index(){

   	  //return ("hello");

    echo "vikas is a good man";
   }


   public function text(){


   	return view ('text');


   }

}


