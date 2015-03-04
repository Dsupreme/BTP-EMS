<?php
    function checkEmail ($mail) {
		if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/' , $mail)){
			list($name,$domain)=split('@',$mail);
			if(!checkdnsrr($domain,'MX')) {
				return false;
			}
			return true;
		}
        else {
            return false;
        }
	}
?>