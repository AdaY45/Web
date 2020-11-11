@extends('layouts.add')

@section('title','{{$category->title}} | lovely')

@section('content')
            <main>
                <div class="category_container">
                    <h1>{{$category->title}}</h1>
                    <img src="/images/{{$category->id}}.jpg">
                    <p>{{$category->content}}</p>
                </div>
@endsection