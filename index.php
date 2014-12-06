<!doctype html>
<?php
session_start();
?>
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
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script><!--JQuery Online link -->
       	<script type="text/javascript" src="JS/bootstrap.js"></script><!--Bootstrap Javascript-->
		<script type="text/javascript" src="JS/MetroJs.js"></script>
		<script type="text/javascript" src="JS/check_ajax.js"></script>   
        <script type="text/javascript" src="JS/signup.js"></script>
	</head>
    
<?php 
	include 'INCLUDES/database.php';
	include 'INCLUDES/Variables.php';
	include 'INCLUDES/file-uploader.php';
	require 'Libraries/PHPMailer/PHPMailerAutoload.php';

?>


<?php

		/*
        	if(isset($_REQUEST['signupbtn'])) {
		$signup_error = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($unames)) {
				$signup_error.="Username is required.";	
			}
			else {
				if (!preg_match('/^[a-zA-Z0-9]+$/', $unames)) {
					$signup_error.="Invalid Username. Remove invalid characters";
				}
			}			
			if (empty($emails)) {
				$signup_error.="Email address is required.";
			}
			else {
				$emails = trim($emails);   
				if(!checkEmail($emails)) {  
					$signup_error.="Invalid email address!";
				}
			}
			if (strcmp($pswds,$pswds_c)=='0') {
			}
			else {
				$signup_error.="Both the password fields do not match ";
			}
		}
		if (strcmp($signup_error,"")!='0') {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('$signup_error');";
			echo "</script>";
		}else {
		    $pswds = md5($pswds);
			mysql_query("INSERT INTO users(username, email, password) VALUES ('$unames','$emails','$pswds');") or die(mysql_error());
            
            /*$mail = new PHPMailer;	
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'jordan.billy93@gmail.com';            // SMTP username
            $mail->Password = 'ch3ckmat3';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
            $mail->From = 'jordan.billy93@gmail.com';
            $mail->FromName = 'EMS Mailer';
            $mail->addAddress($emails,$unames);     // Add a recipient
            $mail->WordWrap = 55;                                 // Set word wrap to 50 characters
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Successful User creation';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
			echo "<script>window.location = 'INCLUDES/profile.php';</script>";			
		}
	}*/
	if(isset($_POST['loginbtn']))  {
	$flag=0;
	$pswdl = md5($pswdl);
	$ldetail = mysql_query("SELECT * from users WHERE username = '$unamel' and password = '$pswdl';") or die(mysql_error());
	while($rows = mysql_fetch_array($ldetail)){
		echo "<script> alert(".$rows['username'].");</script>";
		$_SESSION['username'] = $rows['username'];
		$_SESSION['userid'] = $rows['U_id'];
		$_SESSION['userright'] = $rows['rights'];
		$flagprof = $rows['flag'];
		$flag=1;
	}
	if($flag==1){
		if($flagprof == 1){
			if($_SESSION['userright'] == 0)
			echo "<script>window.location = 'INCLUDES/Home.php';</script>";
			else
			echo "<script>window.location = 'INCLUDES/admin.php';</script>";
		}
		else
			echo "<script>window.location = 'INCLUDES/profile.php';</script>";
	}
	else {
        echo "<script language='javascript' type='text/javascript'>"."alert('Invalid Username or Password. Kindly Enter again');"."</script>";
		echo "<script>window.location = '../';</script>";
    }
	}
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
                    <div id="login" class="animate form">
                        <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on"> 
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
                                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" style="position:relative;left:50px;top:10px"/> 
                                <label for="loginkeeping" style="position:relative;top:-20px;">Keep me logged in</label>
                            </p>
                            <p class="login button"> 
                                <input type="submit" name="loginbtn" value="LOGIN" href="#tologin"/> 
                            </p>
                            <p class="change_link">
                                Not a member yet ?
                                <a href="#toregister" class="to_register">Join us</a>
                            </p>
                        </form>
                    </div>
                    <div id="register" class="animate form">
                        <form  method="POST" autocomplete="on" onSubmit="JavaScript:signup()"> 
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
                                <input type="submit" name="signupbtn" value="SIGNUP"/> 
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
        <script type="text/javascript">
            // apply regular slide universally unless .exclude class is applied 
            // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
            $(".live-tile, .flip-list").not(".exclude").liveTile();
        </script>
    <!--============================== Footer ==============================-->
        <section>
            <div class="footer">
            	<div id="legal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                    In at purus at nisl pretium interdum. Aenean condimentum elementum nulla, non hendrerit diam scelerisque ac.<br><br>
                    © Copyright 2014 - 2020  IIIT - Delhi
                </div>
            </div>
        </section>
	</body>
</html>