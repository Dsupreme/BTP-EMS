//Javascript Document

function app_submit() {
    var form1 = $('input[name=job_post]:checked', '#form1').val();  //Job Post  POST ID Value
    var form2 = $('#form2').serialize();
    var form3 = $('#form3').serialize();
    var form4 = $('#form4').serialize();
    
    
    $.ajax({
        type: "POST",
        url: "../Ajax/app_submit.php",
        data: {
            form1 : form1,
            form2 : form2,
            form3 : form3,
            form4 : form4
        },
        success: function (msg) {
            d = msg;
            var stri = d.slice(-2);
            alert(d);
            /*if (str == 'OK') {
                alert("Hello");
            }
            else {
                alert(d);
            }*/
        }
    });
}