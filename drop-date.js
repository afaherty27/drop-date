/*
	Adam Faherty
	JS file  for drop date calculator app
*/
$(document).ready(function() {

	//datepicker
  	$(".date").datepicker({dateFormat: 'M d, yy',changeMonth: true, changeYear: true});
	
});

/*
	Validates the user input
*/
function validation() {
	
	
	
	//alert($("#startdate").datepicker("getDate");
	var startDate = $("#startdate").datepicker({ dateFormat: 'MM' }).val();
	var endDate   = $("#enddate").datepicker({ dateFormat: 'dd, MM, yyyy' }).val();
	//alert($("#startdate").datepicker({ dateFormat: 'dd, MM, yyyy' }).val());
	
	
	if (startDate > endDate) {
		alert("testing intentional fail has been successfull");
		$("#startdate").value = "";
		$("#enddate").value = "";
		
		
	} 
		
	// validate that end date is after start date
	
	// validate dates are not the same date
	
	
}