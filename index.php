<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>EMS-Welcome Page</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

		<meta name="author" content="Naresh and Manmeet"/>
		<meta name="description" content="A new Job Portal and Employee Management System for IIIT-Delhi"/>
        
        <meta name="description" content="Parallax Content Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
        <meta name="author" content="Codrops" />

		<!--Favicons-->
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="">
		<link rel="apple-touch-icon" sizes="72x72" href="">
		<link rel="apple-touch-icon" sizes="114x114" href="">

        
        

		<!--Fonts-->
   		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Revalia' rel='stylesheet' type='text/css'>
		
        <!--Javascript Links-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script><!--JQuery Online link -->
        <script type="text/javascript" src="JS/jquery.cslider.js"></script><!--Javascript Slider-->
       	<script type="text/javascript" src="JS/bootstrap.js"></script><!--Bootstrap Javascript-->
		<script type="text/javascript">$(function() {$('#da-slider').cslider({autoplay	: true,bgincrement	: 450});});</script>

        <script type="text/javascript" src="JS/modernizr.custom.28468.js"></script>
        
       	<!-- CSS Links -->
		<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" media="screen" />
	    <link rel="stylesheet" type="text/css" href="CSS/index.css" />
        <link rel="stylesheet" href="CSS/main1.css"/>
        <link rel="stylesheet" href="CSS/animate-custom.css" />
        
        <!--<link rel="stylesheet" type="text/css" href="CSS/demo.css" />-->
        
		<link rel="stylesheet" type="text/css" href="CSS/main1.css" />
        
		
		<noscript>
			<link rel="stylesheet" type="text/css" href="CSS/nojs.css" />
		</noscript>
        
        
	</head>
    
	<body data-spy="scroll" data-target=".navbar navbar-fixed-top">
    <section id="Navigation">
	    <!--Navigation Bar-->
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="navbar-inner">
			<!--<li class="logo"><a><img src="Images/LogoVictor.png" /></a></li>-->
            	<div class="container">
            		<div class="navbar-header">
	            		<!-- Brand and toggle get grouped for better mobile display -->
                		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      						<span class="sr-only">Toggle navigation</span>
					   	 	<span class="icon-bar"></span>
					    	<span class="icon-bar"></span>
			      			<span class="icon-bar"></span>
		    			</button>
                		<ul class="nav navbar-nav">
                		<!-- Header & Brand/Company Name-->
                			<li class="active"><a class="navbar-brand" href="index.php"><font size="+3" > Employee Management System</font></a></li>
                		</ul>
            		</div>
            		<div class="navbar-collapse collapse">
          				<ul class="nav navbar-nav navbar-right">
                    		<li><a href="INCLUDES/Application.php"><font size="+1">APPLY NOW</font></a></li>
                    		<li><a href="#">About Us</font></a></li>
                  			<li><a href="Contact.html">Contact Us</a></li>
                   			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>  
    							<ul class="dropdown-menu">
						    		<li><a href="#">Web Design</a></li>
									<li><a href="#">Web development</a></li>
                            		<li class="divider"></li>
									<li><a href="#">Theme development</a></li>  
					    		</ul>
                    		</li>
               			</ul>
           			</div>
        		</div>     
			</div>
		</nav>
	</section>
    <section id="Javascript-Slider">
    	<div id="da-slider" class="da-slider">
        	<div class="da-slide">
				<h2> Job Portal & <br />Employee Management System</h2>
				<p> A portal where you can find different job opportunities in one of the best institutes in India , IIIT-Delhi.</p>
				<a href="#" class="da-link">More Info</a>
				<div class="da-img"><img src="1.jpg" style="height:200px; width:300px;" alt="images/1.png"/></div>
			</div>
			<div class="da-slide">
				<h2>Easy management</h2>
				<p>Too much paperwork, too messy ??? <br /><br />A easy-to-use interface to handle applications.</p>
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
	</section>
    <section id="login-signup">
		<div id="login-wrapper">
			<div id="" class="animate form">
            	<form  class="login-form" action="" autocomplete="on">
                	<div class="login-head">
						<h1>Login Form</h1>
						<span>Fill out the form below to login to EMS.</span>
					</div>
                    <table>
                    	<tr>
                        	<td><label class="label" data-icon="u" > Your email or username </label></td>
                            <td><input class="input" name="username" required type="text" placeholder="myusername or mymail@mail.com"/></td>
                         </tr>
                        <tr>
                        	<td><label class="label" data-icon="p"> Your password </label></td>
                            <td><input class="input" name="password" required type="password" placeholder="eg. X8df!90EO" /></td>
                        </tr>
                    </table>
                    <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
               </div>
            	
            	
            		<!--	
                 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. 
				
				<div id="login-cover">
					<div id="login-text">
						<h1> "Got some interest in working @ IIIT-Delhi? why don't you apply for a job :D"</h1>
					</div>
				</div>-->
		</div>	
                
				
				<!--<div id="login-space">
				<!-- the sign in box -->
				<!--<form name ="login-form" class="login-form" action="" method="post">
					<div id="login-box">
						<div class="login-head">
							<h1>Login Form</h1>
							<span>Fill out the form below to login to my super awesome imaginary EMS.</span>
						</div>
	
						<div class="login-content">
							<input name="username" type="text" class="input username" placeholder="Username" />
							<!-- <div class="user-icon"></div> -->
					<!--		<input name="password" type="password" class="input password" placeholder="Password" />
							<!-- <div class="pass-icon"></div> -->		
						<!--</div>

					<div class="login-footer">
						<input type="submit" name="submit" value="Login" class="button" />
						<input type="submit" name="submit" value="Register" class="register" />
					</div>
				</form>

				</div>
				<div class="gradient"></div>

					</div>
				
			</div>-->
			
			
<?php /* Sample page */ ?>			
			<div id="signup-wrapper">
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
				
				<div id="signup-cover">
					<div id="signup-text">
						<h1> "Got some interest in working @ IIIT-Delhi? why don't you apply for a job :D"</h1>
					</div>
				</div>
				
				<div id="signup-space">
				<!-- the sign in box -->
				<form name ="signup-form" class="signup-form" action="" method="post">
					<div id="signup-box">
						<div class="signup-head">
							<h1>Signup Form</h1>
							<span>Fill out the form below to en-roll yourself for a job !</span>
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
						<input type="button" name="submit" value="Apply for Job" class="button" onClick="location.href='./INCLUDES/application.php'"/>
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
					<div id = "copyright_line"> Copyright &copy; 2014 Employee Management System-IIITD</div>
				</div>
			</div>
		</div>
	</body>
</html>