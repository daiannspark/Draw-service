@extends('layout')

@section('content')

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

<form method="post" action="/create" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="fullnameid" class="col-sm-3 col-form-label">Full name</label>
        <div class="col-sm-8">
            <input name="fullname" type="text" class="form-control" id="fullnameid" placeholder="Add text..">
        </div>
    </div>
    <div class="form-group row">
        <label for="emailid" class="col-sm-3 col-form-label">E-mail adress</label>
        <div class="col-sm-8">
            <input name="email" type="text" class="form-control" id="emailid"
                   placeholder="Add text..">
        </div>
    </div>
    <div class="form-group row">
        <label for="phoneid" class="col-sm-3 col-form-label">Phone number (with country code)</label>
        <div class="col-sm-8">
            <input name="phone" type="text" class="form-control" id="phoneid"
                   placeholder="Add text..">
        </div>
    </div>
    <div class="form-group row">
        <label for="imageid" class="col-sm-3 col-form-label">Image</label>
        <div class="col-sm-8">
                <label for="exampleFormControlFile1">Choose image</label>
    <input name='image' type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <div class="form-group row">
            <label for="commentsid" class="col-sm-3 col-form-label">Comments</label>
            <div class="col-sm-8">
            <input name="comments" type="text" class="form-control" id="commentsid"
                   placeholder="Add text..">
            </div>
    </div> 
    <div class="form-group row">
        <div class="offset-sm-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Submit Order</button>
        </div>
    </div>
</form>

@stop