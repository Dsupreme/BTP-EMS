<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contacts.php</title>
<link href="Contact.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../css/Bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>
</head>


<!-- PHP CODE -->

<?php 
	include 'database.php';
	
//////////Variable Declaration//////////

	if(isset($_REQUEST['branch_name'])) 	{ $branch_name=$_REQUEST['branch_name'];}
	if(isset($_REQUEST['branch_address']))  { $branch_address=$_REQUEST['branch_address'];}
	if(isset($_REQUEST['branch_location'])) { $branch_location=$_REQUEST['branch_location'];}
	if(isset($_REQUEST['branch_country']))	{ $branch_country=$_REQUEST['branch_country'];}	
	if(isset($_REQUEST['branch_phone_1']))	{ $branch_phone1=$_REQUEST['branch_phone_1'];}
	if(isset($_REQUEST['branch_phone_2']))	{ $branch_phone2=$_REQUEST['branch_phone_2'];}
	if(isset($_REQUEST['branch_fax']))		{ $branch_fax=$_REQUEST['branch_fax'];}
	if(isset($_REQUEST['branch_email_1']))	{ $branch_email1=$_REQUEST['branch_email_1'];}
	if(isset($_REQUEST['branch_email_2']))	{ $branch_email2=$_REQUEST['branch_email_2'];}
	
//////////Page Functionality/////////
	
	if(isset($_REQUEST['Edit']))
	{
		$select4edit=mysql_query("Select * from Contact where Id='$_REQUEST[Edit]'") or die(mysql_error());
		$fetchedit=mysql_fetch_array($select4edit);
	}
	if(isset($_REQUEST['submit_button']))
	{
		if($_REQUEST['hide']=='')
		{
			mysql_query("insert into contact (name, address, location, country, phone1, phone2, fax, email1, email2) values ('$branch_name', '$branch_address', '$branch_location', '$branch_country', '$branch_phone1', '$branch_phone2', '$branch_fax', '$branch_email1', '$branch_email2')") or die(mysql_error());
			header('location:Contact.php');	
		}
		else
		{
			mysql_query("update Contact set name='$branch_name', address='$branch_address', location='$branch_location', country='$branch_country', phone1='$branch_phone1', phone2='$branch_phone2', fax='$branch_fax', email1='$branch_email1', email2='$branch_email2' where Id='$_REQUEST[hide]'") or die(mysql_error());
			header('location:Contact.php');
		}
	}
	if(isset($_REQUEST['Del']))
	{
		mysql_query("delete from contact where id='$_REQUEST[Del]'") or die(mysql_error());
		header('location:Contact.php'); 
	}
/////////////    IMPLEMENTING GOOGLE MAPS API /////////	

	$attrib=mysql_query("Select * from contact") or die(mysql_error());
	$getdetails=mysql_fetch_array($attrib);

?>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
function initialize()
{
	var latval = '<?php echo $getdetails['lat'];?>';
	var longval = '<?php echo $getdetails['long'];?>';
var mapProp = {
  center:new google.maps.LatLng(latval,longval),
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>



<body>
<form method="post">
<table width="100%">
	<th style="font-size:36px"> Contact Details</th>
	<tr>
    	<td valign="middle" height="60%">
		<table width="40%" align="center" >
            <input type="hidden" name="hide" value="<?php if(isset($fetchedit)){echo $fetchedit[0];}?>">
    		<tr>
       	 		<td class="Label"  >Name :</td>
	            <td ><input type="text" name="branch_name" placeholder="Enter Name" value="<?php if(isset($fetchedit)){echo $fetchedit[1];}?>"/></td>
    	    </tr>
	        <tr>
	        	<td class="Label" >Address :</td>
    	        <td ><input type="text" name="branch_address" placeholder="Enter Address" value="<?php if(isset($fetchedit)){echo $fetchedit[2];}?>"/></td>
	        </tr>
    	    <tr>
	        	<td class="Label">City/State :</td>
    	        <td ><input type="text" name="branch_location" placeholder="Enter Location" value="<?php if(isset($fetchedit)){echo $fetchedit[3];}?>"/></td>
        	</tr>
       		<tr>
            	<td class="Label">Country :</td>
	            <td ><input type="text" name="branch_country"  placeholder="Enter Country" value="<?php if(isset($fetchedit)){echo $fetchedit[4];}?>"/></td>
    	    </tr>
	        <tr>
    	    	<td class="Label" >Phone Number(1) :</td>
        	    <td  ><input type="text" name="branch_phone_1" placeholder="Landline/Mobile" value="<?php if(isset($fetchedit)){echo $fetchedit[5];}?>"/></td>
	        </tr>
    	    <tr>
        		<td class="Label" >Phone Number(2) :</td>
	            <td  ><input type="text" name="branch_phone_2" placeholder="Optional" value="<?php if(isset($fetchedit)){echo $fetchedit[6];}?>"/></td>
	        </tr>
    	    <tr>
        		<td class="Label">Fax :</td>
            	<td ><input type="text" name="branch_fax" placeholder="Enter Fax" value="<?php if(isset($fetchedit)){echo $fetchedit[7];}?>"/></td>
	        </tr>
    	    <tr>
        		<td class="Label">Email(1) :</td>
	            <td ><input type="text" name="branch_email_1" placeholder="Enter Email Id" value="<?php if(isset($fetchedit)){echo $fetchedit[8];}?>"/></td>
    	    </tr>
        	<tr>
	        	<td class="Label">Email(2) :</td>
    	        <td ><input type="text" name="branch_email_2" placeholder="Optional" value="<?php if(isset($fetchedit)){echo $fetchedit[9];}?>"/></td>
	        </tr>
            </table>
            <br />
            <table width="10%" align="center">
	        <tr>
    	    	<td class="Button"><input type="submit" name="submit_button" value="Save"></td>
                <td class="Button"><input type="reset" name="clear_button" value="Clear" /></td>
                <td class="Button"><input type="submit" name="exit_button" value="Exit" /></td>
        	</tr>
	    </table>
        <br />
   		</td>
	</tr>
   	<tr>
	    <td>
        <table width="100%" height="40%"> 
        	<th colspan="10">CONTACT INFO</th>
        	<tr>
            	<td align="center">Name</td>
                <td align="center">Address</td>
                <td align="center">City/State</td>
                <td align="center">Country</td>
                <td align="center">Phone(1)</td>
                <td align="center">Phone(2)</td>
                <td align="center">Fax</td>
                <td align="center">Email(1)</td>
                <td align="center">Email(2)</td>  
                <td align="center">Action</td>           
            </tr>
<!--PHP CODE-->
<?php
	$table2values=mysql_query("Select * from contact") or die(mysql_error());
	while($fetch=(mysql_fetch_array($table2values)))
	{
?>
			<tr>
            	<td align="center"><?php echo $fetch[1]; ?></td>  
                <td align="center"><?php echo $fetch[2]; ?></td>
                <td align="center"><?php echo $fetch[3]; ?></td>
                <td align="center"><?php echo $fetch[4]; ?></td>
                <td align="center"><?php echo $fetch[5]; ?></td>
                <td align="center"><?php echo $fetch[6]; ?></td>
                <td align="center"><?php echo $fetch[7]; ?></td>
                <td align="center"><?php echo $fetch[8]; ?></td>
                <td align="center"><?php echo $fetch[9]; ?></td>
                <td align="center"><a href="Contact.php?Edit=<?php echo $fetch[0]; ?>"><img src="../Images/Icon_Edit.png" alt="Edit" /></a>
                				   <a href="Contact.php?Del=<?php echo $fetch[0]; ?>"><img src="../Images/Icon_Delete.png" alt="Delete" /></a>
                                   
            </tr>	
<?php 
	}
?>        
        </table>
    	</td>
    </table>
<div id="googleMap" style="width:500px;height:580px;"></div>

</body>
</html>
