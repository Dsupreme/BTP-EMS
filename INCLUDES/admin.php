<!DOCTYPE html>
<html>
<?php
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
        <link rel="stylesheet" type="text/css" href="../CSS/admin.css" media="screen" />
        <title> Admin Panel - EMS </title>
        <!--Javascript Links-->

        <script type="text/javascript" src="../JS/jquery-1.11.0.min.js"></script><!--JQuery Online link -->
        <script type="text/javascript" src="../JS/bootstrap.js"></script><!--Bootstrap Javascript -->
        <script type="text/javascript" src="../JS/smoothscroll.js"></script><!--Smooth Scroll Animation -->
        <script type="text/javascript" src="../JS/check_ajax.js"></script>
        <script type="text/javascript" src="../JS/admin.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
	</head>

<?php
	include 'database.php';
	include 'Variables.php';
    include '../FUNCTIONS/mail_newadmin.php';
    include '../FUNCTIONS/checkmail.php'
?>

<?php
	if(isset($_REQUEST['admin_newuser_submit'])) {
		$signup_error = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_admin_username_add)) {
				$signup_error.="Username is required.";
			}
			else {
				if (!preg_match('/^[a-zA-Z0-9]+$/', $_admin_username_add)) {
					$signup_error.="Invalid Username. Remove invalid characters";
				}
			}
			if (empty($admin_email_add)) {
				$signup_error.="Email address is required.";
			}
			else {
				$admin_email_add = trim($admin_email_add);
				if(!checkEmail($admin_email_add)) {
					$signup_error.="Invalid email address!";
				}
			}
			if (strcmp($admin_password_add,$admin_password_confirm)=='0') {
			}
			else {
				$signup_error.="Both the password fields do not match ";
			}
		}
		if (strcmp($signup_error,"")!='0') {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('$signup_error');";
			echo "</script>";
		}
		else {
				$passs  = $admin_password_add;
		    $admin_password_add = md5($admin_password_add);
			$right = 1;
			mysql_query("INSERT INTO users(rights,username, email, password) VALUES ('$right','$_admin_username_add','$admin_email_add','$admin_password_add');") or die(mysql_error());

            mail_newadmin($admin_email,$_admin_username_add,$passs);
            echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Admin added to database.');";
			echo "</script>";
		}
	}
    if(isset($_POST['submitholiday'])) {
				$leave_error = "";

				if($_SERVER['REQUEST_METHOD']== "POST") {
						if(empty($holiday_start)) {
								$leave_error .= "Holiday Start Date is required. \\n";
						}
						else {
								if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$holiday_start)) {
										$leave_error .= "Invalid Start Date. Kindly follow mentioned format. \\n";
								}
						}

						if(empty($holiday_end)) {
								$leave_error .= "Holiday end Date is required. \\n";
						}
						else {
								if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$holiday_end)) {
										$leave_error .= "Invalid End Date. Kindly follow mentioned format. \\n";
								}
						if(empty($holiday_title)) {
								$leave_error .= "Holiday title is required. \\n";
						}
						if(empty($holiday_type)) {
								$leave_error .= "Holiday type is required. \\n";
						}
						}

						if (strcmp($leave_error,"")!="0") {
						echo "<script language='javascript' type='text/javascript'>"."alert('$leave_error');"."</script>";
						}
						else {
										$holiday_start = $holiday_start."T00:00:00";
						$holiday_end = $holiday_end."T00:00:00";
						mysql_query("INSERT INTO `holidays` (`title`,`type`, `start`, `end`, `backgroundColor`) VALUES ('$holiday_title' , '$holiday_type' , '$holiday_start' , '$holiday_end' , '$holiday_type')") or die(mysql_error());
						echo "<script language='javascript' type='text/javascript'>";
						echo "alert('Holiday inserted');";
						echo "$('#calendar').reload(true)";
						echo "</script>";
						}
				}
		}
    if(isset($_REQUEST['holiday_submit'])) {
		$signup_error = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($app_post_title)) {
				$signup_error.="Post name is required.";
			}
			if (empty($app_descp)) {
				$signup_error.="Post Description is required.";
			}
		}
		if (strcmp($signup_error,"")!='0') {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('$signup_error');";
			echo "</script>";
		}
		else {
			$status = 1;
			mysql_query("INSERT INTO posts(post, description,status) VALUES ('$app_post_title','$app_descp','$status');") or die(mysql_error());
	}
}
    if(isset($_REQUEST['admin_newemp_submit'])) {
		$signup_error = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_admin_username_add)) {
				$signup_error.="Username is required.";
			}
			else {
				if (!preg_match('/^[a-zA-Z0-9]+$/', $_admin_username_add)) {
					$signup_error.="Invalid Username. Remove invalid characters";
				}
			}
			if (empty($admin_email_add)) {
				$signup_error.="Email address is required.";
			}
			else {
				$admin_email_add = trim($admin_email_add);
				if(!checkEmail($admin_email_add)) {
					$signup_error.="Invalid email address!";
				}
			}
			if (strcmp($admin_password_add,$admin_password_confirm)=='0') {
			}
			else {
				$signup_error.="Both the password fields do not match ";
			}
		}
		if (strcmp($signup_error,"")!='0') {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('$signup_error');";
			echo "</script>";
		}
		else {
				$passs  = $admin_password_add;
				$admin_password_add = md5($admin_password_add);
			$right = 2;
			mysql_query("INSERT INTO users(rights,username, email, password) VALUES ('$right','$_admin_username_add','$admin_email_add','$admin_password_add');") or die(mysql_error());

			$mail = new PHPMailer;
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'madhavadityanaresh@gmail.com';            // SMTP username
			$mail->Password = 'naresh12121993';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
			$mail->From = 'madhavadityanaresh@gmail.com';
			$mail->FromName = '<Do Not Reply>EMS Mailer';
			$mail->addAddress($admin_email_add,$_admin_username_add);     // Add a recipient
			$mail->WordWrap = 55;                                 // Set word wrap to 50 characters
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Successful Employee Account creation';
			$mail->Body    = 'Welcome to the Employee Management System of <b>IIIT-Delhi</b> as an employee of IIITD. Your  user name/employee code is '.$_admin_username_add.' and password is '.$passs.' Please dont share your password with anyone.';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			$mail->send();
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Employee added to database.');";
			echo "</script>";
		}
	}
?>
    
<script>
$(function() {
$( "#holiday_start" ).datepicker({
altField: "#holiday_start",
altFormat: "yy-mm-dd"});
});
$(function() {
$( "#holiday_end" ).datepicker({
altField: "#holiday_end",
altFormat: "yy-mm-dd"
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
                                	<li><a href="Settings.php">Settings</a></li>
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
                <div class="tabs">
                    <ul class="tab-links" id="pages">
                        <li class="active"><a href="#tab1">Leave Applications</a></li>
                        <li><a href="#tab2">Holidays</a></li>
                        <li><a href="#tab3">Application Posts</a></li>
                        <li><a href="#tab4">User Addition</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab active">
                            <p>Pending Leave applications waiting for approval or rejection :</p>
                            <p>
                                <form id="form1" method="POST">
                                    <table  class="tb5" width="100%"  style="margin:1em 0;">
                                        <tr>
                                            <td align="center">First Name</td>
                                            <td align="center">Last Name</td>
                                            <td align="center">Start Date & Time</td>
                                            <td align="center">End Date & Time</td>
                                            <td align="center">Status</td>
											<td align="center">Leave Type</td>
											<td align="center">Action</td>
                                        </tr>
                                        <tr>
                                            <td class="divider" colspan="7"></td>
                                        </tr>
                                    <?php
                                        $select=mysql_query("select * from `leave`where 1") or die(mysql_error());
                                        while($fetch=mysql_fetch_array($select))
                                        {
                                    ?>
                                            <tr>
											<?php
												$select2 = mysql_query("select firstname, lastname from users where U_id = ".$fetch[1]) or die(mysql_error());
												$fetch2 = mysql_fetch_array($select2);
											?>
												<td align="center"><?php echo $fetch2[0] ?></td>
												<td align="center"><?php echo $fetch2[1] ?></td>
                                                <td align="center"><?php echo $fetch[3] ?></td>
                                                <td align="center"><?php echo $fetch[4] ?></td>
												<td align="center"><?php if($fetch[6] == "orange"){echo "not-approved";}else{echo "approved";} ?></td>
                                                <td align="center"><?php echo $fetch[2] ?></td>
                                                <td align="center">
                                                    <a href="deleteleave.php?Del=<?php echo $fetch[0]; ?>"><img src="../IMAGES/cross.png" alt="Disapprove "></a>                              
                                                    <a href="approveleave.php?Edit=<?php echo $fetch[0]; ?>"><img src="../IMAGES/tick.png" alt="Approve"></a>
                                                </td>
                                            </tr>
                                    <?php } ?>
                                        
                                    <!--<?php
                                        //$select3 = mysql_query("select tb1.l_id,tb2.firstname, tb1.title from `leave` tb1, users tb2 where tb1.l_id=tb2.U_id") or die(mysql_error());
                                        //while($fetch3=mysql_fetch_array($select3)) {
                                    ?>
                                            <tr>
											<?php
												//$select2 = mysql_query("select firstname, lastname from users where U_id = ".$fetch[1]) or die(mysql_error());
												//$fetch2 = mysql_fetch_array($select2);
											?>
												<td align="center"><?php //echo $fetch3[1] ?></td>
                                                <td align="center"><?php //echo $fetch3[2] ?></td>

                                                
                                            </tr>
                                        <?php
                                    //    }
        /*
        <!--<td align="center"><?php echo $fetch1[1] ?></td>-->
                                                <!--
                                                <td align="center"><?php echo $fetch[3] ?></td>
                                                <td align="center"><?php echo $fetch[4] ?></td>
												<td align="center"><?php if($fetch[6] == "orange"){echo "not-approved";}else{echo "approved";} ?></td>
                                                <td align="center"><?php echo $fetch[2] ?></td>
                                                <td align="center">
                                                    <a href="deleteleave.php?Del=<?php echo $fetch[0]; ?>"><img src="../IMAGES/cross.png" alt="Disapprove "></a>                              
                                                    <a href="approveleave.php?Edit=<?php echo $fetch[0]; ?>"><img src="../IMAGES/tick.png" alt="Approve"></a>-->
                                        <!--</td>-->
        //"select tb1.l_id from leave tb1, users tb2 where tb1.l_id=tb2.U_id"
        // tb2.firstname, tb2.lastname, tb1.start, tb1.end, tb1.title., tb1.status*/
                                        ?>     -->                                   
                                    </table>
                                </form>
                            </p>
                        </div>
                        <div id="tab2" class="tab">
                            <p>Add holidays for all users</p>
                            <p>
                               <form id="form2" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                   <table width="100%">
                                       <tr>
                                           <td class="Label">Title</td>
                                           <td id="colon">:</td>
                                           <td colspan="4"><input type="text" name="holiday_title" placeholder="Mandatory" style="width:96.3%"/></td>
                                           <td class="Label">Type</td>
                                           <td id="colon">:</td>
                                           <td>
                                               <select name="holiday_type" form="form2">
                                                   <option value="RebeccaPurple">National</option>
                                                   <option value="SteelBlue">Guested</option>
                                                   <option value="Turquoise">ESYA</option>
                                                   <option value="Violet">Odyssey</option>
                                               </select>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td class="Label">Start Date</td>
                                           <td id="colon">:</td>
                                           <td><input type="date" id="holiday_start" name="holiday_start" placeholder="Mandatory" style="width:90%"/></td>
                                           <td class="Label">End Date</td>
                                           <td id="colon">:</td>
                                           <td><input type="date" id="holiday_end" name="holiday_end" placeholder="Mandatory" style="width:90%"/></td>
                                           <td colspan="3" align="center"><input type="submit" class="btn btn-primary" style="margin:1em 0" name="submitholiday" value="Submit" /></td>
                                       </tr>
                                   </table>
                                   <table  class="tb5" width="100%" style="margin-top:2em;">
                                       <tr>
                                           <td align="center">Title</td>
                                           <td align="center">Start Date & Time</td>
                                           <td align="center">End Date & Time</td>
                                           <td align="center">Holiday Type</td>
                                           <td align="center">Action</td>
                                       </tr>
                                       <tr>
                                           <td class="divider" colspan="5"> </td>
                                       </tr>
																				<?php
																						$select=mysql_query("select * from holidays") or die(mysql_error());
																						while($fetch=mysql_fetch_array($select))
																						{
																							?>

																					<tr>

																					<td align="center"><?php echo $fetch['title']; ?></td>
																					<td align="center"><?php echo $fetch['start']; ?></td>
																					<td align="center"><?php echo $fetch['end']; ?></td>
																					<td align="center"><?php if($fetch['type'] == "RebeccaPurple"){echo "National";} if($fetch['type'] == "SteelBlue"){echo "Guested";} if($fetch['type'] == "Turquoise"){echo "Esya";} if($fetch['type'] == "Violet"){echo "Odyssey";} ?></td>
																					<td align="center">
																							<a href="deleteholiday.php?Del=<?php echo $fetch['holiday_id']; ?>"><img src="../IMAGES/cross.png" alt="Delete"></a>
																					</td>

																					</tr>
																			<?php } ?>
                                   </table>
                                </form>
                            </p>
                        </div>
                        <div id="tab3" class="tab">
                            <p>Job Application Posts currently available</p>
                            <p>
                                <form id="form3" method="POST" autocomplete="on" onSubmit="JavaScript:load_posts()">
                                    <table width="100%">
                                        <tr>
                                            <td class="Label">Post</td>
                                            <td id="colon">:</td>
                                            <td ><input type="text" name="app_post_title" placeholder="Mandatory" style="width:95%"/></td>
                                        </tr>
                                        <tr>
                                            <td class="Label">Description</td>
                                            <td id="colon">:</td>
                                            <td ><textarea type="Date" name="app_descp" placeholder="Mandatory" style="width:95%"></textarea></td>
                                            <td align="center"><input type="submit" class="btn btn-primary" style="margin:1em 0" name="holiday_submit" value="Submit" /></td>
                                        </tr>
                                    </table>
                                    <table  class="tb5" width="100%" style="margin:1em 0;">
                                        <tr>
																						<td align="center">Post ID</td>
                                            <td align="center">Post</td>
                                            <td align="center">Description</td>
																						<td align="center">Status</td>
                                            <td align="center">Action</td>
                                        </tr>
                                        <tr>
                                            <td class="divider" colspan="6"> </td>
                                        </tr>
																				<?php
																						$select=mysql_query("select * from posts") or die(mysql_error());
																						while($fetch=mysql_fetch_array($select))
																						{
																				?>
																						<tr>
																							<td align="center"><?php echo $fetch['post_id'];?></td>
																							<td align="center"><?php echo $fetch['post'];?></td>
																							<td align="center"><?php echo $fetch['description'];?></td>
																							<td align="center"><?php if($fetch['status'] == 1){echo "Active";} else {echo "Inactive";}?></td>
																							<td align="center">
																							<a href="deletepost.php?Del=<?php echo $fetch['post_id']; ?>"><img src="../IMAGES/cross.png" alt="Deactivate"></a> <a href="approvepost.php?Edit=<?php echo $fetch['post_id']; ?>"><img src="../IMAGES/tick.png" alt="Activate"></a>
																							</td>
																						</tr>

																				<?php } ?>

                                    </table>

                                </form>
                            </p>
                        </div>
                        <div id="tab4" class="tab">
                            <p>Add new user account</p>
                            <p>
                                <form id="form4" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <table width="100%">
                                        <tr>
                                            <td class="Label">Username</td>
                                            <td id="colon">:</td>
                                            <td ><input type="text" id="admin_username_add" name="admin_username_add" placeholder="Mandatory" style="width:95%"/><span id="status"></span></td>
                                            <td class="Label">Email</td>
                                            <td id="colon">:</td>
                                            <td><input type="text" name="admin_email_add" placeholder="Mandatory" style="width:85%"/></td>
                                        </tr>
                                        <tr>
                                            <td class="Label">Password</td>
                                            <td id="colon">:</td>
                                            <td ><input type="password" name="admin_password_add" placeholder="Mandatory" style="width:95%"/></td>
                                            <td class="Label">Confirm Password</td>
                                            <td id="colon">:</td>
                                            <td><input type="password" name="admin_password_confirm" placeholder="Mandatory" style="width:85%"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" align="center"><input type="submit" name="admin_newuser_submit" class="btn btn-primary" style="margin:1em 0" value="Add Admin"/></td>
                                        <td colspan="1" align="center"><input type="submit" name="admin_newemp_submit" class="btn btn-primary" style="margin:1em 0" value="Add Employee"/></td>

																				</tr>
                                    </table>
                                    <table  class="tb5" width="100%" style="margin:1em 0;">
                                        <tr>
                                            <td align="center">Username</td>
                                            <td align="center">First Name</td>
                                            <td align="center">Last Name</td>
                                            <td align="center">User Privilege(1/0:admin/user)</td>
                                            <td align="center">Action</td>
                                        </tr>
                                        <tr>
                                            <td class="divider" colspan="6"> </td>
                                        </tr>

                                    <?php
                                        $select=mysql_query("select * from users") or die(mysql_error());
                                        while($fetch=mysql_fetch_array($select))
                                        {
                                    ?>
                                        <tr>
																					<td align="center"><?php echo $fetch['username'];?></td>
																					<td align="center"><?php echo $fetch['firstname'];?></td>
																					<td align="center"><?php echo $fetch['lastname'];?></td>
																					<td align="center"><?php echo $fetch['rights'];?></td>
																					<td align="center"></td>
                                        </tr>

                                    <?php } ?>
                                        </table>
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="footer">
            <div id="legal">
                EMS, an online portal to facilitate all the administrative tasks<br>
                © Copyright 2014 IIIT - Delhi
            </div>
        </div>

</html>
<?php
	}
?>