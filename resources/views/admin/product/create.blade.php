@extends('layouts.adminbase')

@section('title', 'Add Product')

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Product</h1>

                    <!-- /. Form Starts -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4>Add Product</h4>
                            </div>
                            <div class="panel-body">

{{--                                maybe store ???  try later   --}}

                                <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Parent Product</label>
                                        <select class="form-control select2" name="category_id">

                                            @foreach($data as $rs)
                                                <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title" required="required">
                                        <p class="help-block">Enter the title.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" type="text" name="keywords">
                                        <p class="help-block">Enter the keywords.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description">
                                        <p class="help-block">Enter the description.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Detail</label>
                                        <textarea  class="form-control" name="detail">

                                        </textarea>
                                        <p class="help-block">Enter the detail.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Base Price</label>
                                        <input class="form-control" type="number" name="base_price" value="5"min="5">
                                        <p class="help-block">Enter the base price.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>KM Price</label>
                                        <input class="form-control" type="number" name="km_price" value="1" min="1" step="0.01">
                                        <p class="help-block">Enter the km price.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Capacity</label>
                                        <input class="form-control" type="number" name="capacity" value="1" min="1">
                                        <p class="help-block">Enter the capacity. (Min = 1)</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Tax %</label>
                                        <input class="form-control" type="number" name="tax" value="1" min="1">
                                        <p class="help-block">Enter the tax percentage. (Exp.: Tax = 18)</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input class="form-control" type="file" name="image">
                                        <p class="help-block">Choose image file.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>Enable</option>
                                            <option>Disable</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /. Form finishes -->

                </div>
            </div>
            <!-- /. ROW  -->

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
