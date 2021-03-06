<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


	<title>Contact Us</title>
	<!-- CSS Links -->
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />

    <!--Javascript Links-->
    <script type="text/javascript" src="../JS/jquery-1.11.0.min.js"></script><!--JQuery Online link -->
    <script type="text/javascript" src="../js/bootstrap.js"></script><!--Bootstrap Javascript -->
    <script type="text/javascript" src="../js/smoothscroll.js"></script><!--Smooth Scroll Animation -->
</head>
<?php
	session_start();
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
			session_destroy();
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Session Timed Out');";
			echo "</script>";
	}
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
	?>

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
                			<li class="active"><a class="navbar-brand" href="Home.php"><font size="+3"> Employee Management System</font></a></li>
                		</ul>
            		</div>
            		<div class="navbar-collapse collapse">
          				<ul class="nav navbar-nav navbar-right">
                    		<li><a href="aboutus.php">About Us</a></li>
                    		<li><a href="Home.php">Home</a></li>
                   			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
    							<ul class="dropdown-menu">
						    		<li><a href="#">Web Design</a></li>
									<li><a href="#">Web development</a></li>
                            		<li class="divider"></li>
									<li><a href="#">Theme development</a></li>
					    		</ul>
                    		</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
    							<ul class="dropdown-menu">
						    		<li><a href="profile.php">Profile</a></li>
									<li><a href="#">Web development</a></li>
                            		<li class="divider"></li>
									<li><a href="#">Theme development</a></li>
					    		</ul>
                    		</li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Welcome, ".$_SESSION['username'] . "<b class='caret'></b>"?></a>
                            	<ul class="dropdown-menu">
                                	<li><a href="">Settings</a></li>
                                	<li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
               			</ul>
           			</div>
        		</div>
			</div>
		</nav>

	<!--Google Maps-->
    <div style="position:relative;top:50px" id="contact">
    	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
			function initialize()
			{
				var latval = '28.54596';
				var longval = '77.272666';
				var myLatlng = new google.maps.LatLng(28.54597,77.272666);
				var centerlatling = new google.maps.LatLng(28.54596,77.2837047);
				var mapProp = {center: centerlatling,
							   zoom:15,
							   minZoom:13,
							   scrollwheel:false,
							   maxZoom:17,
							   mapTypeId:google.maps.MapTypeId.ROADMAP};
				var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
				var marker = new google.maps.Marker({ position: myLatlng,
													  map: map,
													  animation: google.maps.Animation.DROP,
													  title: 'Indraprastha Institute of Information Technology, Delhi'});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
        <div id="googleMap" style="width:1364px;height:593px;"></div>
        <div class="panel" style="position:absolute;left:850px;width:464px;top:80px;">
        	<div class="panel-heading">Contact Us</div>
            <div class="panel-body">

			</div>
        </div>

	</div>
