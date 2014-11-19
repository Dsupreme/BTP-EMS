// JavaScript Document
$(document).ready(function() {   
    var d;
    $('#calendar').fullCalendar({
        header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
		},
		editable: false,
		eventLimit: true, // allow "more" link when too many events
		//Recieve the events as AJAX from php in the JSON format
        events: {
            url: 'calender_ajax.php',
            type: 'GET',
            error: function() {
                alert('there was an error while fetching events!');
            },
            //color: 'yellow',   // a non-ajax option
            //textColor: 'black' // a non-ajax option
        }
    });
    $('#calendar').fullCalendar('gotoDate', currentDate); 
});
