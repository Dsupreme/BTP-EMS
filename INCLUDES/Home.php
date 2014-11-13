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
    	<title>EMS: Home</title>
    
        <!-- CSS Links -->
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/admin.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/animate-custom.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/fullcalendar.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/home.css" media="screen" />      

        <!--Javascript Links-->
        <script type="text/javascript" src="../JS/jquery-1.11.0.min.js"></script><!--JQuery Online link -->
        <script type="text/javascript" src="../js/bootstrap.js"></script><!--Bootstrap Javascript -->
        <script type="text/javascript" src="../js/smoothscroll.js"></script><!--Smooth Scroll Animation -->
        <script type="text/javascript" src="../JS/moment.min.js"></script>
        <script type="text/javascript" src="../JS/fullcalendar.js"></script><!--Calender-->
        <script type="text/javascript" src="../JS/calender_home.js"></script>

        
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="">
		<link rel="apple-touch-icon" sizes="72x72" href="">
		<link rel="apple-touch-icon" sizes="114x114" href="">
		
        <!--Fonts-->
   		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        
    </head>
<?php    
   	include 'database.php';
	if(isset($_REQUEST['output_by_id'])) {
		if(isset($_REQUEST['input'])) {$username = $_REQUEST['input']; }
		$applicant = mysql_query("select * from pdetails where firstname = '$username'") or die(mysql_error());
		$fetch=(mysql_fetch_array($applicant));
		//echo $fetch[0],$fetch[1],$fetch[2],$fetch[3],$fetch[4],$fetch[5],$fetch[6],$fetch[7],$fetch[8],$fetch[9];
		
	
	}
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
                        <li class="active"><a class="navbar-brand" href="#"><font size="+3"> Employee Management System</font></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">							
                        <li><a href="Application.php"><font size="+1">APPLY NOW</font></a></li>        		
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shortcuts<b class="caret"></b></a>  
                            <ul class="dropdown-menu">
                                <li><a href="aboutus.php">About Us</a></li>
                                <li class="divider"></li>
                                <li><a href="Contactus.php">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Welcome, ".$_SESSION['username'] . "<b class='caret'></b>"?></a>
                            <ul class="dropdown-menu">
                                <li><a href="Settings.php">Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
            </div>     
        </div>
    </nav>
    <!--========== CALENDER========--> 
    <table width="100%">
    	<tr>
            <td>
            <div class="panel panel-default" id="calender_panel">
                <div class="panel-body">
                    <div id='calendar'></div>
                </div>
            </div>
            <div class="panel panel-default" id="side_panel">
                <div class="panel-heading" style="text-align:center">Quick Links</div>
                <div class="panel-body">
                    <a href="Leave.php" ><button class="fc-button fc-state-default quicklinks">Apply For Leave</button></a>
                    <a><button type="button" class="fc-button fc-state-default quicklinks" data-toggle="modal" data-target="#addcalenderevent" >Add Calender Event</button></a>
                </div>
            </div>
            </td>
        </tr>
		<tr>
		    <td>
        	<div class="footer">
            	<div id="legal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                    In at purus at nisl pretium interdum. Aenean condimentum elementum nulla, non hendrerit diam scelerisque ac.<br><br>
                    © Copyright 2014 - 2020  IIIT - Delhi
                </div>
            </div>
			</td>
	    </tr>
    </table>
    
    <!-- Add Calender Event-->
    <div class="modal fade" id="addcalenderevent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Calender Event</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


            

</body>
</html>