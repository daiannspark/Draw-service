@extends('layout')

@section('content')

    @foreach($blogs as $blog )
    <div class="blogItem2">
        

        <a href="/blog/{{$blog->id}}">Date: {{ $blog->created_at}} - {{$blog->title}}</a><br />
    </div>

    <br />
        
    @endforeach 
@stop