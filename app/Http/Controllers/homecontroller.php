<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function product()
    {
       
       return view('home.product');

    }

    public function service()
    {
       
       return view('home.service');

    }
    public function team()
    {
       
       return view('home.team');

    }
}
