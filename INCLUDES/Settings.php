<!DOCTYPE html>
<?php
	session_start();
	if($_SESSION['username']){
	}
	//else {
//		echo "href=\"../#tologin\"";
//	}
	else {
		echo (
			"<SCRIPT LANGUAGE='JavaScript'>
    			window.location.href='/Github/BTP-EMS/#login';
    		   	window.alert('Not logged in.Please login to EMS to continue.')
    			</SCRIPT>"
		);
	}	
?>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>EMS: Settings</title>
    
        <!-- CSS Links -->
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/animate-custom.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/animate-custom.css" media="screen" /> 

        <!--Javascript Links-->
        <script type="text/javascript" src="../JS/jquery-1.11.0.min.js"></script><!--JQuery Online link -->
        <script type="text/javascript" src="../js/bootstrap.js"></script><!--Bootstrap Javascript -->
        <script type="text/javascript" src="../js/smoothscroll.js"></script><!--Smooth Scroll Animation -->
        <script type="text/javascript" src="../js/Settings.js"></script><!--Settings tab toggle Javascript -->
        
        <link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="">
		<link rel="apple-touch-icon" sizes="72x72" href="">
		<link rel="apple-touch-icon" sizes="114x114" href="">
		
        <!--Fonts-->
   		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        
    </head>
    <body  style="background-color:#808080">
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
                            <li class="active"><a class="navbar-brand" href="../INCLUDES"><font size="+3"> Employee Management System</font></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav navbar-right">							
                            <li><a href="Application.php"><font size="+1">APPLY NOW</font></a></li>
                            <li><a href="../INCLUDES">Home</a></li>        		
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shortcuts<b class="caret"></b></a>  
                                <ul class="dropdown-menu">
                                    <li><a href="aboutus.php">About Us</a></li>
                                    <li class="divider"></li>
                                    <li><a href="Contactus.php">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Welcome, ".$_SESSION['username'] . "<b class='caret'></b>"?></a>
                                <ul class="dropdown-menu">
                                    <li><a href="">Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                </div>     
            </div>
        </nav>
        
        <div class="container" id="tabs">
        	<div class="btn-group btn-group-justified" id="setting_tabs">
				<div class="btn-group">
                    <button type="button" class="btn btn-tabs" id="#tab1">Profile</button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-tabs" id="#tab2">Email Notifications</button>
                </div>
            </div>
            <div id="setting_tabs_contents">
            	<div id="tab1" class="tab active">
                hello	
                </div>
                <div id="tab2" class="tab">
                1...2...3
                </div>
            	
            </div>
        </div>
</body>
</html>