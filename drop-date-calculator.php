<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Drop Date Calulator</title>
</head>
	
	<body>
		
		<?php
		
			$start_input = $_POST['startdate'];
			$end_input   = $_POST['enddate'];
		
			$start_date = new DateTime($start_input); //RETRIEVE FROM FORM
			
			$end_date	= new DateTime($end_input); //RETRIEVE FROM FORM
								
			$interval = $start_date->diff($end_date);
			
			//Calculate days before next tier drop off
			$eleven_percent = (string)floor($interval->days*0.11);
			$twenty_percent = (string)floor($interval->days*0.2);
			
						
			//print how many days in semester
			echo $interval->format('%a day(s)') . '<br />';
			
			//print how many days from semester beinging til drop date
			echo floor($eleven_percent) . ' days to 80% refund' . '<br />';
			echo floor($twenty_percent) . ' days to 60% refund' . '<br />';
			
			//print start date on website *
			echo '<br />class start date ' . (string)date_format($start_date, 'm-d-Y') . '<br />';
			echo 'class end date' . (string)date_format($end_date, 'm-d-Y');
			
			date_add($start_date, date_interval_create_from_date_string($eleven_percent . 'days'));
			
			echo '<br /><br />RESULTS<br />';
			//echo date for 80% refund
			echo 'To receive an 80% refund for this class, students must drop before: ' . (string)date_format($start_date, 'm-d-Y') .  '<br />';
			
			//subtract the 11% that was added
			date_sub($start_date, date_interval_create_from_date_string($eleven_percent . 'days'));
			
			date_add($start_date, date_interval_create_from_date_string($twenty_percent . 'days'));
			//echo date for 60% refund
			//echo 'To recieve a 60% refund for this class, students must drop before: ' . (string)date_format($start_date, 'm-d-Y');
			
			
		?>
		<h1>Refund Estimation Calculator</h1>
		
	</body>
</html>