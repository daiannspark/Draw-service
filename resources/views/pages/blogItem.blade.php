@extends('layout')

@section('content')
    <div>
        Date: {{ $blog->created_at}}<br />
        Title: {{ $blog->title }}<br />
        Content: {{ $blog->text }}<br />
    </div>
@stop