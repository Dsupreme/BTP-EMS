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
<script type="text/javascript">
$('body').scrollspy({ target: '.navbar navbar-fixed-top' })
</script>    
    <!-- SECTION 1 SLIDER -->
    <section id="MetroSlider1">
    	<div class="tiles blue tile-group nine-wide">
    		<div class="live-tile" data-speed="750" data-delay="5000">
        		<div><img class="full" src="IMAGES/iiitd/image1.png" alt="1" /></div>
    		</div>
    		<div class="blue live-tile" data-mode="flip" data-delay="5000">            
        		<div><img class="full" src="IMAGES/iiitd/image5.png" alt="3" /></div>
        		<div></div>
    		</div>
    		<div class="list-tile mango">
        		<ul class="flip-list fourTiles" data-mode="flip-list" data-delay="3000">
            		<li data-direction="horizontal">
                		<div><img class="full" src="IMAGES/iiitd/image9_1.png" alt="1" /></div>
               			<div><img class="full" src="IMAGES/iiitd/image9_1.png" alt="1" /></div>
            		</li>
            		<li>
                		<div><img class="full" src="IMAGES/iiitd/image9_2.png" alt="2" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image9_2.png" alt="2" /></div>
            		</li>
            		<li>
                		<div><img class="full" src="IMAGES/iiitd/image9_3.png" alt="3" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image9_3.png" alt="3" /></div>
            		</li>
            		<li data-direction="horizontal">
                		<div><img class="full" src="IMAGES/iiitd/image9_4.png" alt="4" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image9_4.png" alt="4" /></div>
            		</li>
        		</ul>
    		</div>
            <div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image13.png" alt="1" /></p>
    		</div>
            <div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image17.png" alt="1" /></p>
    		</div>
    		<div class="live-tile green" data-mode="carousel" data-direction="horizontal" data-delay="5000">
        		<div><img class="full" src="IMAGES/iiitd/image21.png" alt="1" /></div>
        		<div></div>
	        	<div><img class="full" src="IMAGES/iiitd/image21.png" alt="3" /></div>
        		<div></div>
    		</div>
       		<div class="live-tile" data-mode="carousel" data-direction="horizontal" data-delay="5000">
        		<div></div>
        		<div><img class="full" src="IMAGES/iiitd/image25.png" alt="1" /></div>
        		<div></div>
	        	<div><img class="full" src="IMAGES/iiitd/image25.png" alt="3" /></div>
    		</div>
    		<div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image29.png" alt="1" /></p>
    		</div>
            <div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image33.png" alt="1" /></p>
    		</div>
      	</div>
	</section>
	<!-- SECTION 2 SLIDER -->
 	<section id="MetroSlider1">
    	<div class="tiles blue tile-group nine-wide">
    		<div class="green live-tile" data-mode="flip" data-delay="6000">
            	<div><img class="full" /></div> 
        		<div><img class="full" src="IMAGES/iiitd/image2.png" alt="3" /></div>
    		</div>
            <div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image6.png" alt="3" /></p>
   			 </div>
            <div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image10.png" alt="3" /></p>
    		</div>
            <div class="live-tile" data-mode="carousel" data-direction="horizontal" data-delay="3500">
            	<div><img class="full" src="IMAGES/iiitd/image14.png" alt="1" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image14.png" alt="2" /></div>
	        	<div><img class="full" src="IMAGES/iiitd/image14.png" alt="3" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image14.png" alt="4" /></div>
    		</div>
            <div class="live-tile" data-speed="750" data-delay="4000">
        		<div><img class="full" src="IMAGES/iiitd/image18.png" alt="1" /></div>
        		<div></div>
    		</div>
    		<div class="red live-tile" data-mode="flip" data-delay="4000">            
        		<div><img class="full" src="IMAGES/iiitd/image22.png" alt="3" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image22.png" alt="4" /></div>
    		</div>
    		<div class="live-tile" data-mode="flip" data-delay="4000"> 
        		<div><img class="full" src="IMAGES/iiitd/image26.png" alt="3" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image26.png" alt="4" /></div>
    		</div>
            <div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image30.png" alt="1" /></p>
    		</div>
    		<div class="live-tile" data-speed="750" data-delay="4500">
        		<div><img class="full" src="IMAGES/iiitd/image34.png" alt="1" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image34.png" alt="2" /></div>
    		</div>

		</div>
	</section>
    <!-- SECTION 3 SLIDER -->
    <section id="MetroSlider1">
    	<div class="tiles blue tile-group nine-wide">
    		<div class="live-tile" data-speed="750" data-delay="4000">
        		<div><img class="full" src="IMAGES/iiitd/image3.png" alt="1" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image3.png" alt="2" /></div>
    		</div>
    		<div class="live-tile" data-mode="carousel" data-direction="horizontal" data-delay="3500">	
        		<div><img class="full" src="IMAGES/iiitd/image7.png" alt="1" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image7.png" alt="2" /></div>
	        	<div><img class="full" src="IMAGES/iiitd/image7.png" alt="3" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image7.png" alt="4" /></div>
    		</div>
    		<div class="red live-tile" data-mode="flip" data-delay="6000">          
        		<div><img class="full" src="IMAGES/iiitd/image11.png" alt="3" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image11.png" alt="4" /></div>
    		</div>
    		<div class="list-tile mango">
        		<ul class="flip-list fourTiles" data-mode="flip-list" data-delay="3000">
            		<li data-direction="horizontal">
                		<div><img class="full" src="IMAGES/iiitd/image15_1.png" alt="1" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image15_1.png" alt="1" /></div>
            		</li>
            		<li>
                		<div><img class="full" src="IMAGES/iiitd/image15_2.png" alt="2" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image15_2.png" alt="2" /></div>
            		</li>
            		<li data-direction="horizontal">
                		<div><img class="full" src="IMAGES/iiitd/image15_3.png" alt="3" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image15_3.png" alt="3" /></div>
            		</li>
            		<li>
                		<div><img class="full" src="IMAGES/iiitd/image15_4.png" alt="4" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image15_4.png" alt="4" /></div>
            		</li>
        		</ul>
   			</div>
    		<div class="live-tile accent green exclude">
		        <p><img class="full" src="IMAGES/iiitd/image19.png" alt="1" /></p>
    		</div>
    		<div class="list-tile mango">
        		<ul class="flip-list fourTiles" data-mode="flip-list" data-delay="2000">
           			<li>
                		<div><img class="full" src="IMAGES/iiitd/image23_1.png" alt="1" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image23_1.png" alt="1" /></div>
            		</li>
            		<li>
                		<div><img class="full" src="IMAGES/iiitd/image23_2.png" alt="2" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image23_2.png" alt="2" /></div>
            		</li>
            		<li>
                		<div><img class="full" src="IMAGES/iiitd/image23_3.png" alt="3" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image23_3.png" alt="3" /></div>
            		</li>
            		<li data-direction="horizontal">
                		<div><img class="full" src="IMAGES/iiitd/image23_4.png" alt="4" /></div>
                		<div><img class="full" src="IMAGES/iiitd/image23_4.png" alt="4" /></div>
            		</li>
        		</ul>
    		</div>
    		<div class="live-tile" data-speed="750" data-delay="7000">
        		<div><img class="full" src="IMAGES/iiitd/image27.png" alt="1" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image27.png" alt="2" /></div>
    		</div>
   			<div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image31.png" alt="1" /></p>
    		</div>
    		<div class="live-tile green" data-mode="carousel" data-direction="horizontal" data-delay="5500">
        		<div></div>
        		<div><img class="full" src="IMAGES/iiitd/image35.png" alt="1" /></div>
	        	<div></div>
        		<div><img class="full" src="IMAGES/iiitd/image35.png" alt="2" /></div>
    		</div>	
		</div>
	</section>
    <!-- SECTION 4 SLIDER--> 
 	<section id="MetroSlider1">
    	<div class="tiles blue tile-group nine-wide">
        	<div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image4.png" alt="1" /></p>
    		</div>
    		<div class="live-tile" data-speed="750" data-delay="4000">
        		<div><img class="full" src="IMAGES/iiitd/image8.png" alt="1" /></div>
        		<div></div>
    		</div>
            <div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image12.png" alt="1" /></p>
    		</div>
    		<div class="live-tile" data-speed="750" data-delay="4000">
        		<div></div>
        		<div><img class="full" src="IMAGES/iiitd/image16.png" alt="2" /></div>
    		</div>
    		<div class="live-tile" data-speed="750" data-delay="4000">
        		<div></div>
        		<div><img class="full" src="IMAGES/iiitd/image20.png" alt="2" /></div>
    		</div>
    		<div class="red live-tile" data-mode="flip" data-delay="4000"> 
        		<div><img class="full" src="IMAGES/iiitd/image24.png" alt="3" /></div>
        		<div><img class="full" src="IMAGES/iiitd/image24.png" alt="4" /></div>
    		</div>
            <div class="live-tile accent green exclude">
        		<p><img class="full" src="IMAGES/iiitd/image28.png" alt="3" /></p>
   			</div>    
    		<div class="green live-tile" data-mode="flip" data-delay="8000"> 
        		<div><img class="full" src="IMAGES/iiitd/image32.png" alt="1" /></div>
        		<div></div>
    		</div>
			<div class="live-tile accent green exclude">
		        <p><img class="full" src="IMAGES/iiitd/image36.png" alt="2" /></p>
   			</div>
       </div>
	</section>
   
    
<script type="text/javascript">
    // apply regular slide universally unless .exclude class is applied 
    // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
    $(".live-tile, .flip-list").not(".exclude").liveTile();
</script>
    
	<section>				
    	<div id="container_demo" >
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