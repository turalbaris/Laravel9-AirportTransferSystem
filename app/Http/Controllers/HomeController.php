<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    //I'll delete any unnecessary functions later
    //I'll delete any unnecessary functions later




    public function index(){
        $sliderdata=Product::limit(3)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata
        ]);
    }


//
//    public function param($id){
//        echo "1.Parameter is: ", $id ;
//    }
//
//
//
//    public function param2($id,$number)
//    {
//        return view('home.test2parameters', [
//            'id' => $id,
//            'number' => $number
//        ]);
//    }
//
//    public function save(Request $request){
//        echo "Save Function :))) ";
//        echo "<br>First Name :",$_REQUEST["fname"];
//        echo "<br>Last Name :",$_REQUEST["lname"];
//    }







}
