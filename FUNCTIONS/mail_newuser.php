<?php
    	require '../Libraries/PHPMailer/PHPMailerAutoload.php';

function mail_newuser($e,$u,$p) {
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'madhavadityanaresh@gmail.com';     // SMTP username
        $mail->Password = 'naresh12121993';                   // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
        $mail->From = 'madhavadityanaresh@gmail.com';
        $mail->FromName = '<Do Not Reply>EMS Mailer';
        $mail->addAddress($e,$u);                             // Add a recipient
        $mail->WordWrap = 55;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Successful User creation';
        $mail->Body    = 'Welcome to the Employee Management System of <b>IIIT-Delhi</b> Your  user name is '.$u.' and password is '.$p.' Please dont share your password with anyone.';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
    }
?>