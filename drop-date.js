/*
	Adam Faherty
	JS file  for date entry on drop date calculator app
*/
$(document).ready(function() {

	//datepicker
    $("#startdate").datepicker({dateFormat: 'yy-mm-dd',changeMonth: true, changeYear: true});
	$("#enddate").datepicker({dateFormat: 'yy-mm-dd',changeMonth: true, changeYear: true});
});