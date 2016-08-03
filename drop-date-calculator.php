<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  
<?php
	//vars to hold date values
	$start_input = $_POST['startdate'];
	$end_input   = $_POST['enddate'];
	
	// convert input Strings to DateTime objects
	$start_date = new DateTime($start_input); 	
	$end_date	= new DateTime($end_input); 
	
	//calculate how many days between entered dates	
	$interval = $start_date->diff($end_date);
	
	//Calculate days before next tier drop off
	$eleven_percent = (string)floor($interval->days*0.11);
	$twenty_percent = (string)floor($interval->days*0.2);		
?>  
  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Drop Date Calulator</title>
	</head>
	
	<body>
		
		<h1>Refund Estimation Calculator</h1>
		<table id="enteredDates">
			<tr class="row">
				<td class="blurb">Course start date</td>
				<td class="enteredDate">
					<?php
						print $start_input;
					?>
				</td>
			</tr>
			<tr class="row">
				<td class="blurb">Course end date</td>
				<td class="enteredDate">
					<?php
						print $end_input;
					?>
				</td>
			</tr>
		</table>
		<?php				
			date_add($start_date, date_interval_create_from_date_string($eleven_percent . 'days'));
			
			//echo '<br /><br />RESULTS<br />';
			//echo date for 80% refund
			//echo 'To receive an 80% refund for this class, students must drop before: ' . (string)date_format($start_date, 'm-d-Y') .  '<br />';
			
			//subtract the 11% that was added
			date_sub($start_date, date_interval_create_from_date_string($eleven_percent . 'days'));
			
			date_add($start_date, date_interval_create_from_date_string($twenty_percent . 'days'));
			//echo date for 60% refund
			//echo 'To recieve a 60% refund for this class, students must drop before: ' . (string)date_format($start_date, 'm-d-Y');
		?>
		
		
		<p>
			This refund estimation calculator is provided to offer guidance and
			estimation of refund levels based on the start and end date of a class
			as indicated in the class scheduling system.  Actual refunds will be 
			processed based on the date the drop enrollemnt transaction is 
			completed/recorded and will be issued in compliance with the college
			refund policy
		</p>
		<!--make pop up in new window -->
		<a href="https://madisoncollege.edu/enrollment-terms-conditions">Refund Policy</a>
			

	</body>
</html>