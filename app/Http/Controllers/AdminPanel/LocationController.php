<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Setting;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting= Setting::first();
        $data= Location::all();
        return view('admin.location.index',[
            'setting'=>$setting,
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting= Setting::first();
        $data= Location::all();
        return view('admin.location.create',[
            'setting'=>$setting,
            'data' => $data
        ]);
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
        $data = new Location();
        $data->type = $request->type;
        $data->name = $request->name;
        $data->lat = $request->lat;
        $data->long = $request->long;
        $data->status = $request->status;

        $data->save();
        return redirect('admin/location');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting= Setting::first();
        $data= Location::find($id);
        return view('admin.location.show',[
            'setting'=>$setting,
            'data' => $data
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
        $setting= Setting::first();
        $data= Location::find($id);
        return view('admin.location.edit',[
            'setting'=>$setting,
            'data' => $data
        ]);
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
        //dd($request);
        $data= Location::find($id);
        $data->type = $request->type;
        $data->name = $request->name;
        $data->lat = $request->lat;
        $data->long = $request->long;
        $data->status = $request->status;
        $data->save();
        return redirect('admin/location');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Location::find($id);
        $data->delete();
        return redirect('admin/location');
    }
}
