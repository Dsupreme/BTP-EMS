<?php
if(isset($_POST['loginbtn'])){
        $flag=0;
        $pswdl = md5($pswdl);
        $ldetail = mysql_query("SELECT * from users WHERE username = '$unamel' and password = '$pswdl';") or die(mysql_error());
        while($rows = mysql_fetch_array($ldetail)){
            $_SESSION['username'] = $rows['username'];
            $_SESSION['userid'] = $rows['U_id'];
            $_SESSION['userright'] = $rows['rights'];
            $flagprof = $rows['flag'];
            $flag=1;
        }
	    if($flag==1){
            if($flagprof == 1){
                if($_SESSION['userright'] == 2)
                    echo "<script>window.location = 'INCLUDES/Home.php';</script>";
                elseif($_SESSION['userright'] == 1)
                    echo "<script>window.location = 'INCLUDES/admin.php';</script>";
                else
                    echo "<script>window.location = 'INCLUDES/Application.php';</script>";
            }
            else
                echo "<script>window.location = 'INCLUDES/profile.php';</script>";
	    }
	    else {
            echo "<script language='javascript' type='text/javascript'>"."alert('Invalid Username or Password. Kindly Enter again');"."</script>";
            echo "<script>window.location = '../BTP-EMS';</script>";
        }
    }
?>