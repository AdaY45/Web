@extends('layouts.main')

@section('title','Gallery')

@section('content')
		<div class="portfolio1">
			@foreach($images as $image)
				<a href="#">
					<div class="card">
							<div class="card_image"><img src="lera _art_gallery/{{$image->img}}" class="hover-shadow"></div>
							<div class="card_title">{{$image->title}}</div>
							<div class="card_content">{{$image->content}}</div>
					</div>
				</a>
			@endforeach
		</div>
@endsection