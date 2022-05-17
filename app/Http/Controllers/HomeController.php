<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    //I'll delete any unnecessary functions later
    //I'll delete any unnecessary functions later




    public function index(){
        $sliderdata=Product::limit(3)->get();
        $productlist1=Product::limit(20)->get();
        $setting= Setting::first();

        return view('home.index',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1
        ]);
    }

    public function about(){
        $setting= Setting::first();
        return view('home.about',[
            'setting'=>$setting
        ]);
    }

    public function product($id){
        $setting= Setting::first();
        $data=Product::find($id);
        $images = DB::table('images')->where('product_id',$id)->get();
        return view('home.product',[
            'setting'=>$setting,
            'data'=>$data,
            'images'=>$images
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
