<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="menu">
			<div class="logo">Leo Morgan</div>
			<ul>
				<li><a class="menubtn" href="#">SHOP</a></li>
				<li><a class="menubtn" href="#">GALLERY</a></li>
				<li><a class="menubtn" href="#">ABOUT</a></li>
				<li><a class="menubtn" href="#">CONTACT</a></li>
			</ul>
		</div>

        @yield('content')

		<footer class="footer">
			<div class="sm">
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/youtube.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/telegram.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/twitter.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/pinterest.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/facebook.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/instagram.svg" class="socialmedia"></a>
			</div>
			<a href="#"><img src="lera _art_gallery/arrow1.png" class="arrow"></a>
		</footer>
	</div>

</body>
</html>