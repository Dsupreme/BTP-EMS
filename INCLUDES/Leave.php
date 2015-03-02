<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
			session_destroy();
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Session Timed Out');";
			echo "</script>";
	}
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
	if($_SESSION['username']){
	}
	//else {
//		echo "href=\"../#tologin\"";
//	}
	else {
		echo (
			"<SCRIPT LANGUAGE='JavaScript'>
    			window.location.href='/BTP-EMS/#login';
    		   	window.alert('Not logged in.Please login to EMS to continue.')
    			</SCRIPT>"
		);
	}
?>
	<head>

	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- CSS Links -->
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/leave.css" media="screen" />

        <!--Javascript Links-->
         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script><!--Bootstrap Javascript -->
        <script type="text/javascript" src="../js/smoothscroll.js"></script><!--Smooth Scroll Animation -->
		<script type="text/javascript" src="JS/check_ajax.js"></script>
	</head>
    <?php

        include 'Variables.php';
        include 'database.php';
   ?>

    <?php
		$details=mysql_query("select firstname, lastname from users where U_id = '".$_SESSION['userid']."';") or die(mysql_error());
		while($rows = mysql_fetch_array($details)){
		$fname = $rows['firstname'];
		$lname = $rows['lastname'];
		}

		if(isset($_POST['submitleave'])) {
            $leave_error = "";

            if($_SERVER['REQUEST_METHOD']== "POST") {
                if(empty($leave_start)) {
                    $leave_error .= "Leave Start Date is required. \\n";
                }
                else {
                    if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$leave_start)) {
                        $leave_error .= "Invalid Start Date. Kindly follow mentioned format. \\n";
                    }
                }

                if(empty($leave_end)) {
                    $leave_error .= "Leave Start Date is required. \\n";
                }
                else {
                    if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$leave_end)) {
                        $leave_error .= "Invalid End Date. Kindly follow mentioned format. \\n";
                    }
                }

                if (strcmp($leave_error,"")!="0") {
                echo "<script language='javascript' type='text/javascript'>"."alert('$leave_error');"."</script";
                }
                else {
                        $leave_start = $leave_start."T00:00:00";
                $leave_end = $leave_end."T00:00:00";
                mysql_query("INSERT INTO `leave` (`id`, `title`, `start`, `end`, `description`, `backgroundColor`) VALUES (".$_SESSION['userid']." , '$leave_type' , '$leave_start' , '$leave_end' , '$leave_description', 'orange')") or die(mysql_error());
                echo "<script language='javascript' type='text/javascript'>";
                echo "alert('Leave sent for approval');";
                echo "$('#calendar').reload(true)";
                echo "</script>";

                }
            }
        }
    ?>

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
     	<div class="container" style="margin-top:8em;">
	        <section>
                <form id="form1" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="panel panel-default" id="leave_form">
                            <div class="panel-heading">Leave Application</div>
                            <div class="panel-body">
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
                                            <option value="Casual leave">Casual leave</option>  <!-- Add appropriate color codes here-->
                                            <option value="Payed Leave">Payed Leave</option>
                                            <option value="Maternity Leave">Maternity Leave</option>
                                            <option value="Paternity Leave">Paternity Leave</option>
                                        </select>
                                        <td></td>
                                        </td>
                                        <td colspan="2" align="center"><input class="btn btn-primary" style="margin:1em 0" name="submitleave" type="submit" value="Submit" /></td>
                                    </tr>
                                    <tr>

                                    </tr>
                             </table>
                            </div>
                        </div>
                        <div class="panel panel-default" id="leave_ticker">
                            <div class="panel-heading">Leave Ticker</div>
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
                                                20
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                        <a class="thumbnail">
                                         <div class="caption">
                                               30
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                </form>
            </section>
        </div>
		<div class="container">
            <div class="panel panel-default" id="leave_history">
    		    <div class="panel-heading">Leave History</div>
                <div class="panel-body">
                    <ul class="list-group">
                        <?php //Insert while loop here to list all the leaves taken so far
                        ?>
                        <li class="list-group-item">
                            Add all the fields here
                        </li>

                    </ul>


                    <script>$('.collapse').collapse();</script>
                </div>
            </div>
        </div>
	</body>
</html>
