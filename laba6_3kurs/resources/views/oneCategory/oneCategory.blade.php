@extends('layouts.add')

@section('title','{{$category->title}} | lovely')

@section('content')
            <main>
                <div class="category_container">
                    <h1>{{$category->title}}</h1>
                    <img src="/images/{{$category->img}}.jpg">
                    <p>{{$category->content}}</p>
                    <!-- <p>{!! $category->content !!}</p> -->
                    @foreach($fields as $field) 
                        <p>{{$field->value}}</p>
                    @endforeach
                </div>
@endsection