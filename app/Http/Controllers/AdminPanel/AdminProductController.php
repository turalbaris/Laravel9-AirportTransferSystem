<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{

    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category, $title){
        if ($category->parent_id == 0){
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > ' . $title;
        return AdminProductController::getParentsTree($parent, $title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //We accessed the controller
        //Controller accessed the model and get data from the model
        //And we send these data to index area
        //we defined the foreach loop that lists all the data in the table.
        $setting= Setting::first();
        $data= Product::all();
        return view('admin.product.index',[
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
        //
        $setting= Setting::first();
        $data= Category::all();
        return view('admin.product.create',[
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
        $data = new Product();
        $data->category_id = $request->category_id;
        $data->user_id = 0;  // $request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->base_price = $request->base_price;
        $data->km_price = $request->km_price;
        $data->capacity = $request->capacity;
        $data->tax = $request->tax;
        $data->status = $request->status;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        //
        $setting= Setting::first();
        $data= Product::find($id);
        return view('admin.product.show',[
            'setting'=>$setting,
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        //Retrieve a model by its primary key......
        $setting= Setting::first();
        $data= Product::find($id);
        $datalist= Category::all();
        return view('admin.product.edit',[
            'setting'=>$setting,
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        //
        $data= Product::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0;  // $request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->base_price = $request->base_price;
        $data->km_price = $request->km_price;
        $data->capacity = $request->capacity;
        $data->tax = $request->tax;
        $data->status = $request->status;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        //
        $data= Product::find($id);

        if($data->image){
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('admin/product');
    }
}












