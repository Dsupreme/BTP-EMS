function goto_form2() {
    $('#form1').hide();
    $('#form2').fadeIn(500);
    $('#form3').hide();
    $('#form4').hide();
    $('.first').removeClass('border-change');
    $('.second').removeClass('border-change');
    $('.third').removeClass('border-change');
    $('.fourth').removeClass('border-change');
    $('.first').addClass('border-change');
    $('.second').addClass('border-change');
    $('#progress-bar').val('35');
};

function goto_form3() {
    $('#form3').fadeIn(500);
    $('#form1').hide();
    $('#form2').hide();
    $('#form4').hide();
    $('.first').removeClass('border-change');
    $('.second').removeClass('border-change');
    $('.third').removeClass('border-change');
    $('.fourth').removeClass('border-change');
    $('.first').addClass('border-change');
    $('.second').addClass('border-change');
    $('.third').addClass('border-change');
    $('#progress-bar').val('68');
};

function goto_form4() {
    $('#form4').fadeIn(500);
    $('#form1').hide();
    $('#form2').hide();
    $('#form3').hide();
    $('.first').removeClass('border-change');
    $('.second').removeClass('border-change');
    $('.third').removeClass('border-change');
    $('.fourth').removeClass('border-change');
    $('.first').addClass('border-change');
    $('.second').addClass('border-change');
    $('.third').addClass('border-change');
    $('.fourth').addClass('border-change');
    $('#progress-bar').val('100');
}