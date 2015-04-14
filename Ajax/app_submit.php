<?php
    session_start();

    include('../INCLUDES/database.php');

    $appsubmit_error = "";

    $candidate_fname = $_POST['ajax_c_fname'];
    $candidate_mname = $_POST['ajax_c_mname'];
    $candidate_lname = $_POST['ajax_c_lname'];
    $f_candidate     = $_POST['ajax_f_cand'];
    $m_candidate     = $_POST['ajax_m_cand'];
    $dob_candidate   = $_POST['ajax_dob_cand'];
    $nat_candidate   = $_POST['ajax_nat_cand'];
    $g_candidate     = $_POST['ajax_g_cand'];
    $c_addr          = $_POST['ajax_c_addr'];
    $c_city          = $_POST['ajax_c_city']; 
    $c_state         = $_POST['ajax_c_state'];
    $c_pin           = $_POST['ajax_c_pin'];
    $c_landline      = $_POST['ajax_c_landline']; 
    $c_mobile        = $_POST['ajax_c_mobile'];
    $p_addr          = $_POST['ajax_p_addr'];
    $p_city          = $_POST['ajax_p_city'];
    $p_state         = $_POST['ajax_p_state'];
    $p_pin           = $_POST['ajax_p_pin'];
    $p_landline      = $_POST['ajax_p_landline'];
    $p_mobile        = $_POST['ajax_p_mobile'];
    $c_deg           = $_POST['ajax_c_deg'];
    $c_spec          = $_POST['ajax_c_spec'];  
    $c_uni           = $_POST['ajax_c_uni'];
    $c_yr            = $_POST['ajax_c_yr'];
    $c_marks         = $_POST['ajax_c_marks'];
    $c_from          = $_POST['ajax_c_from'];
    $c_to            = $_POST['ajax_c_to'];
    $c_desg          = $_POST['ajax_c_desg'];
    $c_org           = $_POST['ajax_c_org'];
    $c_resp          = $_POST['ajax_c_resp'];
    $c_salary        = $_POST['ajax_c_salary'];


$c_degree,$c_specialization,$c_university,$c_year,$c_marks
    //First name, Middle Name, Last Name
    if(empty($candidate_fname) or (empty($candidate_lname))) {
        $appsubmit_error.=" First name and last name, both are required. \n";
    }
    elseif(empty($candidate_mname)) {
        if (!preg_match('/^[a-zA-Z ]+$/', $candidate_fname)) {
			$appsubmit_error.=" Invalid Firstname. Remove invalid characters. \n";
        }
        if (!preg_match('/^[a-zA-Z ]+$/', $candidate_lname)) {
			$appsubmit_error.=" Invalid Lastname. Remove invalid characters. \n";
        }
    }
    else{
        if (!preg_match('/^[a-zA-Z ]+$/', $candidate_fname)) {
			$appsubmit_error.=" Invalid Firstname. Remove invalid characters. \n";
		}
        if (!preg_match('/^[a-zA-Z ]+$/', $candidate_mname)) {
            $appsubmit_error.=" Invalid Middlename. Remove invalid characters. \n";
        }
		if (!preg_match('/^[a-zA-Z ]+$/', $candidate_lname)) {
			$appsubmit_error.=" Invalid Lastname. Remove invalid characters. \n";
        }
    }

    //Father's Name
    if(empty($f_candidate)) {
        $appsubmit_error.=" Fathers name is required. \n";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $f_candidate)) {
				$appsubmit_error.=" Invalid Fathers name. Remove invalid characters. \n";
        }
    }

	//Mother's Name
    if(empty($m_candidate)) {
        $appsubmit_error.=" Mothers name is required. \n";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $m_candidate)) {
			$appsubmit_error.=" Invalid Mothers name. Remove invalid characters. \n";
        }
    }

    //Nationality
    if(empty($nat_candidate)) {
        $appsubmit_error.=" Nationality is required. ";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $nat_candidate)) {
				$appsubmit_error.=" Invalid Nationality. Remove invalid characters, only alphabets allowed";
        }
    }
	
    //Date of Birth
    if(empty($dob_candidate)) {
        $appsubmit_error.=" Date of Birth is required.";
    }
    else {
        if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $dob_candidate)) {
            $appsubmit_error.=" Invalid Date format , Please fill as suggested in tool-tip";
        }
    }
	
    //Gender
    if(empty($g_candidate)) {
        $appsubmit_error.=" Gender is not selected. ";
    }

    //Correspondence Address
    if(empty($c_addr)) {
        $appsubmit_error.=" Correspondence address required to be filled ";
    }
    else {
        if (!preg_match('/([a-zA-Z 0-9.!\n&-])+/', $c_addrs)) {
					$appsubmit_error.=" Invalid Correspondence address. Remove invalid characters ";
        }
    }
    
    if(empty($c_city)) {
        $appsubmit_error.=" Correspondence city required to be filled ";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $c_city)) {
			$appsubmit_error.=" Invalid Correspondence City. Remove invalid characters ";
        }
    }

    if(empty($c_state)) {
        $appsubmit_error.=" Correspondence state required to be filled ";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $c_state)) {
			$appsubmit_error.=" Invalid Correspondence state. Remove invalid characters ";
        }
    }
    
    if(empty($c_state)) {
        $appsubmit_error.=" Correspondence state required to be filled ";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $c_state)) {
					$appsubmit_error.=" Invalid Correspondence state. Remove invalid characters ";
        }
    }

	if(empty($c_pin)) {
        $appsubmit_error.=" Correspondence pin code required to be filled ";
    }
    else {
        if (!preg_match('/^\d{6}$/', $c_pin)) {
            $appsubmit_error.=" Invalid Correspondence pin code. Remove invalid characters ";
        }
    }

    if(empty($c_landline)) {}
    else {
        if (!preg_match('/^\d{8}$/', $c_landline)) {
					$appsubmit_error.=" Invalid Correspondence landline number. Remove invalid characters ";
        }
    }
	
    if(empty($c_mobile)) {}
    else {
        if (!preg_match('/^\d{10}$/', $c_mobile)) {
			$appsubmit_error.=" Invalid Correspondence mobile number. Remove special characters ";
        }
    }

    //Permanent Address
    if(empty($p_address)) {
        $appsubmit_error.=" Permanent address required to be filled ";
    }
    else {
        if (!preg_match('/([a-zA-Z 0-9.!\n&-])+/', $p_address)) {
            $appsubmit_error.=" Invalid Permanent address. Remove invalid characters ";
        }
    }

    if(empty($p_city)) {
        $appsubmit_error.=" Permanent city required to be filled ";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $p_city)) {
            $appsubmit_error.=" Invalid Permanent City. Remove invalid characters ";
        }
    }

	if(empty($p_state)) {
        $appsubmit_error.=" Permanent state required to be filled ";
    }
    else {
        if (!preg_match('/^[a-zA-Z ]+$/', $p_state)) {
            $appsubmit_error.=" Invalid Permanent state. Remove invalid characters ";
        }
    }
    
	if(empty($p_pin)) {
        $appsubmit_error.=" Permanent pin code required to be filled ";
    }
    else {
        if (!preg_match('/^\d{6}$/', $p_pin)) {
            $appsubmit_error.=" Invalid Permanent pin code. Remove invalid characters ";
        }
    }

	if(empty($p_landline)) {}
    else {
        if (!preg_match('/^\d{8}$/', $p_landline)) {
			$appsubmit_error.=" Invalid Permanent landline number. Remove invalid characters ";
        }
    }
    
    if(empty($p_mobile)) {}
    else { 
        if (!preg_match('/^\d{10}$/', $p_mobile)) {
			$appsubmit_error.=" Invalid Permanent mobile number. Remove special characters ";
        }
    }

    //Number of degrees and past employment
    $countd  = 0; $counte = 0;
    foreach($c_degree as $h) { $countd=$countd+1;}
	foreach($c_salary as $i) { $counte=$counte+1;}

    //Check each value in education qualification array and past employeement arrays
    /*
    
    CODE HERE......
    */


    if (strcmp($signup_error,"")!='0') {
	//	echo "<script language='javascript' type='text/javascript'>";
	//	echo "alert('$signup_error');";
	//	echo "</script>";
        echo "invalid";
	}
    else {
        mysql_query("insert into pdetails (flag, firstname, middlename, lastname, fathername, mothername, DOB, nationality, sex, c_addr, c_city, c_state, c_pin, c_phone, c_mobile, p_addr, p_city, p_state, p_pin, p_phone, p_mobile) values (1,'$candidate_fname', '$candidate_mname','$candidate_lname', '$f_candidate','$m_candidate', '$dob_candidate', '$nat_candidate', '$g_candidate', '$c_addr', '$c_city', '$c_state', '$c_pin', '$c_landline', '$c_mobile', '$p_addr', '$p_city' , '$p_state', '$p_pin', '$p_landline', '$p_mobile')") or die(mysql_error());
        
        
        $result = mysql_query("SELECT * FROM pdetails WHERE flag=1;") ;
        
        //Getting the foreign key for the experience and degree table
        while($row = mysql_fetch_array($result)) { $apid = $row['app_ID'];}
        

        //Making a 2D array for all the qualification records
        $qual = array($c_deg,$c_spec,$c_uni,$c_year,$c_marks);
        for($v = 0 ; $v < $countd ; $v++) {
			$deg = $qual[0][$v];
			$spec = $qual[1][$v];
			$board = $qual[2][$v];
			$yo = $qual[3][$v];
			$mar = $qual[4][$v];
			mysql_query("insert into edu_qual (app_ID, degree, specialization, boarduniv, yoc, marks) values ('$apid','$deg','$spec','$board','$yo','$mar')") or die(mysql_error());
        }
        
        //Making a 2D array for all the experience records
        $expe = array($c_from,$c_to,$c_desg,$c_org,$c_resp,$c_salary);
        for($u = 0 ; $u < $counte ; $u++) {
            $from = $expe[0][$u];
            $to = $expe[1][$u];
            $desg = $expe[2][$u];
            $org = $expe[3][$u];
            $resp = $expe[4][$u];
            $salary = $expe[5][$u];
            mysql_query("insert into experience (app_ID, per_from, per_to, organization, designation,responsibility,salary) values ('$apid','$from','$to','$desg','$org','$resp','$salary')") or die(mysql_error());
        }
		
        mysql_query("UPDATE pdetails SET flag=0 WHERE flag = 1;");
        
        echo "Done";
        

    }
?>
<?php
/*

			//if(empty($c_year)){}else{if (!preg_match('/^\d{4}$/', $c_year)) {
			//		$signup_error.=" Invalid Permanent qualification completion year. Remove invalid characters ";
			//	}}


		}
	}
?>