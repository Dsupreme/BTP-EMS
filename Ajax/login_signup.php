<?php
    include('../INCLUDES/database.php');
    
    //Functions
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
	
	
    
    $unames = $_POST['usrname'];
    $emails = $_POST['usremail'];
    $pswds = $_POST['usrpswd'];
    $pswds_c = $_POST['usrpswdc'];

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
        $pswds = md5($pswds);
        echo 'OK';
		mysql_query("INSERT INTO users(username, email, password) VALUES ('$unames','$emails','$pswds');") or die(mysql_error());
        /*$mail = new PHPMailer;   
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'jordan.billy93@gmail.com';            // SMTP username
        $mail->Password = 'ch3ckmat3';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
        $mail->From = 'jordan.billy93@gmail.com';
        $mail->FromName = 'EMS Mailer';
        $mail->addAddress($emails,$unames);     // Add a recipient
        $mail->WordWrap = 55;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Successful User creation';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();*/      
    }
?>