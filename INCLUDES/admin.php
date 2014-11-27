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
                            <table  class="tb5" width="100%" align="center">
                                <tr>
                                    <td align="center"></td>
                                    <td align="center">Address 1</td>
                                    <td align="center">Address 2</td>
                                    <td align="center">City</td>
                                    <td align="center">State</td>
                                    <td align="center">Country</td>
                                    <td align="center">Pincode</td>
                                    <td align="center">Telephone(1)</td>
                                    <td align="center">Telephone(2)</td>
                                    <td align="center">Fax</td>
                                    <td align="center">Email</td>
                                    <td align="center">Action</td>
                                </tr>
                                <?php
                                    //$select=mysql_query("select * from contact") or die(mysql_error());
                                    //while($fetch=mysql_fetch_array($select))
                                    //{
                                ?>
	<tr>
        <td align="center"><?php echo $fetch[1] ?></td>
        <td align="center"><?php echo $fetch[2] ?></td>
        <td align="center"><?php echo $fetch[3] ?></td>
        <td align="center"><?php echo $fetch[4] ?></td>
        <td align="center"><?php echo $fetch[5] ?></td>
        <td align="center"><?php echo $fetch[6] ?></td>
        <td align="center"><?php echo $fetch[7] ?></td>
        <td align="center"><?php echo $fetch[8] ?></td>
        <td align="center"><?php echo $fetch[9] ?></td>
        <td align="center"><?php echo $fetch[10] ?></td>
        <td align="center"><?php echo $fetch[11] ?></td>
    	<td align="center"><a href="contact.php?Del=<?php echo $fetch[0]; ?>"><img src="airlines/Icon_Delete.png" alt="Delete"></a>
        				   <a href="contact.php?Edit=<?php echo $fetch[0]; ?>"><img src="airlines/Icon_Edit.png" alt="Edit"></a>
        </td>
    </tr>
<?php //} ?>
                            </table>
                        </div>
            </section>



</html>
