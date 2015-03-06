<!doctype html>
<html>
	<head>
		<title>EMS-Welcome Page</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="author" content="Naresh and Manmeet"/>
		<meta name="description" content="A new Job Portal and Employee Management System for IIIT-Delhi"/>

        <meta name="description" content="Metro Js Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slider, animations, , delayed, easing, jquery, css3, kendo UI" />

		<!--Favicons-->
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="">
		<link rel="apple-touch-icon" sizes="72x72" href="">
		<link rel="apple-touch-icon" sizes="114x114" href="">
		<!--Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


        <!-- CSS Links -->
		<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="CSS/MetroJs.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="CSS/index.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="CSS/animate-custom.css" media="screen" />

        <!--Javascript Links-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script><!--JQuery Online link -->
       	<script type="text/javascript" src="JS/bootstrap.js"></script><!--Bootstrap Javascript-->
		<script type="text/javascript" src="JS/MetroJs.js"></script>
		<script type="text/javascript" src="JS/check_ajax.js"></script>
        <script type="text/javascript" src="JS/login_signup.js"></script>
	</head>

    <?php
	   include 'INCLUDES/database.php';
	   include 'INCLUDES/Variables.php';
    ?>

	<body data-spy="scroll" data-target=".navbar navbar-fixed-top">
    <!--============================== Navigation Bar ==============================-->
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

                                <li><a href="INCLUDES/about.php">About</a></li>
                                <li><a href="INCLUDES/Contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <script type="text/javascript">
        $('body').scrollspy({ target: '.navbar navbar-fixed-top' })
        </script>
    <!--============================== Login - Signup ==============================-->
		<section>
            <div id="container_demo" >
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper">
                    
                    <!--Login Form-->
                    <div id="login" class="animate form">
                        <form  method="POST" autocomplete="on">
                            <h1>LOGIN</h1>
                            <p>
                                <label for="username" class="uname" > Email or Username </label>
                                <input id="username" name="username" type="text" placeholder="Employee Code or Username (case-sensitive)"/>
                            </p>
                            <p>
                                <label for="password" class="youpasswd"> Enter password </label>
                                <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <p class="keeplogin" style="display:none">
                                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" style="position:relative;left:50px;top:10px"/>
                                <label for="loginkeeping" style="position:relative;top:-20px;">Keep me logged in</label>
                            </p>
                            <p class="login button">
                                <input type="submit" name="loginbtn" value="LOGIN" onclick="login()"/>
                            </p>
                            <p class="change_link">
                                Not working at IIITD, want to apply?
                                <a href="#toregister" class="to_register">Join us/SignUp</a>
                            </p>
                        </form>
                    </div>
                    
                    <!--Signup Form-->
                    <div id="register" class="animate form">
                        <form  method="POST" autocomplete="on">
                            <h1>SIGNUP</h1>
                            <p>
                                <label for="usernamesignup" class="uname">Your username</label>
                                <input id="usernamesignup" name="usernamesignup" type="text" placeholder="mysuperusername690" /><span id="status"></span>
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
                                <input id="passwordsignup_confirm" class="youpasswd" name="passwordsignup_confirm" required type="password" placeholder="eg. X8df!90EO"/>
                            </p>
                            <p class="signin button">
                                <input type="submit" name="signupbtn" value="SIGNUP" onclick="signup()"/>
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
    <!--============================== Metro Js Image slider ==============================-->
        <!-- SECTION 1 SLIDER -->
            <section id="MetroSlider1">
                <div class="tiles tile-group nine-wide">
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
        <!-- SECTION 4 SLIDER -->
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
        <!-- Slider Javascript -->
            <script type="text/javascript">
            // apply regular slide universally unless .exclude class is applied
            // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
            $(".live-tile, .flip-list").not(".exclude").liveTile();
        </script>
    <!--============================== Footer ==============================-->
        <section>
            <div class="footer">
            	<div id="legal">
                    EMS, an online portal to facilitate all the administrative tasks<br>
                    © Copyright 2014 IIIT - Delhi
                </div>
            </div>
        </section>
	</body>
</html>
