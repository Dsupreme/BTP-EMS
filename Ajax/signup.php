<?php
    session_start();

    include('../INCLUDES/database.php');
    include '../FUNCTIONS/mail_newuser.php';
    include '../FUNCTIONS/checkmail.php';
	
    $uname = $_POST['usrname'];
    $email = $_POST['usremail'];
    $pswd =  $_POST['usrpswd'];
    $pswdc = $_POST['usrpswdc'];
    $signup_error ="";

    // Check username validity
    if (empty($uname)) {
        $signup_error.="Username is required. \n";
	}
	else {
        if (!preg_match('/^[a-zA-Z][a-zA-Z0-9]+$/', $uname)) {
            $signup_error.="Invalid Username. Remove invalid characters. \n";
        }
        $sql_check = mysql_query("SELECT U_id FROM users WHERE username = '$uname';") or die(mysql_error());
        if (mysql_num_rows($sql_check)) {
            $signup_error.="Invalid Username. Username already exists. \n";
        }
    }

    //Check email validity
    if (empty($email)) {
        $signup_error.="Email address is required. \n";
    }
    else {
        $email = trim($email);
        if(!checkEmail($email)) {
            //Calling function to check if email id passed is a valid email id or not.
            $signup_error.="Invalid email address! \n";
        }
    }

    //Check Password match validity
    if (strcmp($pswd,$pswdc)=='0') {
        //Can add Password strength meter here
    }
	else {
	   $signup_error.="Both the password fields do not match.";
    }

    if (strcmp($signup_error,"")!='0') {
		echo $signup_error;
	}
    else {
        $epswd = $pswd;
        $epswd = md5($epswd);   //Store encrypted password in the database.
        echo "OK";
		mysql_query("INSERT INTO users(username, email, password) VALUES ('$uname','$email','$epswd');") or die(mysql_error());

        //Sending a greeting's mail to new User.
        mail_newuser($email,$uname,$pswd);
        $_SESSION['username'] = $uname;
        $_SESSION['userright'] = 0;
    }
    /*
    
    



  
    
    
  }*/
?>
