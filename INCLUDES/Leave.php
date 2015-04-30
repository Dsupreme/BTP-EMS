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

            <!-- CSS Links -->
            <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="../CSS/leave.css" media="screen" />

            <!--Javascript Links-->
             <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
            <script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap.js"></script><!--Bootstrap Javascript -->
            <script type="text/javascript" src="../js/smoothscroll.js"></script><!--Smooth Scroll Animation -->
</head>
        <?php
            //Database connection strings and variable declaration
            include 'Variables.php';
            include 'database.php';
       ?>

        <?php
            //Query to display firstname & lastname of user in the disabled boxes.
            $details=mysql_query("select firstname, lastname from users where U_id = '".$_SESSION['userid']."';") or die(mysql_error());
            while($rows = mysql_fetch_array($details)){
                $fname = $rows['firstname'];
                $lname = $rows['lastname'];
            }
        
            //Applying for new leave
            if(isset($_POST['submitleave'])) {
                $leave_error = "";

                if($_SERVER['REQUEST_METHOD']== "POST") {
                    
                    //Leave Start Date Input check
                    if(empty($leave_start)) {
                        $leave_error .= "Leave Start Date is required. \\n";
                    }
                    else {
                        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$leave_start)) {
                            $leave_error .= "Invalid Start Date. Kindly follow mentioned format. \\n";
                        }
                    }

                    //Leave End Date Input check
                    if(empty($leave_end)) {
                        $leave_error .= "Leave Start Date is required. \\n";
                    }
                    else {
                        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$leave_end)) {
                            $leave_error .= "Invalid End Date. Kindly follow mentioned format. \\n";
                        }
                    }

                    //Insertion into database if no input errors found.
                    if (strcmp($leave_error,"")!="0") {
                        echo "<script language='javascript' type='text/javascript'>"."alert('$leave_error');"."</script";
                    }
                    else {
                        $leave_start = $leave_start."T00:00:00";
                        $leave_end = $leave_end."T00:00:00";
                        mysql_query("INSERT INTO `leave` (`id`, `title`, `start`, `end`, `description`, `backgroundColor`) VALUES (".$_SESSION['userid']." , '$leave_type' , '$leave_start' , '$leave_end' , '$leave_description', 'orange')") or die(mysql_error());
                        echo "<script language='javascript' type='text/javascript'>";
                        echo "alert('Leave sent for approval');";
                        echo "</script>";
                    }
                }
            }
        
        //Detecting uid from session variable
        $userid = mysql_query("select U_id from `users` where username='".$_SESSION['username']."'");
        $fetch_userid=mysql_fetch_array($userid);
        ?>
    
        <!--Date Picker to have date after the current date only-->
        <script>
            $(function() {
                $( "#sdate" ).datepicker({
                    altField: "#sdate",
                    altFormat: "yy-mm-dd",
                    minDate: -5, maxDate: "+3M +10D"
                });
            });
            $(function() {
                $( "#edate" ).datepicker({
                    altField: "#edate",
                    altFormat: "yy-mm-dd",
                    minDate: 0, maxDate: "+1M +10D"
                });
            });
        </script>
    
        <body  style="background-color:#808080">
            <!--============================== navigation Bar ==============================-->
            <section>
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
            </section>
            <!--============================== Leave Application Form & Ticker ==============================-->
            <section>
                <div class="container" style="margin-top:8em;">
                    <section>
                        <!--Form for applying for new leave-->
                        <form id="form1" method="POST">
                            <div class="panel panel-default" id="leave_form">
                                    <div class="panel-heading">Leave Application</div>
                                    <div class="panel-body">
                                        <!--Leave fields-->
                                        <table>
                                            <tr>
                                                <td class="Label" >First Name </td>
                                                <td id="colon"> : </td>
                                                <td ><input type="text" name="leave_fname" contenteditable="false" value="<?php if(isset($fname)){echo $fname;}?>" style="width:100%" disabled/></td>

                                                <td class="Label" >Last Name </td>
                                                <td id="colon"> : </td>
                                                <td ><input type="text" name="leave_lname" contenteditable="false" value="<?php if(isset($lname)){echo $lname;}?>" style="width:100%" disabled/></td>
                                            </tr>
                                            <tr>
                                                <td class="Label" >Start Date</td>
                                                <td id="colon"> : </td>
                                                <td ><input id="sdate" type="text" style="width:100%"  title="yyyy-mm-dd" name="leave_start" placeholder="Mandatory" /><!--min="<?php echo date("Y-m-d");?>"--> </td>

                                                <td class="Label" >End Date</td>
                                                <td id="colon"> : </td>
                                                <td ><input id="edate" type="text" style="width:100%"  title="yyyy-mm-dd" name="leave_end" placeholder="Mandatory" /><!--min="<?php echo date("Y-m-d");?>"--></td>
                                            </tr>
                                            <tr>
                                                <td class="Label">Description</td>
                                                <td id="colon"> : </td>
                                                <td colspan="5"><textarea name="descrip" style="width:100%" placeholder="This is just for remembering why you took this leave. This isn't shared with anybody "></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class="Label">Type </td>
                                                <td id="colon"> : </td>
                                                <td>
                                                <select name="leave_type" form="form1">
                                                    <!--Types of leaves-->
                                                    <!-- Color Code : Orange for Pending/Rejected, Green for Approved-->
                                                    <option value="Casual leave">Casual leave</option>  
                                                    <option value="Payed Leave">Paid Leave</option>
                                                    <option value="Maternity Leave">Maternity Leave</option>
                                                    <option value="Paternity Leave">Paternity Leave</option>
                                                </select>
                                                </td>
                                                <td colspan="2" align="center"><input class="btn btn-primary" style="margin:1em 0" name="submitleave" type="submit" value="Submit" /></td>
                                            </tr>
                                        </table>
                                    </div>
    </div>
                            <div class="panel panel-default" id="leave_ticker">
                                    <div class="panel-heading">Approved Leave Ticker</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-6 col-md-4">
                                                <a class="thumbnail">
                                                    <div class="caption">
                                                        THIS <br /> WEEK
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <a class="thumbnail">
                                                  <div class="caption">
                                                        THIS <br /> MONTH
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <a class="thumbnail">
                                                 <div class="caption">
                                                        TILL <br />NOW
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row"  style="margin-top:1em">
                                            <div class="col-xs-6 col-md-4">
                                                <a class="thumbnail">
                                                    <div class="caption">
                                                        1
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <a class="thumbnail">
                                                  <div class="caption">
                                                    <?php
                                                        echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
                                                    ?>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <a class="thumbnail">
                                                 <div class="caption">
                                                    <?php
                                                        $alltime_leaves = mysql_query("select count(*) from `leave` where id='".$fetch_userid[0]."' and backgroundColor='Green'");
                                                        $fetch2=mysql_fetch_array($alltime_leaves);
                                                        echo "".$fetch2[0];
                                                        echo "\n";        
                                                    ?>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </section>
                </div>
            </section>
            <!--============================== Past Leave Record ==============================-->
            <section>
                <div class="container">
                    <div class="panel panel-default" id="leave_history">
                        <div class="panel-heading">Leave History</div>
                        <div class="panel-body">
                            <table class="tb5" width="100%"  style="margin:1em 0;">
                                <tr>
                                                    <td align="center">Leave Type</td>
                                                    <td align="center">Description</td>
                                                    <td align="center">Start Date & Time</td>
                                                    <td align="center">End Date & Time</td>
                                                    <td align="center">Status</td>
                                                </tr>
                                <tr>
                                                    <td class="divider" colspan="7"></td>
                                                </tr>
                                <?php 
                                    //Insert while loop here to list all the leaves taken so far
                                    $all_leaves = mysql_query("select title,description,start,end,backgroundColor from `leave` where id='".$fetch_userid[0]."'");
                                    while ($fetch3=mysql_fetch_array($all_leaves)) {
                                ?>
                                    <tr>
                                            <td align="center"><?php echo $fetch3[0] ?></td>
                                            <td align="center"><?php echo $fetch3[1] ?></td>
                                            <td align="center"><?php echo $fetch3[2] ?></td>
                                            <td align="center"><?php echo $fetch3[3] ?></td>
                                            <td align="center"><?php if($fetch3[4] == "orange"){echo "not-approved";}else{echo "approved";} ?></td>
                                        </tr>
                                <?php
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
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
<?php
    }
?>