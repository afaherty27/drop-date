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
	
	//clear error messages and highlights
	$(".fail").remove();
	$("#startdate").removeAttr("style");
	$("#enddate").removeAttr("style");
	

	// validate that end date is after start date
	var endBeforeStart = "<h5 class='fail'>Course Start Date must be before Course End Date</h5>";
	var equalDates	   = "<h5 class='fail'>Courses cannot start and end on same date</h5>";
	
	if (startDate > endDate) {
		$("#form").append(endBeforeStart);
		$("#startdate").attr('style', 'border: red solid 2px');
		return false;
	}
			

	// validate dates are not the same date
	if (startDate == endDate) {
		$("#form").append(equalDates);
		$("#startdate").attr('style', 'border: red solid 2px');
		$("#enddate").attr('style', 'border: red solid 2px');
		return false;
	}
}