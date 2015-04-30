<!DOCTYPE html>
<html>
    <?php
        //Check for usersession. Enables mutli tab support
        session_start();
        if(!$_SESSION['username']){
            echo (
                "<SCRIPT LANGUAGE='JavaScript'>
                    window.location.href='../';
                    window.alert('Not logged in.Please login to EMS to continue.')
                    </SCRIPT>"
            );
        }
        else {
    ?>
    
    <?php
        //Code For preventing outdated input of information by checking session timeout
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
            session_destroy();
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('Session Timed Out');";
            echo "window.location.href='../';";
            echo "</script>";
        }
        $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
    ?>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>EMS: Attendance Record</title>
        
        <!-- CSS Links -->
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/attendance.css" media="screen" />
        
        <!--Javascript Links-->
        <script type="text/javascript" src="../JS/jquery-1.11.0.min.js"></script><!--JQuery Online link -->
        <script type="text/javascript" src="../JS/bootstrap.js"></script><!--Bootstrap Javascript -->
        <script type="text/javascript" src="../JS/smoothscroll.js"></script><!--Smooth Scroll Animation -->
        
        <!--Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    </head>
    
    <?php
        include 'Variables.php';
        include 'database.php';
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
                    		<li><a href="Home.php">Home</a></li>
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
			</div>
		</nav>

    <section>
        	<div class="container" style="margin-top:8em;">
                <div class="panel panel-default" id="attendance_rec">
                    <div class="panel-heading">Attendance Record</div>
                    <div class="panel-body">
                        <table width="100%">           
                            <tr>
                                <td align="center">Name</td>
                                <td align="center">Date</td>
                                <td align="center">CheckIn</td>
                                <td align="center">CheckOut</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="divider"></td>
                            </tr>
                            <?php 
        //Insert while loop here to list the attendance taken so far
                                $que=mysql_query("select tb1.firstname, tb1.lastname, tb2.date, tb2.checkin, tb2.checkout from users tb1, attendance tb2 where tb1.U_id=tb2.uid") or die(mysql_error());
                                while ($fetch=mysql_fetch_array($que)) {
                            ?>
                            <tr>
                                <td align="center"><?php echo "$fetch[0]" . " " . "$fetch[1]";?></td>
                                <td align="center"><?php echo "$fetch[2]";?></td>
                                <td align="center"><?php echo "$fetch[3]";?></td>
                                <td align="center"><?php echo "$fetch[4]";?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>      
                </div>
            </div>
    </section>

<?php
    }
?>