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
<!--        <script type="text/javascript" src="JS/jquery.cslider.js"></script><!--Javascript Slider-->
       	<script type="text/javascript" src="JS/bootstrap.js"></script><!--Bootstrap Javascript-->
		<script type="text/javascript" src="JS/MetroJs.js"></script>
       	
        <!-- CSS Links -->
		<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="CSS/MetroJs.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="CSS/index.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="CSS/animate-custom.css" media="screen" />
        
        


        
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
                			<li class="active"><a class="navbar-brand" href="index.php"><font size="+3"> Employee Management System</font></a></li>
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
    
    <section id="MetroSlider1">
    	<div class="tiles blue tile-group ten-wide">
    	<!-- Sliding Tile that shows 100% of the back tile every 3 seconds -->
    		<div class="live-tile" data-speed="750" data-delay="4000">
        		<span class="tile-title">slide tile</span>
        		<div><img class="full" src="Magnus.jpg" alt="1" /></div>
        		<div><img class="full" src="spirits.jpg" alt="2" /></div>
    		</div>
    		<!-- Red Flip Tile that flips every 4 seconds -->
    		<div class="red live-tile" data-mode="flip" data-delay="4000"> 
            	<span class="tile-title">flip tile front</span>           
        		<div><img class="full" src="/images/sample/3tw.gif" alt="3" /></div>
                <span class="tile-title">flip tile back</span>
        		<div><img class="full" src="/images/sample/4tw.gif" alt="4" /></div>
    		</div>
    		<!-- Carousel Tile that slides 4 tile faces every 2.5 seconds -->
    		<div class="live-tile" data-mode="carousel" data-direction="horizontal" data-delay="2500">
            	<span class="tile-title">carousel slide 1</span>
        		<div><img class="full" src="/images/sample/1tw.gif" alt="1" /></div>
        	<div>
            <img class="full" src="/images/sample/2t.gif" alt="2" />
            <span class="tile-title accent">carousel slide 2</span>
        </div>
        <div>
            <img class="full" src="/images/sample/3tw.gif" alt="3" />
            <span class="tile-title">carousel slide 3</span>
        </div>
        <div>
            <img class="full" src="/images/sample/4t.gif" alt="4" />
            <span class="tile-title accent">carousel slide 4</span>
        </div>
    </div>
    <!-- Mango Flip List that triggers every 3 seconds -->
    <div class="list-tile mango">
        <span class="tile-title">flip list</span>
        <ul class="flip-list fourTiles" data-mode="flip-list" data-delay="2000">
            <li>
                <div><img class="full" src="/images/sample/1t.gif" alt="1" /></div>
                <div><img class="full" src="/images/sample/1tw.gif" alt="1" /></div>
            </li>
            <li>
                <div><img class="full" src="/images/sample/2t.gif" alt="2" /></div>
                <div><img class="full" src="/images/sample/2tw.gif" alt="2" /></div>
            </li>
            <li>
                <div><img class="full" src="/images/sample/3t.gif" alt="3" /></div>
                <div><img class="full" src="/images/sample/3tw.gif" alt="3" /></div>
            </li>
            <li data-direction="horizontal">
                <div><img class="full" src="/images/sample/4t.gif" alt="4" /></div>
                <div><img class="full" src="/images/sample/4tw.gif" alt="4" /></div>
            </li>
        </ul>
    </div>
    <!-- Green Static Tile -->
    <div class="live-tile accent green exclude">
        <span class="tile-title">static tile</span>
        <p>Static tiles can take advantage of theming too!</p>
    </div>
</div>


<div class="tiles">
	<div class="live-tile">
    	<div style="background-color:Red;">test 1</div>
		<div style="background-color:Orange;">test back</div>

    </div>
</div>
<!-- Activate live tiles -->
<script type="text/javascript">
    // apply regular slide universally unless .exclude class is applied 
    // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
    $(".live-tile, .flip-list").not(".exclude").liveTile();
</script>
    </section>
    
	<section>				
    	<div id="container_demo" >
        <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
        	<div id="login" class="animate form">
                            <form  action="" autocomplete="on"> 
                                <h1>LOGIN</h1> 
                                <p> 
                                    <label for="username" class="uname" > Email or Username </label>
                                    <input id="username" name="username" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Enter password </label>
                                    <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
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

                        <div id="register" class="animate form">
                            <form  action="" autocomplete="on"> 
                                <h1>SIGNUP</h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail"> Your email</label>
                                    <input id="emailsignup" name="emailsignup" required type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
	</body>
</html>