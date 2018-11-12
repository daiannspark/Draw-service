@extends('layout')

@section('content')
    @foreach($images as $image )
    
    {{ $image->fullname }}<br />
    {{ $image->email }}<br />
    {{ $image->phone }}<br />
    {{ $image->image }}<br />
    {{ $image->comments }}<br />

    <br />
        
    @endforeach 
@stop