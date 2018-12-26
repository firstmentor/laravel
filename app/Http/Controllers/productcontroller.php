<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class productcontroller extends Controller
{
    public function selectmodel(){

      //record fatch
        $product = new Product;
        //$data= $product->all(); //first

        //$data = $product->orderBy('id','desc')->first();

        //$data = $product->where(['id'=>3])->first();

        // $data =$product->find(3);

        //$data = $product->find([3,4]);

        //print_r($data);



       /* foreach($data as $key=>$value){

           echo $value['name']. " ".$value['email']."<br/>"; 
        }*/

    }

    public  function updatemodel(){

        $product = new Product; //object

        $data = $product->find(3);

        $data->name = "mca";
        $data->quantity=23;
        $data->save();

        //print_r($data);
     }

    public function deletemodel(){

        $product = new Product;
        $data = $product->find(3); //data fatch
        $data->delete();
    } 





    
     public function insertorm(){

     	/*$product = new Product( 

     	    ['name' => 'demo8', 'quantity' => 40, 'description' => 'Hello data'
     	    ]
     	    ); //object
     	 $product->save();*/

     	 $product = Product::create(

     	 	['name' => 'demo11', 'quantity' =>90, 'description' => 'good'
           ]);

             
             

             //First method insert data Model//
             /*$product->name ="demo product";
             $product->quantity =10;
             $product->description ="this is good ";
             $product->save();*/


     }




}
