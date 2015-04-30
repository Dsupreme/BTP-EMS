
<?php
    include '../FUNCTIONS/mail_leaveapproved.php';

session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    session_destroy();
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Session Timed Out');";
    echo "</script>";
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
if($_SESSION['userright'] == 1){
    include 'database.php';
    mysql_query("UPDATE `leave` SET  backgroundColor = 'Green' WHERE l_id = ".$_GET["Edit"]) or die(mysql_error());
    
    $query=mysql_query("select id,start,end,description from `leave` where l_id = ".$_GET["Edit"]);
    $fetch=mysql_fetch_array($query);
    
    $query2 = mysql_query("select username,email from `users` where U_id=".$fetch[0]);
    $fetch1=mysql_fetch_array($query2);
    mail_leaveapproved($fetch1[1],$fetch1[0],$fetch[2],$fetch[3]);
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Leave Approved');";
    echo "window.location = '../INCLUDES/admin.php'";
    echo "</script>";
}
else {
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Login please!');";
    echo "window.location = '../index.php'";
    echo "</script>";
}
?>

