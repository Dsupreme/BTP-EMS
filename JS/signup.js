function signup() {
    var uname = $('#usernamesignup').val();
    var email = $('#emailsignup').val();
    var pswd = $('#passwordsignup').val();
    var pswdc = $('#passwordsignup_confirm').val();
    $.ajax({
        type: "POST",
        url: "Ajax/login_signup.php",
        data: {
            usrname : uname,
            usremail : email,
            usrpswd : pswd,
            usrpswdc : pswdc
        },
        success: function(msg) {
            var d=msg;
            var str=d.slice(-2);
            if(str == 'OK') { 
                alert("Hello");
            }
            else {
            alert(msg);    
            }
        }
    })
    
}