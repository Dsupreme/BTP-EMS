<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


	<title>AdminApplicant Form</title>
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
            		<div class="navbar-collapse collapse">
          				<ul class="nav navbar-nav navbar-right">
            		        <li><a href="">About Us</a></li>
                   	 		<li><a href="#">Portfolio</a></li>
                    		<li><a href="Contact.html">Contact Us</a></li>
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
        
        <div class="container" style="top:80px;">
        <div class="panel panel-default" >
  				<div class="panel-heading">Summary</div>
  				<div class="panel-body">
                <div>
                <form method="post">
                	<label>Enter Applicant Name : </label>
                    <input type="text" name="input" />
                    <input type="submit" name="output_by_id" />
                </form>
                </div>
                <div>
                	<table>
    				    <tr>
                        	<td class="Label" width="10%">First Name</td>
                            <td id="colon">:</td>
                        	<td width="20%" ><?php if (isset($_REQUEST['input'])) {echo $fetch[1];}?></td>
                        	<td class="Label" width="10%" >Middle Name</td>
                            <td id="colon">:</td>
                        	<td width="20%" ><?php if (isset($_REQUEST['input'])) {echo $fetch[2];}?></td>
                        	<td class="Label" width="10%" >Last Name </td>
                            <td id="colon">:</td>
                        	<td width="20%" ><?php if (isset($_REQUEST['input'])) {echo $fetch[3];}?></td>
                        </tr>
                        <tr>
	        				<td class="Label" >Father's Name </td>
                            <td id="colon">:</td>
				    	    <td ><?php if (isset($_REQUEST['input'])) {echo $fetch[4];}?></td>
					       	<td class="Label" >Mother's Name </td>
                            <td id="colon">:</td>
			    	        <td ><?php if (isset($_REQUEST['input'])) {echo $fetch[5];}?></td>
				    	</tr>
                        <tr>
					       	<td class="Label">Date of Birth </td>
                            <td id="colon">:</td>
				    	    <td ><?php if (isset($_REQUEST['input'])) {echo $fetch[6];}?></td>
				           	<td class="Label">Nationality </td>
                            <td id="colon">:</td>
                            <td ><input type="text" name="nationality_candidate" placeholder="Mandatory" /></td>
                            <td class="Label">Sex</td>
                            <td id="colon">:</td>
                            <td><input type="radio" name="sex"class="radio" value="Male" />
                                <span style="position:relative;top:-15px; padding-left:5px; padding-right:5px;">Male</span>
                                <input type="radio" name="sex" class="radio" value="Female" />
                                <span style="position:relative;top:-15px; padding-left:5px;"> Female</span>
                            </td>
                           
                         </tr>
                    </table>