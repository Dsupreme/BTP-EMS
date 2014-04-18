<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
	
	////Peronal Details////
	if(isset($_POST['candidate_fname'])) {	$candidate_fname=$_POST['candidate_fname'];}	
	if(isset($_POST['candidate_mname'])) {	$candidate_mname=$_POST['candidate_mname'];}	
	if(isset($_POST['candidate_lname'])) {	$candidate_lname=$_POST['candidate_lname'];}	
	if(isset($_POST['f_candidate']))	{	$f_candidate=$_POST['f_candidate'];}	
	if(isset($_POST['m_candidate']))	{	$m_candidate=$_POST['m_candidate'];}	
	if(isset($_POST['dob_candidate'])) {	$dob_candidate=$_POST['dob_candidate'];}
	if(isset($_POST['nationality_candidate'])){ $nationality_candidate=$_POST['nationality_candidate'];}
	if(isset($_POST['sex'])) {	$gender = $_POST['sex'];}
	
	
	////Correspondence Address////	
	if(isset($_POST['c_address'])) {	$c_address=$_POST['c_address'];}
	if(isset($_POST['c_city']))	{ $c_city=$_POST['c_city'];}
	if(isset($_POST['c_state'])) { $c_state=$_POST['c_state'];}
	if(isset($_POST['c_pin'])) 	{ $c_pin=$_POST['c_pin'];}
	if(isset($_POST['c_landline'])) { $c_landline=$_POST['c_landline'];}
	if(isset($_POST['c_mobile'])) { $c_mobile=$_POST['c_mobile'];}
	
	////Permanent Address////
	if(isset($_POST['p_address'])) {$p_address=$_POST['p_address'];}
	if(isset($_POST['p_city']))	{$p_city=$_POST['p_city'];}
	if(isset($_POST['p_state'])) {$p_state=$_POST['p_state'];}
	if(isset($_POST['p_pin']))	{$p_pin=$_POST['p_pin'];}
	if(isset($_POST['p_landline']))	{$p_landline=$_POST['p_landline'];}
	if(isset($_POST['p_mobile']))	{$p_mobile=$_POST['p_mobile'];}
	
	/*if(isset($_POST[''])){}
	if(isset($_POST[''])){}
	if(isset($_POST[''])){}
	*/
	
	
	
	
	
?>
<body>
</body>
</html>