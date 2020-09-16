@extends('layouts.main')

@section('title','Home ')

@section('content')
		<div class="main">
			<img src="lera _art_gallery/image_22.jpeg" class="mainphoto">
			<div class="maintext">
				<h1>ART</h1>
				<h2>speaks where words are unable to explain</h2>
			</div>
		</div>
		<div class="portfolio">
			<img src="lera _art_gallery/image_18.jpg" class="drawing">
			<img src="lera _art_gallery/image_8.jpg" class="drawing">
			<img src="lera _art_gallery/image_1.jpg" class="drawing">
			<img src="lera _art_gallery/image_20.jpg" class="drawing">
			<img src="lera _art_gallery/image_2.jpg" class="drawing" id="last">
		</div>
		<div class="more">
			<img src="lera _art_gallery/image_9.jpeg" class="moredrawing">
			<div class="moresection">
				<div class="morep">More paintings</div>
				<a class="watch" href="#"><span>Watch now</span></a>
			</div>
		</div>
@endsection