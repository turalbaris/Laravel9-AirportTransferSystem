<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Message;
use App\Models\Product;
use App\Models\Rezervation;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RezervationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newrezervationcount = DB::table('rezervations')->where('status', '=', 'New')->get()->count();
        $setting= Setting::first();
        $rezervationdata= Rezervation::all();
        return view('admin.rezervation.newrezervation.index',[
            'newrezervationcount'=>$newrezervationcount,
            'setting'=>$setting,
            'rezervationdata' => $rezervationdata
        ]);
    }

    public function acceptedindex()
    {
        $newrezervationcount = DB::table('rezervations')->where('status', '=', 'Accepted')->get()->count();
        $setting= Setting::first();
        $rezervationdata= Rezervation::all();
        return view('admin.rezervation.acceptedrezervation.index',[
            'newrezervationcount'=>$newrezervationcount,
            'setting'=>$setting,
            'rezervationdata' => $rezervationdata
        ]);
    }

    public function completedindex()
    {
        $newrezervationcount = DB::table('rezervations')->where('status', '=', 'Completed')->get()->count();
        $setting= Setting::first();
        $rezervationdata= Rezervation::all();
        return view('admin.rezervation.completedrezervation.index',[
            'newrezervationcount'=>$newrezervationcount,
            'setting'=>$setting,
            'rezervationdata' => $rezervationdata
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
    public function show($id, $uid, $pid)
    {
        //$uid calls user_id and takes user information.
        //$pid calls product_id and takes product(vehicle) information.
        $setting= Setting::first();
        $data= Rezervation::find($id);
        $vehicleinfo =Product::find($pid);
        $userinfo =User::find($uid);
        $data->save();
        return view('admin.rezervation.newrezervation.show',[
            'setting'=>$setting,
            'data' => $data,
            'vehicleinfo'=>$vehicleinfo,
            'userinfo'=>$userinfo
        ]);
    }

    public function acceptedshow($id, $uid, $pid)
    {
        //$uid calls user_id and takes user information.
        //$pid calls product_id and takes product(vehicle) information.
        $setting= Setting::first();
        $data= Rezervation::find($id);
        $vehicleinfo =Product::find($pid);
        $userinfo =User::find($uid);
        $data->save();
        return view('admin.rezervation.acceptedrezervation.show',[
            'setting'=>$setting,
            'data' => $data,
            'vehicleinfo'=>$vehicleinfo,
            'userinfo'=>$userinfo
        ]);
    }

    public function completedshow($id, $uid, $pid)
    {
        //$uid calls user_id and takes user information.
        //$pid calls product_id and takes product(vehicle) information.
        $setting= Setting::first();
        $data= Rezervation::find($id);
        $vehicleinfo =Product::find($pid);
        $userinfo =User::find($uid);
        $data->save();
        return view('admin.rezervation.completedrezervation.show',[
            'setting'=>$setting,
            'data' => $data,
            'vehicleinfo'=>$vehicleinfo,
            'userinfo'=>$userinfo
        ]);
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
        $data= Rezervation::find($id);
        $data->note = $request->note;
        $data->status = $request->status;
        $data->save();
        return redirect(route('admin.rezervation.newrezervation.index',['id'=>$id]));
    }

    public function acceptedupdate(Request $request, $id)
    {
        $data= Rezervation::find($id);
        $data->note = $request->note;
        $data->status = $request->status;
        $data->save();
        return redirect(route('admin.rezervation.acceptedrezervation.index',['id'=>$id]));
    }

    public function completedupdate(Request $request, $id)
    {
        $data= Rezervation::find($id);
        $data->note = $request->note;
        $data->status = $request->status;
        $data->save();
        return redirect(route('admin.rezervation.completedrezervation.index',['id'=>$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Rezervation::find($id);
        $data->delete();
        return redirect(route('admin.rezervation.newrezervation.index'));
    }

    public function accepteddestroy($id)
    {
        $data= Rezervation::find($id);
        $data->delete();
        return redirect(route('admin.rezervation.acceptedrezervation.index'));
    }

    public function completeddestroy($id)
    {
        $data= Rezervation::find($id);
        $data->delete();
        return redirect(route('admin.rezervation.completedrezervation.index'));
    }
}
