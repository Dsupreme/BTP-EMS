<?php
session_start();
if($_SESSION['userright'] == 1){
include 'database.php';
mysql_query("UPDATE `leave` SET  backgroundColor = 'Green' WHERE l_id = ".$_GET["Edit"]) or die(mysql_error());
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Leave Approved');";
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
