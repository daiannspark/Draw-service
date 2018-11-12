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

@isset($mailIsSent)
    <div id="emailIsSent">Thank you, I will get in touch with you soon!</div>
@endisset

<form method="post" action="/email" enctype="multipart/form-data">
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
            <label for="questionsid" class="col-sm-3 col-form-label">Questions</label>
            <div class="col-sm-8">
            <input name="questions" type="text" class="form-control" id="questionsid"
                   placeholder="Add text..">
            </div>
    </div> 
    <div class="form-group row">
        <div class="offset-sm-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Submit Email</button>
        </div>
    </div>
</form>

@stop