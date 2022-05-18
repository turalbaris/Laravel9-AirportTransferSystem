@if ($message = Session::get('success'))
    <div class="alert alert-success">
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

