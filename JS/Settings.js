// JavaScript Document
$(document).ready(function() {
	$('.btn .btn-tabs button').click(function()  {
        var currentAttrValue = $(this).attr('id');
        // Show/Hide Tabs
        $('.tabs ' + currentAttrValue).siblings().slideUp(400);
		$('.tabs ' + currentAttrValue).delay(400).slideDown(400);
 
        // Change/remove current tab to active
        $(this).parent('li').addClass('active').siblings().removeClass('active');
    });
});