@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <button type="button" class="close">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-info">
        <button type="button" class="close">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info">
        <button type="button" class="close">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close">x</button>
        <strong>Check the entered information.</strong>
    </div>
@endif

@if ($message = Session::get('email'))
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Check.</a>.
    </div>
@endif



