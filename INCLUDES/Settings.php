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

<?php
    include 'Variables.php';
    include 'database.php';
?>
    
    <?php
        if(isset($_POST['submitbtn'])) {
                $pswdreset = "";
        
                if($_SERVER['REQUEST_METHOD']== "POST") {
                    
                    //Current Password Input check
                    if(empty($pswd_c)) {
                        $pswdreset .= "Current Password Field is required. \\n";
                    }
                    else {
                        $pswd_c = md5($pswd_c);
                        $compare_pswd = mysql_query("select count(*) from `users` where username='".$_SESSION['username']."' and password='".$pswd_c."'");
                        if (!mysql_num_rows($compare_pswd)) {
                            $pswdreset .= "Invalid Current Password. Please try again. \\n";
                        }
                    }

                    //New Password Input check
                    if(empty($pswd_n)) {
                        $pswdreset .= "New password field is required. \\n";
                    }
                    if(empty($pswd_r)) {
                        $pswdreset .= "Retype password field is required. \\n";
                    }
                    if(!empty($pswd_n) AND !empty($pswd_r)) {
                        if(strcmp($pswd_n,$pswd_r)) {
                            $pswdreset .= "New password and Retype password field do not match. \\n";
                        }
                    }
                    
                    //Insertion into database if no input errors found.
                    if (strcmp($$pswdreset,"")!="0") {
                        echo "<script language='javascript' type='text/javascript'>"."alert('$pswdreset');"."</script";
                    }
                    else {
                        //Query to update password
                        $pswd_n = md5($pswd_n);
                        mysql_query("UPDATE `users` SET `password`='".$pswd_n."' WHERE username='".$_SESSION['username']."'");
                        echo "<script language='javascript' type='text/javascript'>";
                        echo "alert('Password changed successfully');";
                        echo "</script>";
                    }
                }
            }
    ?>
    <body  style="background-color:#808080">
    <!--============================== Navigation Bar ==============================-->
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
        <div class="container" style="margin-top:8em;">
            <section>
                <div class="tabs">
                    <ul class="tab-links" id="pages">
                        <li class="active"><a href="#tab1">Account Settings</a></li>
                        <!--<li><a href="#tab2">Notification Settings</a></li>
                        <!--<li><a href="#tab3">Application Posts</a></li>
                        <li><a href="#tab4">User Addition</a></li>-->
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab active">
                            <form id="form1" method="POST" >
                                <table width="100%">
                                    <tr>
                                        <td class="Label">Current Password</td>
                                        <td id="colon">:</td>
                                        <td><input id="password" name="pswd_c" required type="password" /></td>
                                        <td class="Label">New Password</td>
                                        <td id="colon">:</td>
                                        <td><input id="password" name="pswd_n" required type="password" /></td>
                                        <td class="Label">Retype Password</td>
                                        <td id="colon">:</td>
                                        <td><input id="password" name="pswd_r" required type="password" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="9" align="center" style="padding-top:1em"><input class="btn btn-primary" name="submitbtn" type="submit" value="Submit" /></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div id="tab2" class="tab">
                        </div>
                    
                    </div>
    </body>
<?php
    }
?>
</html>