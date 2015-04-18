<?php
    session_start();

    include('../INCLUDES/database.php');

    $uname = $_POST['usrname'];
    $pswd =  $_POST['usrpswd'];

    $flag=0;    //To check if user has filled his profile or not.
    $epswd = md5($pswd);
    
    $detail = mysql_query("SELECT * from users WHERE username = '$uname' and password = '$epswd';") or die(mysql_error());
    while($rows = mysql_fetch_array($detail)){
        $_SESSION['username'] = $rows['username'];
        $_SESSION['userid'] = $rows['U_id'];
        $_SESSION['userright'] = $rows['rights'];
        $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
        $flagprof = $rows['flag'];
        
        $flag=1;
    }

    if($flag==1){
        if($flagprof == 1){
            if($_SESSION['userright'] == 2)
                echo 'INCLUDES/Home.php';
            elseif($_SESSION['userright'] == 1)
                echo 'INCLUDES/admin.php';
            else
                echo 'INCLUDES/Application.php';
        }
        else
            echo 'INCLUDES/profile.php';
    }
	else {
        echo "Invalid";
    }
?>