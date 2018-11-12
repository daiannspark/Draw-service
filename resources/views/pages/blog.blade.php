@extends('layout')

@section('content')

    @foreach($blogs as $blog )
    <div class="blogItem">
        Date: {{ $blog->created_at}}<br />
        Title: {{ $blog->title }}<br />
        Content: {{ $blog->text }}<br />
    </div>

    <br />
        
    @endforeach 
@stop