<?php /* Sample page */ ?>

<html lang="en">
	<head>
		<title>THOTDOWN-Welcome Page</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="The Smarter Techies"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Revalia' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/main1.css"/>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Parallax Content Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<!-- Head section. Can contain the toolbar or the nav bar if needed or can be merged with the main content area-->
				<div id="main_logo">
					<img src="pics/logo.png"/>
				</div>
				<div id="HeaderContent_area">
					<ul id="menu">
						<li class="item"><span>Home</span></li>
						<li class="item"><span>About Us</span></li>
						<li class="item"><span>Events</span></li>
						<li class="item"><span>Contact Us</span></li>
					</ul>
				</div>
			</div>
			<div id="da-slider" class="da-slider">
						<div class="da-slide">
							<h2>THOT-DOWN</h2>
							<h1>whatever comes to your mind , just Jot Down</h1>
							<p>This is a blogging platform where you can work more interactively.</p>
							<a href="#" class="da-link">More Info</a>
							<div class="da-img"><img src="1.jpg" style="height:200px; width:300px;" alt="images/1.png"/></div>
						</div>
						<div class="da-slide">
							<h2>Easy management</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<a href="#" class="da-link">Read more</a>
							<div class="da-img"><img src="images/2.png" alt="image01" /></div>
						</div>
						<div class="da-slide">
							<h2>Revolution</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<a href="#" class="da-link">Read more</a>
							<div class="da-img"><img src="images/3.png" alt="image01" /></div>
						</div>
						<div class="da-slide">
							<h2>Quality Control</h2>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							<a href="#" class="da-link">Read more</a>
							<div class="da-img"><img src="images/4.png" alt="image01" /></div>
						</div>
						<nav class="da-arrows">
							<span class="da-arrows-prev"></span>
							<span class="da-arrows-next"></span>
						</nav>
					</div>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script type="text/javascript" src="js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
			
			});
			</script>
			
			<div id="login-wrapper">
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
				
				<div id="login-cover">
					<div id="login-text">
						<h1> "Got Some Idea, Why Don't You Note It Down."</h1>
					</div>
				</div>
				
				
				<div id="login-space">
				<!-- the sign in box -->
				<form name ="login-form" class="login-form" action="" method="post">
					<div id="login-box">
						<div class="login-head">
							<h1>Login Form</h1>
							<span>Fill out the form below to login to my super awesome imaginary control panel.</span>
						</div>
	
						<div class="login-content">
							<input name="username" type="text" class="input username" placeholder="Username" />
							<!-- <div class="user-icon"></div> -->
							<input name="password" type="password" class="input password" placeholder="Password" />
							<!-- <div class="pass-icon"></div> -->		
						</div>

					<div class="login-footer">
						<input type="submit" name="submit" value="Login" class="button" />
						<input type="submit" name="submit" value="Register" class="register" />
					</div>
				</form>

				</div>
				<div class="gradient"></div>

					</div>
				
			</div>
			
			
			
			<div id="signup-wrapper">
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
				
				<div id="signup-cover">
					<div id="signup-text">
						<h1> "Got Some Idea, Why Don't You Note It Down."</h1>
					</div>
				</div>
				
				<div id="signup-space">
				<!-- the sign in box -->
				<form name ="signup-form" class="signup-form" action="" method="post">
					<div id="signup-box">
						<div class="signup-head">
							<h1>Signup Form</h1>
							<span>Fill out the form below to get your own space to jot your thoughts down</span>
						</div>
	
						<div class="signup-content">
							<input name="firstname" type="text" class="input firstname" placeholder="FirstName" />
							<!-- <div class="user-icon"></div> -->
							<input name="lastname" type="text" class="input lastname" placeholder="LastName" />
							<input name="email id" type="email" class="input email" placeholder="Email ID" />
							<input name="username" type="text" class="input username" placeholder="UserName" />
							<input name="password" type="password" class="input password" placeholder="Password" />
							<input name="confirm-password" type="password" class="input password" placeholder="Confirm Password" />
							<!-- <div class="pass-icon"></div> -->
							

						</div>

					<div class="signup-footer">
						<input type="submit" name="submit" value="Create My Blog" class="button" />
					</div>
	
				</form>

				</div>
				<div class="gradient"></div>

					</div>
				
			</div>
			<div id="footer">
				<div class="container" >
					<div class="navigation">
						<a class="buttons" href="#">Help</a>
						<a class="buttons" href="#" >Terms</a>
						<a class="buttons" href="#" >About Us</a>
						<a class="buttons" href="#" >Licence</a>
						<a class="buttons" href="#" >Contact</a>
					</div>
					<div id = "copyright_line"> Copyright &copy; 2014 The Smarter Techies </div>
				</div>
			</div>
		</div>
	</body>
</html>