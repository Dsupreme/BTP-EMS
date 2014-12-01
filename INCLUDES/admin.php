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
        
        <!-- CSS Links -->
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/admin.css" media="screen" />
        
        <!--Javascript Links-->
        <script type="text/javascript" src="../JS/jquery-1.11.0.min.js"></script><!--JQuery Online link -->
        <script type="text/javascript" src="../JS/bootstrap.js"></script><!--Bootstrap Javascript -->
        <script type="text/javascript" src="../JS/smoothscroll.js"></script><!--Smooth Scroll Animation -->
        <script type="text/javascript" src="JS/check_ajax.js"></script>
	</head>
 
<?php 
	include 'database.php';
	include 'Variables.php';
	include 'file-uploader.php';
	
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
		    $admin_password_add = md5($admin_password_add);
			$right = 1;
			mysql_query("INSERT INTO users(rights,username, email, password) VALUES ('$right','$_admin_username_add','$admin_email_add','$admin_password_add');") or die(mysql_error());
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('User added to database.');";
			echo "</script>";			
		}
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
                        <div class="panel-heading">Leave Applications</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <table  class="tb5" width="100%"  style="margin:1em 0;">
                                    <tr>
                                        <td align="center">First Name</td>
                                        <td align="center">Last Name</td>
                                        <td align="center">Start Date & Time</td>
                                        <td align="center">End Date & Time</td>
                                        <td align="center">Leave Type</td>
                                        <td align="center">Action</td>
                                    </tr>
                                    <tr>
                                        <td class="divider" colspan="6"> </td>
                                    </tr>
                                </table>
                                                                <?php
                                    //$select=mysql_query("select * from contact") or die(mysql_error());
                                    //while($fetch=mysql_fetch_array($select))
                                    //{
                                ?>
                                <li class="list-group-item">

                                    No pending leave request.
                                </li>

                            </ul>
                            <!---->

	<!--<tr>
        <td align="center"><?php echo $fetch[1] . " " . $fetch[2] ?></td>
        <td align="center"><?php echo $fetch[3] ?></td>
        <td align="center"><?php echo $fetch[4] ?></td>
        <td align="center"><?php echo $fetch[5] ?></td>
        <td align="center"><?php echo $fetch[6] ?></td>
        <td align="center"><?php echo $fetch[7] ?></td>
    	<td align="center"><a href="contact.php?Del=<?php echo $fetch[0]; ?>"><img src="airlines/Icon_Delete.png" alt="Delete"></a>
        				   <a href="contact.php?Edit=<?php echo $fetch[0]; ?>"><img src="airlines/Icon_Edit.png" alt="Edit"></a>
        </td>
    </tr>-->
<?php //} ?>
<!--                            </table>-->
                        </div>
                    </div>
                </form>
            </section>
            <section>
                <form id="form2" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="panel panel-default" id="holiday_form">
                        <div class="panel-heading">Add Holidays</div>
                        <div class="panel-body">
                            <table width="100%">
                                <tr>
                                    <td class="Label">Title</td>
                                    <td id="colon">:</td>
                                    <td colspan="4"><input type="text" name="holiday_title" placeholder="Mandatory" style="width:96.3%"/></td>
                                    <td class="Label">Type</td>
                                    <td id="colon">:</td>
                                    <td>
                                        <select name="holiday_type" form="form2">
                                            <option value="National">National</option>
                                            <option value="Guested">Guested</option>
                                            <option value="op3">Option 3</option>
                                            <option value="op4">Option 4</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Label">Start Date</td>
                                    <td id="colon">:</td>
                                    <td><input type="Date" name="holiday_start" placeholder="Mandatory" style="width:90%"/></td>
                                    <td class="Label">End Date</td>
                                    <td id="colon">:</td>
                                    <td><input type="date" style="width:90%"/></td>
                                    <td colspan="3" align="center"><input type="submit" class="btn btn-primary" style="margin:1em 0" name="hoilday_submit" value="Submit" /></td>
                                </tr>
                            </table>
                            <ul class="list-group">
                                <table  class="tb5" width="100%" style="margin:1em 0;">
                                    <tr>
                                        <td align="center">First Name</td>
                                        <td align="center">Last Name</td>
                                        <td align="center">Start Date & Time</td>
                                        <td align="center">End Date & Time</td>
                                        <td align="center">Leave Type</td>
                                        <td align="center">Action</td>
                                    </tr>
                                    <tr>
                                        <td class="divider" colspan="6"> </td>
                                    </tr>
                                </table>
                                                                <?php
                                    //$select=mysql_query("select * from contact") or die(mysql_error());
                                    //while($fetch=mysql_fetch_array($select))
                                    //{
                                ?>
                                <li class="list-group-item">

                                    Add all the fields here
                                </li>
                            </ul>

                        <script>$('.collapse').collapse();</script>
                    </div>

                    </div>
                </form>
            </section>
            <section>
                <form id="form3" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="panel panel-default" id="application_form">
                        <div class="panel-heading">Add Application Post</div>
                        <div class="panel-body">
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

                                    <td align="center"><input type="submit" class="btn btn-primary" style="margin:1em 0" name="hoilday_submit" value="Submit" /></td>
                                </tr>
                            </table>
                            <ul class="list-group">
                                <table  class="tb5" width="100%" style="margin:1em 0;">
                                    <tr>
                                        <td align="center">Post</td>
                                        <td align="center">Description</td>
                                        <td align="center">Action</td>
                                    </tr>
                                    <tr>
                                        <td class="divider" colspan="6"> </td>
                                    </tr>
                                </table>
                                                                <?php
                                    //$select=mysql_query("select * from contact") or die(mysql_error());
                                    //while($fetch=mysql_fetch_array($select))
                                    //{
                                ?>
                                <li class="list-group-item">

                                    Add all the fields here
                                </li>
                            </ul>

                        <script>$('.collapse').collapse();</script>
                    </div>
                </form>
            </section>
            <section>
                <form id="form4" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="panel panel-default" id="user_form">
                        <div class="panel-heading">Add user</div>
                        <div class="panel-body">
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
                                    <td ><input type="text" name="admin_password_add" placeholder="Mandatory" style="width:95%"/></td>
                                    <td class="Label">Confirm Password</td>
                                    <td id="colon">:</td>
                                    <td><input type="text" name="admin_password_confirm" placeholder="Mandatory" style="width:85%"/></td>
                                </tr>
                                <tr>
                                    <td colspan="6" align="center"><input type="submit" name="admin_newuser_submit" class="btn btn-primary" style="margin:1em 0"/></td>
                                </tr>
                            </table><!--
                            <ul class="list-group">
                                <table  class="tb5" width="100%" style="margin:1em 0;">
                                    <tr>
                                        <td align="center">Username</td>
                                        <td align="center">First Name</td>
                                        <td align="center">Last Name</td>
                                        <td align="center">User Privilege</td>
                                        <td align="center">Action</td>
                                    </tr>
                                    <tr>
                                        <td class="divider" colspan="6"> </td>
                                    </tr>
                                </table>
                                                                <?php
                                    //$select=mysql_query("select * from contact") or die(mysql_error());
                                    //while($fetch=mysql_fetch_array($select))
                                    //{
                                ?>
                                <li class="list-group-item">

                                    Add all the fields here
                                </li>
                            </ul> -->
                            <script>$('.collapse').collapse();</script>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <div class="footer">
            <div id="legal">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                In at purus at nisl pretium interdum. Aenean condimentum elementum nulla, non hendrerit diam scelerisque ac.<br><br>
                © Copyright 2014 - 2020  IIIT - Delhi
            </div>
        </div>


</html>
