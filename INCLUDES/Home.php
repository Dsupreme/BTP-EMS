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
    	<title>Untitled Document</title>
    
        <!-- CSS Links -->
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/admin.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/animate-custom.css" media="screen" />
        
        <!--Javascript Links-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script><!--JQuery Online link -->
        <script type="text/javascript" src="../js/bootstrap.js"></script><!--Bootstrap Javascript -->
        <script type="text/javascript" src="../js/smoothscroll.js"></script><!--Smooth Scroll Animation -->
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
                			<li class="active"><a class="navbar-brand" href="../index.php"><font size="+3"> Employee Management System</font></a></li>
                		</ul>
            		</div>
            		<ul class="nav navbar-nav navbar-right">							
                            <li><a href="Application.php"><font size="+1">APPLY NOW</font></a></li>        		
			                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shortcuts<b class="caret"></b></a>  
    							<ul class="dropdown-menu">
						    		<li><a href="#">About Us</a></li>
                               		<li class="divider"></li>
									<li><a href="Contactus.php">Contact Us</a></li>
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
     
</body>
</html>