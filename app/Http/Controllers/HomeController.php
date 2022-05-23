<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

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

    public function faq(){
        $datalist= Faq::all();
        $setting= Setting::first();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);

    }

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

        return redirect()->route('contact')->with('info','Your review has been sent, Thank you.');
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
        return view('home.product',[
            'setting'=>$setting,
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews,
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
