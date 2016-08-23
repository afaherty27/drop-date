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
		<link rel="stylesheet" href="drop-date-calculator.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="drop-date.js"></script>
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" />
		
	</head>
	
	<body>
		
		<h1>Refund Estimation Calculator</h1>
		
		<form method="post" action="drop-date-calculator.php">
			<h4 id="instructions"> Please provide the following information:</h4>
			<label class="blurb" for="startdate">Course Start Date</label>
			<input type="text" 
				   id="startdate" 
				   class="date" 
				   value="<?php print $start_input ?>" 
				   name="startdate" /><br />
		
			<label class="blurb" for="enddate">Course End Date</label>
			<input type="text" 
			       id="enddate" 
				   class="date" 
				   value="<?php print $end_input ?>"
				   name="enddate" /><br />
    
			<div id="results">
				<hr class="resultSplit" />
				<div class="row">				
					<div class="resultText">					
						To recieve an 80% refund for this class, students must 
						drop before:
					</div> <!-- end resultText -->
					
					<div class="resultValue">					
						<!-- 80% result -->
						<?php						
							//add 11% value to start date to find first result
							date_add($start_date, date_interval_create_from_date_string($eleven_percent . 'days'));
							//display to screen		
							print (string)date_format($start_date, 'm-d-Y');
							//return startdate value to original date
							date_sub($start_date, date_interval_create_from_date_string($eleven_percent . 'days'));
						?>
					</div> <!--end resultValue -->
				</div> <!--end row -->
				<hr class="resultSplit" />
				<div class="row">				
					<div class="resultText">					
						To recieve a 60% refund for this class, students must 
						drop before:
					</div> <!-- end resultText -->
					
					<div class="resultValue">
						<!-- 60% result -->
						<?php
							//add 20% to the start date for 2nd result
							date_add($start_date, 
								date_interval_create_from_date_string($twenty_percent . 'days'));
							//display to screen
							print (string)date_format($start_date, 'm-d-Y')
						?>
					</div> <!--end resultValue -->
				</div> <!--end row -->
			</div> <!--end results -->	
			<hr class="resultSplit" />
			<input id="calc" type="submit" value="Calculate" name="submit" />
		</form>
			
		<p id="disclaimer">
		
			This refund estimation calculator is provided to offer guidance and
			estimation of refund levels based on the start and end date of a 
			class as indicated in the class scheduling system.  Actual refunds 
			will be processed based on the date the drop enrollemnt transaction 
			is completed/recorded and will be issued in compliance with the 
			college refund policy.
			
			<a href="https://madisoncollege.edu/enrollment-terms-conditions"
			   target="_blank" 
			   id="refundPolicy">Refund Policy</a>
		</p>
	</body>
</html>