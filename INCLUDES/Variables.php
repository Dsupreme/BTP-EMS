<?php 
	
	//Peronal Details
	if(isset($_POST['candidate_fname'])) {	$candidate_fname=$_POST['candidate_fname'];}	
	if(isset($_POST['candidate_mname'])) {	$candidate_mname=$_POST['candidate_mname'];}	
	if(isset($_POST['candidate_lname'])) {	$candidate_lname=$_POST['candidate_lname'];}	
	if(isset($_POST['f_candidate']))	{	$f_candidate=$_POST['f_candidate'];}	
	if(isset($_POST['m_candidate']))	{	$m_candidate=$_POST['m_candidate'];}	
	if(isset($_POST['dob_candidate'])) {	$dob_candidate=$_POST['dob_candidate'];}
	if(isset($_POST['nationality_candidate'])){ $nationality_candidate=$_POST['nationality_candidate'];}
	if(isset($_POST['sex'])) {	$gender = $_POST['sex'];}
	
	
	//Correspondence Address
	if(isset($_POST['c_address'])) {	$c_address=$_POST['c_address'];}
	if(isset($_POST['c_city']))	{ $c_city=$_POST['c_city'];}
	if(isset($_POST['c_state'])) { $c_state=$_POST['c_state'];}
	if(isset($_POST['c_pin'])) 	{ $c_pin=$_POST['c_pin'];}
	if(isset($_POST['c_landline'])) { $c_landline=$_POST['c_landline'];}
	if(isset($_POST['c_mobile'])) { $c_mobile=$_POST['c_mobile'];}
	
	//Permanent Address
	if(isset($_POST['p_address'])) {$p_address=$_POST['p_address'];}
	if(isset($_POST['p_city']))	{$p_city=$_POST['p_city'];}
	if(isset($_POST['p_state'])) {$p_state=$_POST['p_state'];}
	if(isset($_POST['p_pin']))	{$p_pin=$_POST['p_pin'];}
	if(isset($_POST['p_landline']))	{$p_landline=$_POST['p_landline'];}
	if(isset($_POST['p_mobile']))	{$p_mobile=$_POST['p_mobile'];}
	
	//qualification
	
	if(isset($_POST['c_degree'])) { $c_degree=$_POST['c_degree'];}
	if(isset($_POST['c_specialization'])) { $c_specialization=$_POST['c_specialization'];}
	if(isset($_POST['c_university'])) { $c_university=$_POST['c_university'];}
	if(isset($_POST['c_year'])) { $c_year=$_POST['c_year'];}
	if(isset($_POST['c_marks'])) { $c_marks=$_POST['c_marks'];}
	
	//experience
	
	if(isset($_POST['c_from'])) { $c_from=$_POST['c_from'];}
	if(isset($_POST['c_to'])) { $c_to=$_POST['c_to'];}
	if(isset($_POST['c_desg'])) { $c_desg=$_POST['c_desg'];}
	if(isset($_POST['c_org'])) { $c_org=$_POST['c_org'];}
	if(isset($_POST['c_resp'])) { $c_resp=$_POST['c_resp'];}
	if(isset($_POST['c_salary'])) { $c_salary=$_POST['c_salary'];}
	
	//signup
	if(isset($_POST['usernamesignup'])){$unames=$_POST['usernamesignup'];}
	if(isset($_POST['passwordsignup'])){$pswds=$_POST['passwordsignup'];}
	if(isset($_POST['emailsignup'])){$emails=$_POST['emailsignup'];}
	if(isset($_POST['passwordsignup_confirm'])) { $pswds_c = $_POST['passwordsignup_confirm'];}
	
	
	//login
	if(isset($_POST['username'])){$unamel=$_POST['username'];}
	if(isset($_POST['password'])){$pswdl=$_POST['password'];}

	//profile
	if(isset($_POST['fname'])) { $fname=$_POST['fname'];}
	if(isset($_POST['mname'])) { $mname=$_POST['mname'];}
	if(isset($_POST['lname'])) { $lname=$_POST['lname'];}
	if(isset($_POST['d_o_b'])) { $d_o_b=$_POST['d_o_b'];}
	if(isset($_POST['mobile'])) { $mobile=$_POST['mobile'];}
	//if(isset($_POST['image'])) { $image=$_POST['image'];}
	
    //calendar_modal
    if(isset($_POST['event_title'])){$event_title=$_POST['event_title'];}
    if(isset($_POST['event_url'])){$event_url=$_POST['event_url'];}
    if(isset($_POST['event_start_d'])){$event_start_d=$_POST['event_start_d'];}
    if(isset($_POST['event_start_t'])){$event_start_t=$_POST['event_start_t'];}
    if(isset($_POST['event_end_d'])){$event_end_d=$_POST['event_end_d'];}
    if(isset($_POST['event_end_t'])){$event_end_t=$_POST['event_end_t'];}

    //Leave
    if(isset($_POST['leave_start'])) {$leave_start=$_POST['leave_start'];}
    if(isset($_POST['leave_end'])) {$leave_end=$_POST['leave_end'];}
	if(isset($_POST['descrip'])) {$leave_description = $_POST['descrip'];}
    if(isset($_POST['leave_type'])){$leave_type=$_POST['leave_type'];}

	//Application Post
    if(isset($_POST['app_post_title'])) {$app_post_title=$_POST['app_post_title'];}

    //Admin_Add_User
    if(isset($_POST['admin_username_add'])){$_admin_username_add=$_POST['admin_username_add'];}
    if(isset($_POST['admin_email_add'])){$admin_email_add=$_POST['admin_email_add'];}
    if(isset($_POST['admin_password_add'])){$admin_password_add=$_POST['admin_password_add'];}
    if(isset($_POST['admin_password_confirm'])){$admin_password_confirm=$_POST['admin_password_confirm'];}
	/*
	if(isset($_POST[''])){}
	if(isset($_POST[''])){}	
	if(isset($_POST[''])){}
	if(isset($_POST[''])){}
	if(isset($_POST[''])){}
*/
	
	
	//Functions
	function checkEmail ($mail) {
		if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/' , $mail)){
			list($name,$domain)=split('@',$mail);
			if(!checkdnsrr($domain,'MX')) {
				return false;
			}
			return true;
		}
	}
	
	
?>
