<?php
	function checkEmail ($mail) {
		if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/' , $mail)){
			list($name,$domain)=split('@',$mail);
			if(!checkdnsrr($domain,'MX')) {
				return false;
			}
			return true;
		}
        else {
            return false;
        }
	}


if(isset($_REQUEST['signupbtn'])) {

   $signup_error ="";

    if (empty($unames)) {
        $signup_error.="Username is required. \n";
	}
	else {
        if (!preg_match('/^[a-zA-Z][a-zA-Z0-9]+$/', $unames)) {
            $signup_error.="Invalid Username. Remove invalid characters. \n";
        }

        //Check if user already exists
    }
    if (empty($emails)) {
        $signup_error.="Email address is required. \n";
    }
    else {
        $emails = trim($emails);
        if(!checkEmail($emails)) {
            $signup_error.="Invalid email address! \n";
        }
    }
	if (strcmp($pswds,$pswds_c)=='0') {

	}
	else {
	   $signup_error.="Both the password fields do not match.";
    }
  if (strcmp($signup_error,"")!='0') {
		echo $signup_error;
	}
    else {
        $passs = $pswds;
        $pswds = md5($pswds);
        echo 'OK';
		mysql_query("INSERT INTO users(username, email, password) VALUES ('$unames','$emails','$pswds');") or die(mysql_error());


        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'madhavadityanaresh@gmail.com';            // SMTP username
        $mail->Password = 'naresh12121993';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
        $mail->From = 'madhavadityanaresh@gmail.com';
        $mail->FromName = '<Do Not Reply>EMS Mailer';
        $mail->addAddress($emails,$unames);     // Add a recipient
        $mail->WordWrap = 55;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Successful User creation';
        $mail->Body    = 'Welcome to the Employee Management System of <b>IIIT-Delhi</b> Your  user name is '.$unames.' and password is '.$passs.' Please dont share your password with anyone.';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        $_SESSION['username'] = $unames;
        $_SESSION['userright'] = 0;
        echo "<script>window.location = 'INCLUDES/profile.php';</script>";
    }
  }
?>
