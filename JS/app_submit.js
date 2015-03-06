function app_submit() {
    //var uname = $('#usernamesignup').val();
    //var email = $('#emailsignup').val();
    //var pswd = $('#passwordsignup').val();
    //var pswdc = $('#passwordsignup_confirm').val();
    
    //Personal Details Variables
    var c_fname  = $('#candidate_fname').val();
    var c_mname  = $('#candidate_mname').val();
    var c_lname  = $('#candidate_lname').val();
    var f_cand   = $('#f_candidate').val();
    var m_cand   = $('#m_candidate').val();
    var dob_cand = $('#dob_candidate').val();
    var nat_cand = $('#nationality_candidate').val();
    var g_cand   = $('#sex').val();
    
    //Mailing Address Variables
    var c_addr     = $('#c_address').val();
    var c_city     = $('#c_city').val();
    var c_state    = $('#c_state').val();
    var c_pin      = $('#c_pin').val();
    var c_landline = $('#c_landline').val();
    var c_mobile   = $('#c_mobile').val();
    
    var p_addr     = $('#p_address').val();
    var p_city     = $('#p_city').val();
    var p_state    = $('#p_state').val();
    var p_pin      = $('#p_pin').val();
    var p_landline = $('#p_landline').val();
    var p_mobile   = $('#p_mobile').val();

    
    $.ajax({
        type: "POST",
        url: "../Ajax/app_submit.php",
        data: {
            ajax_c_fname    : c_fname,
            ajax_c_mname    : c_mname,
            ajax_c_lname    : c_lname,
            ajax_f_cand     : f_cand,
            ajax_m_cand     : m_cand,
            ajax_dob_cand   : dob_cand,
            ajax_nat_cand   : nat_cand,
            ajax_g_cand     : g_cand,
            ajax_c_addr     : c_addr,
            ajax_c_city     : c_city,
            ajax_c_state    : c_state,
            ajax_c_pin      : c_pin,
            ajax_c_landline : c_landline,
            ajax_c_mobile   : c_mobile,
            ajax_p_addr     : p_addr,
            ajax_p_city     : p_city,
            ajax_p_state    : p_state,
            ajax_p_pin      : p_pin,
            ajax_p_landline : p_landline,
            ajax_p_mobile   : p_mobile
        },
        success: function (msg) {
//            var d = msg;
//            var str = d.slice(-2);
//            if (str == 'OK') {
//                alert("Hello");
//                window.location = "INCLUDES/profile.php";
//            }
//            else {
//                alert(d);    
//            }
        }
    });
}