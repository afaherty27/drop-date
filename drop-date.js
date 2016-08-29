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
	
	var startDate = $("#startdate").datepicker({ dateFormat: 'MM' }).val();
	var endDate   = $("#enddate").datepicker({ dateFormat: 'dd, MM, yyyy' }).val();	
	
	
	// validate that end date is after start date
	var endBeforeStart = "<h5 class='fail'>Course Start Date must be before Course End Date</h5>";
	
	if (startDate > endDate) {
		$("#form").append(endBeforeStart);
		return false;
	}
			
	
	// validate dates are not the same date
	
	//remove results if recalculating, and validation fails again

}