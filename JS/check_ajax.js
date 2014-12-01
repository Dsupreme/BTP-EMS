// JavaScript Document
$(document).ready(function() {
	$("#usernamesignup").change(function() { 
		var username = $("#usernamesignup").val();
		var msgbox = $("#status");
		if(username.length > 3) {
			$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
			$.ajax({
				type: "POST",
				url: "INCLUDES/check_ajax.php",
				data: "username="+ username,  
    			success: function(msg) {
					var d=msg;
					var str=d.slice(-2);
					if(str == 'OK') { 
	   					$("#usernamesignup").removeClass("red");
						$("#usernamesignup").addClass("green");
						$("#status").html('<img src="yes.png" align="absmiddle"> <font color="Green"> Available </font>  ');
					}  
					else {  
						$("#usernamesignup").removeClass("green");
						$("#usernamesignup").addClass("red");
						$("#status").html(msg);
					}  
				} 
			}); 
		}
		else {
 			$("#usernamesignup").addClass("red");
			$("#status").html('<font color="#cc0000">Enter valid User Name</font>');
		}
		return false;
	});
	$("#admin_username_add").change(function() { 
		var username = $("#admin_username_add").val();
		var msgbox = $("#status");
		if(username.length > 3) {
			$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
			$.ajax({
				type: "POST",
				url: "check_ajax.php",
				data: "username="+ username,  
    			success: function(msg) {
					var d=msg;
					var str=d.slice(-2);
					if(str == 'OK') { 
	   					$("#admin_username_add").removeClass("red");
						$("#admin_username_add").addClass("green");
						$("#status").html('<img src="yes.png" align="absmiddle"> <font color="Green"> Available </font>  ');
					}  
					else {  
						$("#admin_username_add").removeClass("green");
						$("#admin_username_add").addClass("red");
						$("#status").html(msg);
					}  
				} 
			}); 
		}
		else {
 			$("#admin_username_add").addClass("red");
			$("#status").html('<font color="#cc0000">Enter valid User Name</font>');
		}
		return false;
	});
	
	});


