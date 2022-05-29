<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Message;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting= Setting::first();
        return view('home.user-profile',[
            'setting'=>$setting
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display the user reviews.
     *
     * @return \Illuminate\Http\Response
     */
    public function myreviews()
    {
        $setting= Setting::first();
        $data = DB::table('comments')->where('user_id', '=', Auth::user()->id)->get();
        $userinfo= User::find(Auth::user()->id);
        return view('home.user-reviews',[
            'setting'=>$setting,
            'data'=>$data,
            'userinfo'=>$userinfo
        ]);
    }

    /**
     * Remove the user review from storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function destroymyreview($id)
    {
        $data= Comment::find($id);
        $data->delete();
        return redirect()->back()->with('success','Review Deleted');
    }

    /**
     * Display the user messages.
     *
     * @return \Illuminate\Http\Response
     */
    public function mymessages()
    {
        $setting= Setting::first();
        $data = DB::table('messages')->where('email', '=', Auth::user()->email)->get();
        //$userinfo= User::find(Auth::user()->id);
        return view('home.user-messages',[
            'setting'=>$setting,
            'data'=>$data
            //'userinfo'=>$userinfo
        ]);
    }

    /**
     * Remove the user message from storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function destroymymessage($id)
    {
        $data= Message::find($id);
        $data->delete();
        return redirect()->back()->with('success','Message Deleted');
    }

}
