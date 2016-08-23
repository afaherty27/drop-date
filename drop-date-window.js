/*
	Adam Faherty
	JS file to configure window size of php drop-date calculator window
*/

$(document).ready(function() {

	//open app in new window
	$("#dropDate").click(function(){		
		window.open('drop-date.php', 'newwindow', 
				config='height=475, width=400, toolbar=no,' 
				+ 'menubar=no, scrollbars=no, resizable=no, location=no, '
				+ 'directories=no, status=no');
	});
});