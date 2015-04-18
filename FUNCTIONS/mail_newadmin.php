<?php
    require '../Libraries/PHPMailer/PHPMailerAutoload.php';

    function mail_newadmin($e,$u,$p) {
        $mail = new PHPMailer;
        // Set mailer to use SMTP
		$mail->isSMTP();
        // Specify main and backup SMTP servers
        $mail->Host = 'smtp.gmail.com';						  
		// Enable SMTP authentication
        $mail->SMTPAuth = true;                               
        // SMTP username
		$mail->Username = 'madhavadityanaresh@gmail.com';       
        // SMTP password	
        $mail->Password = 'naresh12121993';                     
        // Enable encryption, 'ssl' also accepted
        $mail->SMTPSecure = 'tls';                            
		
        $mail->From = 'madhavadityanaresh@gmail.com';
		$mail->FromName = '<Do Not Reply>EMS Mailer';

        // Add a recipient
        $mail->addAddress($e,$u);  
        // Set word wrap to 50 characters
        $mail->WordWrap = 55;
        // Set email format to HTML
        $mail->isHTML(true);                                  
        $mail->Subject = 'Successful Admin creation';
        $mail->Body    = 'Welcome to the Employee Management System of <b>IIIT-Delhi</b> as an Admin. Your  user name is '.$u.' and password is '.$p.' Please dont share your password with anyone.';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		$mail->send();
    }
?>