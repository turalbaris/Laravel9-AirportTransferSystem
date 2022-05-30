<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Faq;
use App\Models\Location;
use App\Models\Message;
use App\Models\Product;
use App\Models\Rezervation;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(){
        $sliderdata=Product::limit(10)->get();
        $productlist1=Product::limit(20)->get();
        $setting= Setting::first();
        $locationdata= Location::all();
        $vehicle = Product::all();

        return view('home.index',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1,
            'locationdata'=>$locationdata,
            'vehicle'=>$vehicle
        ]);
    }

    public function about(){
        $setting= Setting::first();
        return view('home.about',[
            'setting'=>$setting
        ]);
    }

    public function references(){
        $setting= Setting::first();
        return view('home.references',[
            'setting'=>$setting
        ]);
    }

    public function contact(){
        $setting= Setting::first();
        return view('home.contact',[
            'setting'=>$setting
        ]);
    }


    public function booking(Request $request){
       // dd($request);
        $vehicle = Product::all();
        $data= Location::all();
        $setting= Setting::first();
        $findProductId =Product::find($request->product_id);
        return view('home.booking',[
            'setting'=>$setting,
            'data'=>$data,
            'vehicle'=>$vehicle,
            'findProductId'=>$findProductId
        ]);
    }

    public function booking2(Request $request){
        //dd($request);
        $setting= Setting::first();
        $data= Location::all();
        $findToLocation =Location::find($request->to_location_id);
        $findFromLocation =Location::find($request->from_location_id);
        $findTransfer =Product::find($request->transferInfo);

        //Calculates distance between chosen two locations
        $distance = (sqrt(pow($findFromLocation->lat-$findToLocation->lat,2)+
            pow($findFromLocation->long-$findToLocation->long,2))*100);
        $price = (($findTransfer->base_price)+($findTransfer->km_price)*$distance);
        $pricewithtax = ($price*($findTransfer->tax)/100)+$price;
        return view('home.booking2',[
            'findToLocation'=>$findToLocation,
            'findFromLocation'=>$findFromLocation,
            'findTransfer'=>$findTransfer,
            'setting'=>$setting,
            'data'=>$data,
            'distance'=>$distance,
            'pricewithtax'=>$pricewithtax,
            'price'=>$price
        ]);
    }

    public function storerezervation(Request $request){
        //dd($request);
        $data = new Rezervation();
        $data->user_id = $request->input('user_id');
        $data->product_id = $request->input('product_id');
        $data->from_location_id = $request->input('from_location_id');
        $data->to_location_id = $request->input('to_location_id');
        $data->price = $request->input('price');
        $data->Airline = $request->input('Airline');
        $data->flightnumber = $request->input('flightnumber');
        $data->flightdate = $request->input('flightdate');
        $data->flightime = $request->input('flightime');
        $data->pickuptime = $request->input('pickuptime');
        $data->Airline = $request->input('Airline');
        $data->note = $request->input('note');
        $data->ip = request()->ip();
        $data->status = $request->input('status');
        $data->save();

        return redirect()->route('booking')->with('info','Your rezervation request has been sent, Wait for a confirmation mail. Thank you.');
    }
//    I will change this part, It will go to the user profile reservation details, but later








    public function storemessage(Request $request){
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, Thank you.');
    }


    public function faq(){
        $datalist= Faq::all();
        $setting= Setting::first();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }


    public function storecomment(Request $request){
        //dd($request);
        $data = new Comment();
        $data->id = $request->input('id');
        $data->user_id = Auth::id();
        $data->product_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('product',['id'=>$request->input('product_id')])->with('success','Your comment has been sent, Thank you.');
    }


    public function product($id){
        //https://laravel.com/docs/9.x/queries#aggregates
        //Returns the number of reviews for the product that published.
        $reviewscount = DB::table('comments')
            ->where('product_id', '=', $id)
            ->where('status', '=', 'True')
            ->get()->count();
        //Returns the average of given stars for the product that published.
        $reviewsavg = DB::table('comments')
            ->where('product_id', '=', $id)
            ->where('status', '=', 'True')
            ->avg('rate');
        $setting= Setting::first();
        $data=Product::find($id);
        $images = DB::table('images')->where('product_id',$id)->get();
        $reviews = Comment::where('product_id',$id)->where('status','True')->get();
        $pid = $id;
        return view('home.product',[
            'setting'=>$setting,
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews,
            'pid'=>$pid,
            'reviewscount'=>$reviewscount,
            'reviewsavg'=>$reviewsavg
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function adminlogincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
