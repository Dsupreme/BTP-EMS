<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    			window.location.href='../#login';
    		   	window.alert('Not logged in.Please login to EMS to continue.')
    			</SCRIPT>"
		);
	}	
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


		<!--Fonts-->
   		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Revalia' rel='stylesheet' type='text/css'>
		

        
        <!-- CSS Links -->
		<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/animate-custom.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/profile.css" media="screen"  />
        
        <!--Javascript Links-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script><!--JQuery Online link -->
       	<script type="text/javascript" src="../JS/bootstrap.js"></script><!--Bootstrap Javascript-->
        
</head>



<?php 

	include 'Variables.php';
	include 'file-uploader.php';
	include 'database.php';
?>

	
<?php
	if(isset($_POST['profile_submit'])) { 
		$signup_error = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($fname)and(empty($lname))){
				$signup_error.=" First name and last name , both are required.";
			}
			else {
				if (!preg_match('/^[a-zA-Z ]+$/', $fname)) {
					$signup_error.=" Invalid Firstname. Remove invalid characters ";
				}
				else if (!preg_match('/^[a-zA-Z ]+$/', $lname)) {
					$signup_error.=" Invalid Lastname. Remove invalid characters";
				}
			}
			if(empty($d_o_b)){$signup_error.=" Date of Birth is required. ";}else{if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $d_o_b)){ 
					$signup_error.=" Invalid Date format , Please fill as suggested in tool-tip";					
				}}
			if(empty($mobile)){$signup_error.=" Mobile number is required. ";}else{if (!preg_match('/^\d{10}$/', $mobile)) {
					$signup_error.=" Invalid mobile number. Remove special characters ";
				}}
			
		}
		
		if (strcmp($signup_error,"")!='0') {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('$signup_error');";
			echo "</script>";
		}
		else{
			$imageData = @addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_size = @getimagesize($_FILES['image']['tmp_name']);
		    if($image_size != FALSE){
			$usersid = $_SESSION['userid'];
		    mysql_query("UPDATE users SET  flag = 1 , firstname = '$fname' ,middlename = '$mname', lastname = '$lname', DOB = '$d_o_b' , mobile = '$mobile' , image = '$imageData' WHERE U_id = '$usersid'") or die(mysql_error());
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('The profile is successfully saved');";
			echo "</script>";
			echo "<script>window.location = '../INCLUDES/Home.php';</script>";
			}
			else{
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Only image files are allowed');";
			echo "</script>";
			}
		    
		}
	}
	
	
	
	/*mysql_query("INSERT INTO pdetails (, )  )") or die(mysql_error());*/
	

?>

<body data-spy="scroll" data-target=".navbar navbar-fixed-top">
	<section id="Navigation">
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
                    		<li><a href="aboutus.php">About Us</font></a></li>
                  			<li><a href="Contactus.php">Contact Us</a></li>
                   			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>  
    							<ul class="dropdown-menu">
						    		<li><a href="#">Profile</a></li>
									<li><a href="#">Web development</a></li>
                            		<li class="divider"></li>
									<li><a href="#">Theme development</a></li>  
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
	</section>
    <section >
	 
    	<div class="panel panel-info" id="pic-sign">
			<div class="panel-heading"> Photo </div>
        	<div class="panel-body" id="pic">
            	<a href="" class="thumbnail">
                	<img src="../IMAGES/2.png" />             
			    </a>
            </div>
        </div>
		<form id="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
    	<div class="panel panel-info" id="general_det">
        	<div class="panel-heading">Personal Information</div>
            <div class="panel-body">
            	<table>
                	<tr>
                    	<td id="label">First Name</td>
                        <td id="colon">:</td>
                        <td><input type="text" name="fname" placeholder="Mandatory" value="" /></td>
                        <td id="label">Middle Name</td>
                        <td id="colon">:</td>
                        <td><input type="text" name="mname" value="" /></td>
                        <td id="label">Last Name</td>
                        <td id="colon">:</td>
                        <td><input type="text" name="lname" placeholder="Mandatory" value="" /></td>
                    </tr>
                    <tr>
                    	<td id="label">D.O.B : </td>
                        <td id="colon">:</td>
                        <td><input type="date" title="yyyy-mm-dd" name="d_o_b" placeholder="Mandatory" style="width:100%"/></td>
                        <td id="label">Mobile No : </td>
                        <td id="colon">:</td>
                        <td><input type="tel" name="mobile" value="" placeholder=" No prefix"/></td>
                    </tr>
					<tr>
                        <td id="label">Profile Photo</td>
                        <td id="colon">:</td>
					    <td colspan="3"><input type="file" name="image"></td>
					</tr>
                    <tr>
                        <td style="align:center"><input type="submit" class="btn btn-primary" name="profile_submit" value="Submit" style="align:center"/></td>
                    </tr>
                </table>
                
            </div>
        </div>
	</form>
        <div class="panel panel-info" id="contact_det" style="display:none">
        	<div class="panel-heading">Contact Info</div>
            <div class="panel-body">
            	<table>
                	<tr>
                    	<td id="label">Address (1) : </td>
                        <td colspan="6"><input type="text" name="add_p" value="" style="width:735px" /></td>
                    </tr>
                    <tr>
                        <td id="label">Address (2) : </td>
                        <td colspan="6"><input type="text" name"add_c" value=""  style="width:735px"/></td>
                    </tr>
                    <tr>
                        <td id="label">Mobile (1) : </td>
                        <td><input type="text" name="mobile_1" value="" /></td>
                       	<td id="label">Mobile (2) : </td>
                        <td><input type="text" name="mobile_2" value="" /></td>
                        <td id="label">Landline : </td>
                        <td><input type="text" name="landline" value="" /></td>
                    </tr>
                </table>
            </div>
        </div>
        
    </section>
    
    
</body>
</html>