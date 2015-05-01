<?php

    $form1 = isset($_POST["form1"])?$_POST["form1"]:"";
    $form2 = isset($_POST["form2"])?$_POST["form2"]:"";
    $form3 = isset($_POST["form2"])?$_POST["form3"]:"";
    $form4 = isset($_POST["form3"])?$_POST["form4"]:"";

    $form2_arr = array();
    $form_2 = split ("&", $form2);
    foreach ($form_2 as $input) {
        $input = split ("=", $input);
        $form2_arr[$input[0]]=$input[1];
    }

    $form3_arr = array();
    $form_3 = split ("&",$form3);
    foreach ($form_3 as $input) {
        $input = split ("=", $input);
        $form3_arr[$input[0]]=$input[1];
    }
/*
echo $form4;
$form4_arr = array();
$form_4 = split ("&",$form4);
foreach ($form_4 as $input) {
    $input = split ("=", $input);
    $form4_arr[$input[0]]=$input[1];
}

*/
/*
echo "\n";
echo $form4['g-recaptcha-response'];

*/
    //To store all the error strings
	$signup_error = "";

    if(empty($form2_arr['candidate_fname']) or (empty($form2_arr['candidate_fname']))){
        $signup_error.=" First name and last name , both are required. \n";
    }
    elseif(empty($form2_arr['candidate_mname'])) {
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['candidate_fname'])) {
            $signup_error.=" Invalid Firstname. Remove invalid characters. \n";
        }
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['candidate_lname'])) {
            $signup_error.=" Invalid Lastname. Remove invalid characters. \n";
        }
    }
    else{
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['candidate_fname'])) {
            $signup_error.=" Invalid Firstname. Remove invalid characters. \\n";
        }
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['candidate_mname'])) {
            $signup_error.=" Invalid Middlename. Remove invalid characters. \\n";
        }
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['candidate_lname'])) {
            $signup_error.=" Invalid Lastname. Remove invalid characters. \\n";
        }
    }

    if(empty($form2_arr['f_candidate'])) {
        $signup_error.=" Fathers name is required. ";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['f_candidate'])) {
            $signup_error.=" Invalid Fathers name. Remove invalid characters";
        }
    }

	if(empty($form2_arr['m_candidate'])) {
        $signup_error.=" Mothers name is required. \n";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['m_candidate'])) {
            $signup_error.=" Invalid Mothers name. Remove invalid characters \n";
        }
    }

	if(empty($form2_arr['nationality_candidate'])) {
        $signup_error.=" Nationality is required. \n";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['nationality_candidate'])) {
            $signup_error.=" Invalid Nationality. Remove invalid characters, only alphabets allowed. \n";
        }
    }

	if(empty($form2_arr['dob_candidate'])) {
        $signup_error.=" Date of Birth is required. \n";
    }
    else {
        if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $form2_arr['dob_candidate'])){
            $signup_error.=" Invalid Date format , Please fill as suggested in tool-tip. \n";
        }
    }
	if(empty($form2_arr['gender'])) {
        $signup_error.=" Gender is not selected. \n";
    }

    if(empty($form2_arr['c_address'])) {
        $signup_error.=" Correspondence address required to be filled \n";
    }
    else {
        if (!preg_match('/([a-zA-Z 0-9.!\n&-])+/', $form2_arr['c_address'])) {
            $signup_error.=" Invalid Correspondence address. Remove invalid characters \n";
        }
    }

	if(empty($form2_arr['c_city'])) {
        $signup_error.=" Correspondence city required to be filled \n";
    }
    else {
        if (!preg_match('/^[a-zA-Z \n]+$/', $form2_arr['c_city'])) {
					$signup_error.=" Invalid Correspondence City. Remove invalid characters \n";
        }
    }
			
    if(empty($form2_arr['c_state'])) {
        $signup_error.=" Correspondence state required to be filled \n";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['c_state'])) {
					$signup_error.=" Invalid Correspondence state. Remove invalid characters \n";
        }
    }
	
    if(empty($form2_arr['c_state'])) {
        $signup_error.=" Correspondence state required to be filled \n"; 
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['c_state'])) {
            $signup_error.=" Invalid Correspondence state. Remove invalid characters \n";
        }
    }
	
    if(empty($form2_arr['c_pin'])) {
        $signup_error.=" Correspondence pin code required to be filled \n";
    }
    else {
        if (!preg_match('/^\d{6}$/', $form2_arr['c_pin'])) {
            $signup_error.=" Invalid Correspondence pin code. Remove invalid characters \n";
        }
    }

	if(empty($form2_arr['c_landline'])) {}
    else {
        if (!preg_match('/^\d{8}$/', $form2_arr['c_landline'])) {
					$signup_error.=" Invalid Correspondence landline number. Remove invalid characters \n";
        }
    }
	
    if(empty($form2_arr['c_mobile'])){}
    else {
        if (!preg_match('/^\d{10}$/', $form2_arr['c_mobile'])) {
            $signup_error.=" Invalid Correspondence mobile number. Remove special characters \n";
		}
    }
			
    if(empty($form2_arr['p_address'])) {
        $signup_error.=" Permanent address required to be filled \n";
    }
    else {
        if (!preg_match('/([a-zA-Z 0-9.!\n&-])+/', $form2_arr['p_address'])) {
            $signup_error.=" Invalid Permanent address. Remove invalid characters \n";
        }
    }
	
    if(empty($form2_arr['p_city'])) {
        $signup_error.=" Permanent city required to be filled \n";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['p_city'])) {
            $signup_error.=" Invalid Permanent City. Remove invalid characters \n";
        }
    }
	
    if(empty($form2_arr['p_state'])) {
        $signup_error.=" Permanent state required to be filled \n";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['p_state'])) {
            $signup_error.=" Invalid Permanent state. Remove invalid characters \n";
        }
    }
	
    if(empty($form2_arr['p_state'])) {
        $signup_error.=" Permanent state required to be filled \n";
    } 
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $form2_arr['p_state'])) {
            $signup_error.=" Invalid Permanent state. Remove invalid characters ";
        }
    }
	
    if(empty($form2_arr['p_pin'])) {
        $signup_error.=" Permanent pin code required to be filled \n";
    }
    else {
        if (!preg_match('/^\d{6}$/', $form2_arr['p_pin'])) {
            $signup_error.=" Invalid Permanent pin code. Remove invalid characters \n";
        }
    }
	
    if(empty($form2_arr['p_landline'])){}
    else{
        if (!preg_match('/^\d{8}$/', $form2_arr['p_landline'])) {
            $signup_error.=" Invalid Permanent landline number. Remove invalid characters. \n";
		}
    }
	
    if(empty($form2_arr['p_mobile'])){}
    else{
        if (!preg_match('/^\d{10}$/', $form2_arr['p_mobile'])) {
            $signup_error.=" Invalid Permanent mobile number. Remove special characters \n";
        }
    }

    if (strcmp($signup_error,"")!='0') {
			echo $signup_error;
		}
		else {
            mysql_query("insert into pdetails (flag, uid, firstname, middlename, lastname, fathername, mothername, DOB, nationality, sex, c_addr, c_city, c_state, c_pin, c_phone, c_mobile, p_addr, p_city, p_state, p_pin, p_phone, p_mobile) values (1,
            '$form2[candidate_fname]', 
            '$form2[candidate_mname]',
            '$form2[candidate_lname]', 
            '$form2[f_candidate]',
            '$form2[m_candidate]', 
            '$form2[dob_candidate]', 
            '$form2[nationality_candidate]', 
            '$form2[gender]', 
            '$form2[c_address]', 
            '$form2[c_city]', 
            '$form2[c_state]', 
            '$form2[c_pin]', 
            '$form2[c_landline]', 
            '$form2[c_mobile]', 
            '$form2[p_address]', 
            '$form2[p_city]' , 
            '$form2[p_state]', 
            '$form2[p_pin]', 
            '$form2[p_landline]', 
            '$form2[p_mobile]'");
            echo "OK";
        }







/*echo var_dump($_POST);
echo $_POST["form2"];
echo $form2_arr['candidate_fname'];*/
?>