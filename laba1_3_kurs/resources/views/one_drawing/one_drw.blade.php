@extends('layouts.main')

@section('title','One drawing')

@section('content')
    <main>
        <div class="oneDrw_container">
            <div class="img"><img src="lera _art_gallery/{{$images->img}}"></div>
            <div class="img_text">
                <div class="title">{{$images->title}}</div>
                <div class="content">{{$images->content}}</div>
            </div>
        </div>
    </main>
@endsection