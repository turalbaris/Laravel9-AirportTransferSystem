@extends('layouts.adminbase')

@section('title', 'Edit Product: '.$data->title)

@section('head')
    <!-- include libraries(jQuery, bootstrap) //// Summernote -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js //// Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Product: {{$data->title}}</h1>

                    <!-- /. Form Starts -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4>Product Elements</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Parent Category</label>
                                        <select class="form-control select2" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif >
                                                    {{\App\Http\Controllers\AdminPanel\AdminProductController::getParentsTree($rs, $rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title" value="{{$data->title}}">
                                        <p class="help-block">Enter the title.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
                                        <p class="help-block">Enter the keywords.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description" value="{{$data->description}} ">
                                        <p class="help-block">Enter the description.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Detail</label>
                                        <textarea  class="form-control" id="detail" name="detail">
                                            {{$data->detail}}
                                        </textarea>
                                        <script>
                                            $('#detail').summernote({
                                                placeholder: 'Hello stand alone ui',
                                                tabsize: 2,
                                                height: 120,
                                                toolbar: [
                                                    ['style', ['style']],
                                                    ['font', ['bold', 'underline', 'clear']],
                                                    ['color', ['color']],
                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                    ['table', ['table']],
                                                    ['insert', ['link', 'picture', 'video']],
                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                ]
                                            });
                                        </script>
                                        <p class="help-block">Enter the detail.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Base Price</label>
                                        <input class="form-control" type="number" name="base_price" value="{{$data->base_price}}" min="5">
                                        <p class="help-block">Enter the base price.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>KM Price</label>
                                        <input class="form-control" type="number" name="km_price" value="{{$data->km_price}}" min="1" step="0.01">
                                        <p class="help-block">Enter the km price.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Capacity</label>
                                        <input class="form-control" type="number" name="capacity" value="{{$data->capacity}}" min="1">
                                        <p class="help-block">Enter the capacity. (Min = 1)</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Tax %</label>
                                        <input class="form-control" type="number" name="tax" value="{{$data->tax}}" min="1">
                                        <p class="help-block">Enter the tax percentage. (Exp.: Tax = 18)</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input class="form-control" type="file" name="image" >
                                        <img src="/storage/{{$data->image}}" width="80px">
                                        <p class="help-block">Choose image file.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>Enable</option>
                                            <option>Disable</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info">Update Data</button>
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
