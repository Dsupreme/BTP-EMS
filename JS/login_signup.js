//Javascript Document

function signup() {
    var uname = $('#usernamesignup').val();
    var email = $('#emailsignup').val();
    var pswd = $('#passwordsignup').val();
    var pswdc = $('#passwordsignup_confirm').val();
    var d;
    var result = $.ajax({
                    type: "POST",
                    url: "Ajax/signup.php",
                    data: {
                        usrname : uname,
                        usremail : email,
                        usrpswd : pswd,
                        usrpswdc : pswdc
                    },
                    success: function (msg) {
                        d = msg;
                        var stri = d.slice(-2);
                        console.log(stri.length);
                        if (str == 'OK') {
                            alert("Hello");
                            window.location = "INCLUDES/profile.php";
                        }
                        else {
                            alert(d);    
                        }
                        return msg;
                    }
                });
    
}

function login() {
    var uname = $('#username').val();
    var pswd = $('#password').val();
    var txt;
    $.ajax({
        type: "POST",
        url: "Ajax/login.php",
        data: {
            usrname : uname,
            usrpswd : pswd,
        },
        success: function(response) {
            var d = response;
            var str = d.slice(-7);
            if (str == "Invalid") {
                alert("Invalid Username or Password. Kindly Enter again");
            }
            else {
                window.location = d;
            }                        txt = d;

            console.log(txt);
            return response;
        }
    })    
}
