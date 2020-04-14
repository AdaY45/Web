
<html>
<head>
    <meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Leo Morgan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
        <div class="menu">
            <!--<div class="m">MENU</div>-->
            <div class="logo">Leo Morgan</div>
            <ul>
                <li><a class="menubtn" href="#">SHOP</a></li>
                <li><a class="menubtn" href="container.php">GALLERY</a></li>
                <li><a class="menubtn" href="info.php">ABOUT</a></li>
                <li><a class="menubtn" href="contact.php">CONTACT</a></li>
            </ul>
        </div>
        <div class="main1 contact">
            <form method="post" action="php/action_page.php">
                <div class="row">
                  <div class="col-25">
                    <label for="fname">First Name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="lname">Last Name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="country">Country</label>
                  </div>
                  <div class="col-75">
                    <select id="country" name="country">
                      <option value="australia">Australia</option>
                      <option value="canada">Canada</option>
                      <option value="usa">USA</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="subject">Subject</label>
                  </div>
                  <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                  </div>
                </div>
                <div class="row">
                  <input type="submit" value="Submit">
                </div>
              </form>
        </div>
        <div class="footer">
			<div class="sm">
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/youtube.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/telegram.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/twitter.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/pinterest.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/facebook.svg" class="socialmedia"></a>
				<a href="#"><img src="lera _art_gallery/icons/152803-social-media-elements/svg/instagram.svg" class="socialmedia"></a>
			</div>
			<a href="#"><img src="lera _art_gallery/arrow1.png" class="arrow"></a>
		</div>
    </div>

</body>
</html>