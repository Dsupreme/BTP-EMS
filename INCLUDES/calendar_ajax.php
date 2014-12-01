<?php
include('database.php');
session_start();
$uid = $_SESSION['userid'];
 echo "[";
$sql_check = mysql_query("SELECT * FROM calendar WHERE id = '$uid';") or die(mysql_error());
	if(mysql_num_rows($sql_check))
	{
		$count =0;
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

$ql_leave = mysql_query("SELECT id,title,start,end,backgroundColor FROM `leave` WHERE id = '$uid';") or die(mysql_error());
if(mysql_num_rows($ql_leave))
  {
  $count=0;
    echo ",";
   while($post = mysql_fetch_assoc($ql_leave))
	{
	    $str  = $post["end"];
		$da = substr($str,0,10);
		$today = date("Y-m-d");
		if($da<$today){$post["backgroundColor"] = "gray";
	    }
		echo json_encode($post);
		$count=$count+1;
		if($count != mysql_num_rows($ql_leave)){
		    echo ",";
		}
	}
	}

	echo "]";
	?>
