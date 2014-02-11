<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Untitled Document</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/application.css" media="screen" />
    
     
</head>

<body  style="background-color:#09F">
<form method="post">


    



<section>
	<div class="container">
    	<div class="panel panel-default">
  			<div class="panel-heading">Peronal Details(as per matriculation certificate)</div>
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
				        </tr>
                        <tr>
                        	<td class="Label">Nationality </td>
                            <td id="colon">:</td>
                            <td ><input type="text" name="nationality_candidate" placeholder="Mandatory" /></td>
                            <td class="Label">Sex</td>
                            <td id="colon">:</td>
                            <td ><div class="btn-group"><button type="button" name="male_candidate" class="btn btn-default">Male</button></div>
                            <div class="btn-group"><button type="button" name="female_Candidate" class="btn btn-default">Female</button></div></td>
                            
                            
                            
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
                            <td ><input type="text" name="c_address" placeholder="Mandatory" /></td>
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
                        
                   		<th style="font-size:13px"> a) Permanent Address </th>
                    	<tr>
                    		<td class="Label" >Address </td>
                            <td id="colon">:</td>
                            <td ><input type="text" name="p_address" placeholder="Mandatory" /></td>
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
  			<div class="panel-heading">Complete Academic Record</div>
  				<div class="panel-body">
                	<table>
                </section>
            

</body>
</html>