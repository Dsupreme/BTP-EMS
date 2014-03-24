<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


	<title>Application Form</title>
	<!-- CSS Links -->
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../CSS/application.css" media="screen" />
    
    
    <!--Javascript Links-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script><!--JQuery Online link -->
    <script type="text/javascript" src="../js/bootstrap.js"></script><!--Bootstrap Javascript -->
    <script type="text/javascript" src="../js/smoothscroll.js"></script><!--Smooth Scroll Animation -->
    <script type="text/javascript" src="../js/add-del-row.js"></script><!--Add Deleting New Rows -->
</head>



<?php 
	include 'variables.php';
	include 'file-uploader.php';
	require_once('../LIBRARIES/recaptchalib.php');
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

<form method="POST">
<section>
		<div class="container" style="top:80px;">
    		<div class="panel panel-default">
  				<div class="panel-heading">Personal Details(as per matriculation certificate)</div>
  				<div class="panel-body">
    				<table>
    					<input type="hidden" name="hide" value="<?php if(isset($fetchedit)){echo $fetchedit[0];}?>">
                        <tr>
                        	<td class="Label" >First Name </td>
                            <td id="colon">:</td>
                        	<td ><input type="text" name="candidate_fname" placeholder="Mandatory" /></td>
                        	<td class="Label" >Middle Name</td>
                            <td id="colon">:</td>
                        	<td ><input type="text" name="candidate_mname" /></td>
                        	<td class="Label" >Last Name </td>
                            <td id="colon">:</td>
                        	<td ><input type="text" name="candidate_lname" placeholder="Mandatory" /></td>
                        </tr>
                        <tr>
	        				<td class="Label" >Father's Name </td>
                            <td id="colon">:</td>
				    	    <td ><input type="text" name="f_candidate" placeholder="Mandatory" /></td>
					       	<td class="Label" >Mother's Name </td>
                            <td id="colon">:</td>
			    	        <td ><input type="text" name="m_candidate" placeholder="Mandatory" /></td>
				    	</tr>
                        <tr>
					       	<td class="Label">Date of Birth </td>
                            <td id="colon">:</td>
				    	    <td ><input type="date" name="dob_candidate" placeholder="Mandatory" /></td>
				      
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
				</div>
			</div>
        	<div class="panel panel-default">
  				<div class="panel-heading">Mailing Address</div>
  				<div class="panel-body">
                	<table>
                   		<th style="font-size:13px"> a) Correspondence Address </th>
                    	<tr>
                    		<td class="Label" >Address </td>
                            <td id="colon">:</td>
                            <td colspan="4" ><input type="text" name="c_address" placeholder="Mandatory" style="width:100%"/></td>
                        </tr>
                        <tr>
                        	<td class="Label" >City/District </td>
                            <td id="colon">:</td>
                            <td ><input type="text" name="c_city" placeholder="Mandatory" /></td>
                        	<td class="Label" >State </td>
                            <td id="colon">:</td>
                            <td ><input type="text" name="c_state" placeholder="Mandatory" /></td>
                            <td class="Label" >PIN Code</td>
                            <td id="colon">:</td>
                            <td ><input type="tel" name="c_pin" placeholder="Mandatory" /></td> 
                        </tr>
                        <tr>  
                            <td class="Label" >Phone(Landline)</td>
                            <td id="colon">:</td>
                            <td ><input type="tel" name="c_landline" placeholder="DON'T  ADD  011" /></td>
                            <td class="Label" >Phone(mobile)</td>
                            <td id="colon">:</td>
                            <td ><input type="tel" name="c_mobile" /></td>                                                     
                        </tr>
                        
                   		<th style="font-size:13px"> b) Permanent Address </th>
                    	<tr>
                    		<td class="Label" >Address </td>
                            <td id="colon">:</td>
                            <td colspan="4" ><input type="text" name="p_address" placeholder="Mandatory" style="width:100%" /></td>
                        </tr>
                        <tr>
                        	<td class="Label" >City/District </td>
                            <td id="colon">:</td>
                            <td ><input type="text" name="p_city" placeholder="Mandatory" /></td>
                        	<td class="Label" >State </td>
                            <td id="colon">:</td>
                            <td ><input type="text" name="p_state" placeholder="Mandatory" /></td>
                            <td class="Label" >PIN Code</td>
                            <td id="colon">:</td>
                            <td ><input type="tel" name="p_pin" placeholder="Mandatory" /></td>
                        </tr>
                        <tr>
                        	<td class="Label" >Phone(Landline)</td>
                            <td id="colon">:</td>
                            <td ><input type="tel" name="p_landline" placeholder="DON'T ADD 011" /></td>
                            <td class="Label" >Phone(mobile)</td>
                            <td id="colon">:</td>
                            <td ><input type="tel" name="p_mobile" /></td>
                        </tr>
              		</table>          
                	
    			</div>
        	</div>
        	<div class="panel panel-default">
  				<div class="panel-heading">Education Qualification</div>
  				<div class="panel-body">
                 		<p>
                        	<td><input type="button" value="Add Row" onclick="addrow('EQ_table')" /></td>
                            <td><input type="button" value="Delete Last Row" onclick="delrow('EQ_table')" /></td>
                        </p>
                	<table>
                    	<tr>
                        	<td width="20%">Degree</td>
                            <td width="25%">Specialization</td>
                            <td width="30%">Board/University</td>
                            <td width="15%">Year Of Completion</td>
                            <td width="10%">Marks in %</td>
                        </tr>
                    </table>
                    <table id="EQ_table">
                    	<tbody
                        <tr>
                        <p>
                        	<td width="20%"><input class="input-group-lg" type="text" name="c_degree[]" style="width:90%"/></td>
                            <td width="25%"><input class="input-group-lg" type="text" name="c_specialization[]" style="width:90%" /></td>
							<td width="30%"><input class="input-group-lg" type="text" name="c_university[]" style="width:90%" /></td>
                            <td width="15%"><input class="input-group-lg" type="number" name="c_year[]" min="1990" max="2015" /></td>
                            <td width="10%"><input class="input-group-lg" type="number" name="c_marks[]" min="1" max="100" /></td>
                         </p>
                        </tr>
                     </table>
        	    </div>
        	</div>
            <div class="panel panel-default">
            	<div class="panel-heading">Previous Employment Experience</div>
                <div class="panel-body">
                	<p>
                    	<td><input type="button" name="b1"  value="Add Row" onclick="addrow('PEE_table')" /></td>
                    	<td><input type="button" value="Delete Last Row" onclick="delrow('PEE_table')" /></td>
                    </p>
                	<table width="100">
                    	<tr>
                        	<td width=20%> Period From - To</td>
                            <td width="25%"> Organisation</td>
                            <td width="20%"> Designation</td>
                            <td width="25%"> Nature of Responsibility</td>
                            <td width="10%"> Salary p.m</td>
                         </tr>
                     </table>
                     <table id="PEE_table">
                     <tbody>
                         <tr>
                         <p>
                         	<td width="10%"><input class="input-group-lg" type="datetime" name="c_from[]" style="width:90%" /></td>
                            <td width="10%"><input class="input-group-lg" type="datetime" name="c_to[]" style="width:90%" /></td>
                            <td width="25%"><input class="input-group-lg" type="text" name="c_desg[]" style="width:90%" />
                            <td width="20%"><input class="input-group-lg" type="text" name="c_org[]" style="width:90%" /></td>
                            <td width="25%"><input class="input-group-lg" type="text" name="c_resp[]" style="width:90%" /></td>
                            <td width="10%"><input class="input-group-lg" type="number" name="c_salary[]" style="width:90%" /></td>
                         <!--ADD AJAX CODED ROWS-->
                         </tr>
                    </table>
               </div>
           </div>
           <div class="panel panel-default">
            	<div class="panel-heading">Upload Photos & Signatures</div>
                <div class="panel-body">
                	<form method="post" action="file-uploader.php" enctype="multipart/form-data">
                    	<table>
                        	<tr>
                        		<td width="15%">Upload Photo: </td>
                            	<td width="10%"><input type="file" name="c_photo" ></td>
                                <td width="80%"></td>
                            </tr>
                            <tr>
                            	<td width="15%">Upload Signature: </td>
                                <td width="10%"><input type="file" name="c_signature" /></td>
                                <td width="80%"></td>
                            </tr>
                            <tr>
                            	<td width="15%"></td>
                                <td width="10%"></td>
                            	<td width="80%"id="rules_upload">* Note: </font></td>
                            </tr>
                            <tr>
                            	<td width="15%"></td>
                                <td width="10%"></td>
                                <td width="80%" id="rules_upload">1. If the Upload Photo / Signature is not loaded in appropriate place, your application is liable to get rejected</td>
                            </tr>
                            <tr>
                            	<td width="15%"></td>
                                <td width="10%"></td>
                                <td width="80%" id="rules_upload">2. Allowed Photo / Signature Size - 20KB to 100 KB File Type : *.jpeg, *.gif, *.jpg,  *.png</td>
                            </tr>
                        </table>
                    </form>

               </div>
           </div>
           <div class="panel panel-default">
           <div class="panel-body">
           		<div class="panel-heading">Declaration : <font size="+1" >I hereby declare that :- </font> </div>
                <table>
                <tr>
                	<td width="5%">(1)</td>
                    <td width="95%" colspan="2"><p align="justify">
                	All statements made in this application form are true, complete and correct to the best of my knowledge and belief. In the event of any information being found false <br />
                    or incorrect, or ineligibility being detected before or after the interview/appointment/selection, my candidature may be cancelled and action can be taken against me.
                    </p></td>
                </tr>
                <tr>
                	<td width="5%">(2)</td>
                    <td width="95%" colspan="2"><p align="justify">
                     I have read the provisions/instructions in advertisement of the Commission carefully and I hereby undertake to abide by them. I fulfill all the conditions of eligiblity<br />
 regarding age limits, educational qualifications etc, prescribed in the advertisement and other relevant rules and instructions.
                     </p></td>
                </tr>
				
                <tr>
					<td></td>
                    <td>
                    	<div>
                        <form method="POST" action="recaptcha-verify.php">
						<?php
							
							$publickey = "6LdLKvASAAAAAH8kNO-2m5zbkvJNviMjhPP_1Whn"; // From the signup page for recaptacha Library
							echo recaptcha_get_html($publickey);
						?>
                        </form>
                        </div>
                    </td>

                	<td colspan="2">
                    <!--	<img id="submit_button" style="margin:10px; height:30px; width:80px;" src="./images/submit.png" alt="submit button" align="left">
                    -->
					<input type="image" name="btn_opentextbox" style="margin:10px; height:30px; width:80px;" src="../IMAGES/submit.png" value="Submit" />
					</td>
                </tr>	
                            


</section>
    </form>        

</body>
</html>