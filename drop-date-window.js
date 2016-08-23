/*
	Adam Faherty
	JS file to configure window size of php drop-date calculator window
*/

$(document).ready(function() {

	//demo.html id for link is dropDate
	$("#dropDate").click(function(){
		alert("clicked button");
		window.open('drop-date-calculator.html', 'newwindow', 
				config='height=600, width=350, toolbar=no,' 
				+ 'menubar=no, scrollbars=no, resizable=no, location=no, '
				+ 'directories=no, status=no');
	});
});