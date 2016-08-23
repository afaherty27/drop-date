<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Drop Date Calculator</title>
  <link rel="stylesheet" href="drop-date-calculator.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script type="text/javascript" src="drop-date.js"></script>
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" />
</head>
<body>

	<img alt="logo" id="logo" src="logo.png" />
	<h1>Refund Estimation Calculator</h1>
	
	<form method="post" action="drop-date-calculator.php">
		<h4 id="instructions"> Please provide the following information:</h4>
		<label class="blurb"for="startdate" >Course Start Date</label>
		<input type="text" id="startdate" class="date" name="startdate" /><br />
	
		<label class="blurb"for="enddate">Course End Date</label>
		<input type="text" id="enddate" class="date" name="enddate" /><br />
    
		<input id="calc" type="submit" value="Calculate" name="submit" />
	</form>
	
	<p id="disclaimer" style="margin-top: 35.3%">
			This refund estimation calculator is provided to offer guidance and
			estimation of refund levels based on the start and end date of a 
			class as indicated in the class scheduling system.  Actual refunds 
			will be processed based on the date the drop enrollemnt transaction 
			is completed/recorded and will be issued in compliance with the 
			college refund policy.
			
			<a href="https://madisoncollege.edu/enrollment-terms-conditions"
			   target="_blank" 
			   id="refundPolicy">Refund Policy</a>
</body>
</html>