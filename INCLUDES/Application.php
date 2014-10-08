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
    <script type="text/javascript" src="../js/progress.js"></script><!-- Progress of Completion -->
</head>



<?php 
	session_start();
	include 'Variables.php';
	include 'file-uploader.php';
	include 'database.php';
	require_once('../LIBRARIES/recaptchalib.php');
?>

	
<?php
	if(isset($_POST['submitbtn'])) { 
		$signup_error = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($candidate_fname)and(empty($candidate_lname))){
				$signup_error.=" First name and last name , both are required. ";
			}
			else {
				if (!preg_match('/^[a-zA-Z]+$/', $candidate_fname)) {
					$signup_error.=" Invalid Firstname. Remove invalid characters ";
				}
				else if (!preg_match('/^[a-zA-Z]+$/', $candidate_lname)) {
					$signup_error.=" Invalid Lastname. Remove invalid characters";
				}
			}
			if(empty($f_candidate)){$signup_error.=" Fathers name is required. ";}else{if (!preg_match('/^[a-zA-Z]+$/', $f_candidate)) {
					$signup_error.=" Invalid Fathers name. Remove invalid characters";
				}}
			if(empty($m_candidate)){$signup_error.=" Mothers name is required. ";}else{if (!preg_match('/^[a-zA-Z]+$/', $m_candidate)) {
					$signup_error.=" Invalid Mothers name. Remove invalid characters";
				}}
			if(empty($nationality_candidate)){$signup_error.=" Nationality is required. ";}else{if (!preg_match('/^[a-zA-Z]+$/', $nationality_candidate)) {
					$signup_error.=" Invalid Nationality. Remove invalid characters, only alphabets allowed";
				}}
			if(empty($dob_candidate)){$signup_error.=" Date of Birth is required. ";}else{if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $dob_candidate)){ 
					$signup_error.=" Invalid Date format , Please fill as suggested in tool-tip";					
				}}
			if(empty($gender)){$signup_error.=" Gender is not selected. ";}
			
			if(empty($c_address)){$signup_error.=" Correspondence address required to be filled ";}else{/*if (!preg_match('/^[a-zA-Z]+$/', $c_address)) {
					$signup_error.=" Invalid Correspondence address. Remove invalid characters ";
				}*/}
			if(empty($c_city)){$signup_error.=" Correspondence city required to be filled ";}else{if (!preg_match('/^[a-zA-Z]+$/', $c_city)) {
					$signup_error.=" Invalid Correspondence City. Remove invalid characters ";
				}}
			if(empty($c_state)){$signup_error.=" Correspondence state required to be filled ";}else{if (!preg_match('/^[a-zA-Z]+$/', $c_state)) {
					$signup_error.=" Invalid Correspondence state. Remove invalid characters ";
				}}
			if(empty($c_state)){$signup_error.=" Correspondence state required to be filled ";}else{if (!preg_match('/^[a-zA-Z]+$/', $c_state)) {
					$signup_error.=" Invalid Correspondence state. Remove invalid characters ";
				}}
			if(empty($c_pin)){$signup_error.=" Correspondence pin code required to be filled ";}else{if (!preg_match('/^\d{6}$/', $c_pin)) {
					$signup_error.=" Invalid Correspondence pin code. Remove invalid characters ";
				}}
			if(empty($c_landline)){}else{if (!preg_match('/^\d{8}$/', $c_landline)) {
					$signup_error.=" Invalid Correspondence landline number. Remove invalid characters ";
				}}
			if(empty($c_mobile)){}else{if (!preg_match('/^\d{10}$/', $c_mobile)) {
					$signup_error.=" Invalid Correspondence mobile number. Remove special characters ";
				}}
			if(empty($p_address)){$signup_error.=" Permanent address required to be filled ";}else{/*if (!preg_match('/^[a-zA-Z]+$/', $p_address)) {
					$signup_error.=" Invalid Permanent address. Remove invalid characters ";
				}*/}
			if(empty($p_city)){$signup_error.=" Permanent city required to be filled ";}else{if (!preg_match('/^[a-zA-Z]+$/', $p_city)) {
					$signup_error.=" Invalid Permanent City. Remove invalid characters ";
				}}
			if(empty($p_state)){$signup_error.=" Permanent state required to be filled ";}else{if (!preg_match('/^[a-zA-Z]+$/', $p_state)) {
					$signup_error.=" Invalid Permanent state. Remove invalid characters ";
				}}
			if(empty($p_state)){$signup_error.=" Permanent state required to be filled ";}else{if (!preg_match('/^[a-zA-Z]+$/', $p_state)) {
					$signup_error.=" Invalid Permanent state. Remove invalid characters ";
				}}
			if(empty($p_pin)){$signup_error.=" Permanent pin code required to be filled ";}else{if (!preg_match('/^\d{6}$/', $p_pin)) {
					$signup_error.=" Invalid Permanent pin code. Remove invalid characters ";
				}}
			if(empty($p_landline)){}else{if (!preg_match('/^\d{8}$/', $p_landline)) {
					$signup_error.=" Invalid Permanent landline number. Remove invalid characters ";
				}}
			if(empty($p_mobile)){}else{if (!preg_match('/^\d{10}$/', $p_mobile)) {
					$signup_error.=" Invalid Permanent mobile number. Remove special characters ";
				}}
			if(empty($c_year)){}else{if (!preg_match('/^\d{4}$/', $c_year)) {
					$signup_error.=" Invalid Permanent qualification completion year. Remove invalid characters ";
				}}
			
			
		}
		
		
		
		

		
		
		if (strcmp($signup_error,"")!='0') {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('$signup_error');";
			echo "</script>";
		}
		else{
			mysql_query("insert into pdetails (flag, firstname, middlename, lastname, fathername, mothername, DOB, nationality, sex, c_addr, c_city, c_state, c_pin, c_phone, c_mobile, p_addr, p_city, p_state, p_pin, p_phone, p_mobile) values (1,'$candidate_fname', '$candidate_mname','$candidate_lname', '$f_candidate','$m_candidate', '$dob_candidate', '$nationality_candidate', '$gender', '$c_address', '$c_city', '$c_state', '$c_pin', '$c_landline', '$c_mobile', '$p_address', '$p_city' , '$p_state', '$p_pin', '$p_landline', '$p_mobile')
						") or die(mysql_error());
			$result = mysql_query("SELECT * FROM pdetails WHERE flag=1;") ;
			while($row = mysql_fetch_array($result)) { $apid = $row['app_ID'];}
			$countd  = 0;
			foreach($c_degree as $h) { $countd=$countd+1;}
			$counte = 0;
			foreach($c_salary as $i)
			{
			$counte=$counte+1;
			}
			
			$expe = array($c_from,$c_to,$c_desg,$c_org,$c_resp,$c_salary);	
			for($u = 0 ; $u < $counte ; $u++){
			$from = $expe[0][$u];
			$to = $expe[1][$u];
			$desg = $expe[2][$u];
			$org = $expe[3][$u];
			$resp = $expe[4][$u];
			$salary = $expe[5][$u];
			mysql_query("insert into experience (app_ID, per_from, per_to, organization, designation,responsibility,salary) values ('$apid','$from','$to','$desg','$org','$resp','$salary');
						") or die(mysql_error());	
			}
			$qual = array($c_degree,$c_specialization,$c_university,$c_year,$c_marks);
			for($v = 0 ; $v < $countd ; $v++){
			$deg = $qual[0][$v];
			$spec = $qual[1][$v];
			$board = $qual[2][$v];
			$yo = $qual[3][$v];
			$mar = $qual[4][$v];
			mysql_query("insert into edu_qual (app_ID, degree, specialization, boarduniv, yoc, marks) values ('$apid','$deg','$spec','$board','$yo','$mar');
						") or die(mysql_error());
			}
			mysql_query("UPDATE pdetails SET flag=0 WHERE flag = 1;");
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('The data is successfully entered in the database');";
			echo "</script>";
		}
	}
	
	
	
	/*mysql_query("INSERT INTO pdetails (, )  )") or die(mysql_error());*/
	

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
                    		<li><a href="aboutus.php">About Us</a></li>
                    		<li><a href="Home.php">Home</a></li>
                    		<li><a href="Contactus.php">Contact Us</a></li>
                   			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>  
    							<ul class="dropdown-menu">
						    		<li><a href="profile.php">Profile</a></li>
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
	<section>
	<section>
		<div class="common">
			<progress id="progress-bar" min="1" max="100" value="0"></progress>
			<span class="all_span first border-change "><div class="prog-text">1/4</div></span>
			<span class="all_span second"><div class="prog-text">2/4</div></span>
    		<span class="all_span third"><div class="prog-text">3/4</div></span>
    		<span class="all_span fourth"><div class="prog-text">4/4</div></span>
    	</div>
			
			<form id="form1" >
			</form>
			<form id="form2" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="container" style="top:80px;">
		    		<div class="panel panel-default">
		  				<div class="panel-heading">Personal Details(as per matriculation certificate)</div>
		  				<div class="panel-body">
		    				<table>
		    					<input type="hidden" name="hide" value="<?php if(isset($fetchedit)){echo $fetchedit[0];}?>">
		                        <tr>
		                        	<td class="Label" >First Name </td>
		                            <td id="colon">:</td>
		                        	<td ><input type="text" name="candidate_fname" placeholder="Mandatory"/></td>
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
						    	    <td ><input type="date" title="yyyy-mm-dd" name="dob_candidate" placeholder="Mandatory" /></td>
						      
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
		                        <tr>
			                        <p>
			                         	<td width="10%"><input class="input-group-lg" type="datetime" name="c_from[]" style="width:90%" /></td>
			                            <td width="10%"><input class="input-group-lg" type="datetime" name="c_to[]" style="width:90%" /></td>
			                            <td width="25%"><input class="input-group-lg" type="text" name="c_desg[]" style="width:90%" />
			                            <td width="20%"><input class="input-group-lg" type="text" name="c_org[]" style="width:90%" /></td>
			                            <td width="25%"><input class="input-group-lg" type="text" name="c_resp[]" style="width:90%" /></td>
			                            <td width="10%"><input class="input-group-lg" type="number" name="c_salary[]" style="width:90%" /></td>
			                        <!--ADD AJAX CODED ROWS-->
			                     	</p>
		                        </tr>
		                    </table>
		               </div>
		           </div>
		           <form method="post" action="file-uploader.php" enctype="multipart/form-data">
			           <div class="panel panel-default">
			            	<div class="panel-heading">Upload Photos & Signatures</div>
			                <div class="panel-body">
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
			                </div>
			            </div>
		            </form>
		            <div class="panel panel-default">
		            	<div class="panel-body">
		           		<div class="panel-heading">Declaration : <font size="+1" >I hereby declare that :- </font> </div>
			                <table>
				                <tr>
				                	<td width="5%">(1)</td>
				                    <td width="95%" colspan="2">
				                    	<p align="justify">
						                	All statements made in this application form are true, complete and correct to the best of my knowledge and belief. In the event of any information being found false <br />
						                    or incorrect, or ineligibility being detected before or after the interview/appointment/selection, my candidature may be cancelled and action can be taken against me.
				                    	</p>
				                	</td>
				                </tr>
				                <tr>
				                	<td width="5%">(2)</td>
				                    <td width="95%" colspan="2">
				                    	<p align="justify">
				 		                    I have read the provisions/instructions in advertisement of the Commission carefully and I hereby undertake to abide by them. I fulfill all the conditions of eligiblity<br />
				 							regarding age limits, educational qualifications etc, prescribed in the advertisement and other relevant rules and instructions.
				                     	</p>
				                 	</td>
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
									<input class="btn btn-primary" name="submitbtn" type="submit" value="Submit" />
									</td>
				                </tr>
			           		</table>
		            	</div>
		    	    </div>
		        </div>
    		</form>
    		<form id="form3" >
    		</form>
    		
			
	</section>        
	</section>
</body>
</html>