// JavaScript Document
$(document).ready(function(){
    $('#form1').show();
    $('#form2').hide();
    $('#form3').hide();
    $('#form4').hide();
  $('span').click(function(){
    if ($(this).hasClass('first')){
        $('#progress-bar').val('0');
        $(this).nextAll().removeClass('border-change');
        
        $('#form1').fadeIn(500);
        $('#form2').hide();
        $('#form3').hide();
        $('#form4').hide();

        $('.percent').html("0% Complete");
        
    } else if ($(this).hasClass('second')){
        $(this).nextAll().removeClass('border-change');  
        $('#progress-bar').val('35');
        $(this).prevAll().addClass('border-change');  
        $(this).addClass('border-change');
        
        $('#form2').fadeIn(500);
        $('#form1').hide();
        $('#form3').hide();
        $('#form4').hide();
        
        $('.percent').html("33% Complete");
        
    } else if ($(this).hasClass('third')){
        $(this).nextAll().removeClass('border-change');  
        $('#progress-bar').val('68');
        $(this).prevAll().addClass('border-change'); 
        $(this).addClass('border-change');
        
        $('#form3').fadeIn(500);
        $('#form1').hide();
        $('#form2').hide();
        $('#form4').hide();
        
        $('.percent').html("66% Complete");
    } else {
        $('#progress-bar').val('100');
        $(this).addClass('border-change');
        $(this).prevAll().addClass('border-change');
        
         $('#form4').fadeIn(500);
        $('#form1').hide();
        $('#form2').hide();
        $('#form3').hide();
        
        $('.percent').html("100% Complete");
       }
  });
});// complete click 