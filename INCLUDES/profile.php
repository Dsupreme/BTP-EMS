<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


		<!--Fonts-->
   		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Revalia' rel='stylesheet' type='text/css'>
		

        
        <!-- CSS Links -->
		<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/MetroJs.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/animate-custom.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../CSS/profile.css" media="screen"  />
        
        <!--Javascript Links-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script><!--JQuery Online link -->
       	<script type="text/javascript" src="../JS/bootstrap.js"></script><!--Bootstrap Javascript-->
        
</head>

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
                			<li class="active"><a class="navbar-brand" href="index.php"><font size="+3"> Employee Management System</font></a></li>
                		</ul>
            		</div>
            		<div class="navbar-collapse collapse">
          				<ul class="nav navbar-nav navbar-right">
                    		<li><a href="#">About Us</font></a></li>
                  			<li><a href="INCLUDES/Contactus.php">Contact Us</a></li>
                   			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>  
    							<ul class="dropdown-menu">
						    		<li><a href="#">Profile</a></li>
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
	</section>
    <section >
    	<div class="panel panel-info" id="pic-sign">
			<div class="panel-heading"> Photo </div>
        	<div class="panel-body" id="pic"></div>
        </div>
    	<div class="panel panel-info" id="general_det">
        	<div class="panel-heading">Personal Information</div>
            <div class="panel-body">
            	<table>
                	<tr>
                    	<td id="label">First Name : </td>
                        <td><input type="text" name="fname" value="" /></td>
                        <td id="label">Middle Name : </td>
                        <td><input type="text" name"mname" value="" /></td>
                        <td id="label">Last Name : </td>
                        <td><input type="text" name="lname" value="" /></td>
                    </tr>
                    <tr>
                    	<td id="label">Father's Name : </td>
                        <td><input type="text" name="name_f" value="" /></td>
                        <td id="label">Mother's Name : </td>
                        <td><input type="text" name="name_m" value="" /></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-info" id="contact_det">
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