<?php
include('database.php');
session_start();
$uid = $_SESSION['userid'];
$count =0;
  echo "[";
$sql_check = mysql_query("SELECT * FROM calendar WHERE id = '$uid';") or die(mysql_error());
  if(mysql_num_rows($sql_check))
  {

   while($post = mysql_fetch_assoc($sql_check))
	{
	    $str  = $post["end"];
		$da = substr($str,0,10);
		$today = date("Y-m-d");
		if($da<$today){$post["backgroundColor"] = "gray";
	    }
		echo json_encode($post);
		$count=$count+1;
		if($count != mysql_num_rows($sql_check)){
		    echo ",";
		}
	}
	}
	echo "]";
	?>
