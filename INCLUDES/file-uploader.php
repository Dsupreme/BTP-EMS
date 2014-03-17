<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
		if ( ! isset($_FILES["c_photo"])) {
    		//die('VendorLogo is not set...');
		}
		else {
		$temp = explode(".", $_FILES["c_photo"]["name"]);
		$extension = end($temp);
		if ((($_FILES["c_photo"]["type"] == "image/gif") 
		|| ($_FILES["c_photo"]["type"] == "image/jpeg")
		|| ($_FILES["c_photo"]["type"] == "image/jpg")
		|| ($_FILES["c_photo"]["type"] == "image/pjpeg")
		|| ($_FILES["c_photo"]["type"] == "image/x-png")
		|| ($_FILES["c_photo"]["type"] == "image/png"))) {
		  if ($_FILES["c_photo"]["error"] > 0) {
			  echo '<script type="text/javascript">alert("' . $_FILES["c_photo"]["error"] . '<br>")</script>';
		  }					
		}
		else {
			//echo '<script type="text/javascript">';
			echo 'alert(" Invalid File")';
			//echo '</script>';
		}
		}
?>
<body>
</body>
</html>