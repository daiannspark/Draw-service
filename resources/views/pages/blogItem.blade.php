@extends('layout')

@section('content')
    <div class="blogItem">
        Date: {{ $blog->created_at}}<br />
        Title: {{ $blog->title }}<br />
        Content: {{ $blog->text }}<br />
    </div>
@stop