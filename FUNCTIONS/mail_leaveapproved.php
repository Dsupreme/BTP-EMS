<?php
    require '../Libraries/PHPMailer/PHPMailerAutoload.php';

    function mail_leaveapproved($e,$u,$start,$end) {
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
        
        $mail->addAddress($e,$u);                             // Add a recipient
        $mail->WordWrap = 55;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Leave Approved';
        $mail->Body    = 'Congratulations, your leave has for the period '.$start.' to'.$end.', has been approved';
        $mail->AltBody = 'Congratulations, your leave has for the period '.$start.' to'.$end.', has been approved';
        $mail->send();
    }
?>