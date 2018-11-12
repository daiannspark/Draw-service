@extends('layout')

@section('content')

<a href="/admin">Admin</a><br /><br />

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul class="errorList">
        @foreach ($errors as $messages)
            @foreach ($messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="/admin/blog" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group row">
    <label for="titleid" class="col-sm-3 col-form-label">Title</label>
    <div class="col-sm-8">
        <input name="title" type="text" class="form-control" id="titleid"
               placeholder="Add text..">
    </div>
</div>
<div class="form-group row">
        <label for="textid" class="col-sm-3 col-form-label">Text</label>
        <div class="col-sm-8">
        <input name="text" type="text" class="form-control" id="textid"
               placeholder="Add text..">
        </div>
</div> 
<div class="form-group row">
    <div class="offset-sm-3 col-sm-9">
        <button type="submit" class="btn btn-primary">Submit Record</button>
    </div>
</div>
</form>
@stop