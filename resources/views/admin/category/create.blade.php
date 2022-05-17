@extends('layouts.adminbase')

@section('title', 'Add Category')
@section('icon', Storage::url($setting->icon))

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Category</h1>

                    <!-- /. Form Starts -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4>Add Category</h4>
                            </div>
                            <div class="panel-body">

{{--                                maybe store ???  try later   --}}

                                <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Parent Category</label>
                                        <select class="form-control select2" name="parent_id">
                                            <option value="0" selected="selected">Main Category</option>
                                            @foreach($data as $rs)
                                                <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\AdminProductController::getParentsTree($rs, $rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title">
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
