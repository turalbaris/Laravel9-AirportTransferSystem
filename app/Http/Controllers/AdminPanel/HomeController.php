<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function index (){
        //Returns the number of unread messages. :)))
        //https://laravel.com/docs/9.x/queries#aggregates
        $setting= Setting::first();
        $newcount = DB::table('messages')->where('status', '=', 'New')->get()->count();
        $newrezervationcount = DB::table('rezervations')->where('status', '=', 'New')->get()->count();
        $acceptedrezervationcount = DB::table('rezervations')->where('status', '=', 'Accepted')->get()->count();
        $newcommentcount = DB::table('comments')->where('status', '=', 'New')->get()->count();
        return view ("admin.index",[
            'setting'=>$setting,
            'newcount' => $newcount,
            'newrezervationcount'=>$newrezervationcount,
            'acceptedrezervationcount'=>$acceptedrezervationcount,
            'newcommentcount'=>$newcommentcount
        ]);
    }

    public function setting (){
        $data= Setting::first();    //If table is empty add one record.
        if ($data==null){
            $data = new Setting();
            $data->title = 'Project Title';
            $data->save();
            $data= Setting()::first();
        }
        return view ("admin.setting",['data'=>$data]);
    }

    public function settingUpdate (Request $request){

        $id=$request->input('id');

        $data= Setting::find($id);
        $data->title= $request->input('title');
        $data->keywords= $request->input('keywords');
        $data->description= $request->input('description');
        $data->company= $request->input('company');
        $data->address= $request->input('address');
        $data->phone= $request->input('phone');
        $data->fax= $request->input('fax');
        $data->email= $request->input('email');
        $data->smtpserver= $request->input('smtpserver');
        $data->smtpemail= $request->input('smtpemail');
        $data->smtppassword= $request->input('smtppassword');
        $data->smtpport= $request->input('smtpport');
        $data->facebook= $request->input('facebook');
        $data->instagram= $request->input('instagram');
        $data->youtube= $request->input('youtube');
        $data->twitter= $request->input('twitter');
        $data->aboutus= $request->input('aboutus');
        $data->contact= $request->input('contact');
        $data->references= $request->input('references');
        if ($request->file('icon')){
            $data->icon= $request->file('icon')->store('images');
        }
        $data->status= $request->input('status');
        $data->save();
        return redirect()->route('admin.setting');
    }

}
