<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


	<title>Contact Us</title>
	<!-- CSS Links -->
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
    
    <!--Javascript Links-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script><!--JQuery Online link -->
    <script type="text/javascript" src="../js/bootstrap.js"></script><!--Bootstrap Javascript -->
    <script type="text/javascript" src="../js/smoothscroll.js"></script><!--Smooth Scroll Animation -->
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
                			<li class="active"><a class="navbar-brand" href="../index.php"><font size="+3"> Employee Management System</font></a></li>
                		</ul>
            		</div>
            		<div class="navbar-collapse collapse">
          				<ul class="nav navbar-nav navbar-right">
                    		<li><a href="">About Us</a></li>
                    		<li><a href="#">Portfolio</a></li>
                    		<li><a href="#">Contact Us</a></li>
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

	<!--Google Maps-->
    <div style="position:relative;top:50px" id="contact">
    	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
			function initialize()
			{
				var latval = '28.54596';
				var longval = '77.272666';
				var myLatlng = new google.maps.LatLng(28.54597,77.272666);
				var mapProp = {center: myLatlng,
							   zoom:15,
							   minZoom:13,
							   scrollwheel:false,
							   draggable: false,
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
	</div>