@extends('layout')

@section('content')

<a href="/admin">Admin</a><br /><br />

    @foreach($images as $image )
    
    {{ $image->fullname }}<br />
    {{ $image->email }}<br />
    {{ $image->phone }}<br />
    {{ $image->comments }}<br />

    <br />
        
    @endforeach 
@stop