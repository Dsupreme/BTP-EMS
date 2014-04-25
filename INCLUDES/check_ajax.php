<?php
include('database.php');
if(isSet($_POST['username']))
{
$username = $_POST['username'];
$username = mysql_real_escape_string($username);
$flag=0;
$sql_check = mysql_query("SELECT U_id FROM users WHERE username = '$username';") or die(mysql_error());
while($row = mysql_fetch_array($sql_check)) {
$flag=1;
}
if($flag==1)
{
echo '<font color="#cc0000"><STRONG>'.$username.'</STRONG> is already in use.</font>';
}
else
{
echo 'OK';
}
}
?>