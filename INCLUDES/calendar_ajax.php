<?php
include('database.php');
session_start();
$uid = $_SESSION['userid'];
$count =0;
$sql_check = mysql_query("SELECT * FROM calendar WHERE id = '$uid';") or die(mysql_error());
  if(mysql_num_rows($sql_check))
  {
  echo "[";
   while($post = mysql_fetch_assoc($sql_check))
	{
	    echo json_encode($post);
		$count=$count+1;
		if($count != mysql_num_rows($sql_check)){
		    echo ",";
		}
	}
	echo "]";
	}
?>
