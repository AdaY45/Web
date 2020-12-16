@extends('layouts.add')

@section('title','oneProduct | lovely')

@section('content')
            <main>
                <div class="container-blog">
                    <h1>{{$blog->title}}</h1>
                    <img src="/images/{{$blog->img}}.jpg">
                    <p>{{$blog->content}}</p>
                </div>
@endsection