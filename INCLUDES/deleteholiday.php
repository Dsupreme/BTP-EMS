<?php
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
mysql_query("DELETE FROM `holidays` WHERE holiday_id = ".$_GET["Del"]) or die(mysql_error());
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Holiday Deleted');";
echo "window.location = '../INCLUDES/admin.php'";
echo "</script>";
}
else{
  echo "<script language='javascript' type='text/javascript'>";
  echo "alert('Login please!');";
echo "window.location = '../index.php'";
echo "</script>";
}
?>
