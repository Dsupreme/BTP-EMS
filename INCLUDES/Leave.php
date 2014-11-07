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
        <link rel="stylesheet" type="text/css" href="../CSS/leave.css" media="screen" />
        
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
                            <li><a href="Application.php"><font size="+1">APPLY NOW</font></a></li>        		
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
                <form id="form2" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="panel panel-default" id="leave_form">
                            <div class="panel-heading">Leave Application</div>
                            <div class="panel-body">
                                <table>
                                    <tr>
                                        <td class="Label" >First Name </td>
                                        <td id="colon"> : </td>
                                        <td ><input type="text" name="candidate_fname" contenteditable="false" value="" disabled/></td>
                                        
                                        <td class="Label" >Last Name </td>
                                        <td id="colon"> : </td>
                                        <td ><input type="text" name="candidate_lname" contenteditable="false" value="" disabled/></td>
                                    </tr>
                                    <tr>               
                                        <td class="Label" >Start Date</td>
                                        <td id="colon"> : </td>
                                        <td ><input type="date" style="width:100%"  title="yyyy-mm-dd" name="leave_start" placeholder="Mandatory" /></td>
                                        
                                        <td class="Label" >End Date</td>
                                        <td id="colon"> : </td>
                                        <td ><input type="date" style="width:100%"  title="yyyy-mm-dd" name="leave_end" placeholder="Mandatory" /></td>
                                    </tr>
                                    <tr>
                                        <td class="Label">Description</td>
                                        <td id="colon"> : </td>
                                        <td colspan="5"><textarea name="descrip" style="width:100%" placeholder="This is just for remembering why you took this leave. This isn't shared with anybody "></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" align="center"><input class="btn btn-primary" style="margin-top:2em" name="submitleave" type="submit" value="Submit" /></td>
                                    </tr>
                             </table>
                            </div>
                        </div>
                        <div class="panel panel-default" id="leave_ticker">
                            <div class="panel-heading">Leave Ticker</div>
                            <div class="panel-body">
                            </div>
                        </div>
			
                </form>
            </section> 
        </div>        
		<div class="container">

            <div class="panel panel-default" id="leave_history">
    		    <div class="panel-heading">Leave History</div>
                <div class="panel-body">
                    
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    	<div class="panel panel-default">
                        	<div class="panel-heading" role="tab" id="headingOne">
		                        <h4 class="panel-title">
		                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        			                    Collapsible Group Item #1
                    		        </a>
							    </h4>
						    </div>
    						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      							<div class="panel-body">
       								Description 1 
							    </div>
							</div>
						</div>
						<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						    <h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							        Collapsible Group Item #2
						        </a>
					    	</h4>
						</div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					    <div class="panel-body">
					        Description 2
      					</div>
    				</div>
  				</div>
  				<div class="panel panel-default">
    				<div class="panel-heading" role="tab" id="headingThree">
      					<h4 class="panel-title">
        					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          						Collapsible Group Item #3
        					</a>
      					</h4>
    				</div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Description 3
      </div>
    </div>
  </div>
</div>

<script>$('.collapse').collapse()</script>
                </div>
            </div> 
        </div>
	</body>
</html>