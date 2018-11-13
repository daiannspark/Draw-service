@extends('layout')

@section('content')

<a href="/admin">Admin</a><br /><br />

    @foreach($images as $image )
    
    {{ $image->fullname }}<br />
    {{ $image->email }}<br />
    {{ $image->phone }}<br />
    <img class="imagesItem" src="<?=str_replace('public', '/storage', $image->image)?>"><br />
    {{ $image->comments }}<br />
    {{-- @php
        str_replace("world","Peter","Hello world!")
    @endphp --}}
    <br />
    
    @endforeach 
@stop