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
	<h1>Refund Estimation Calculator</h1>
	<form method="post" action="drop-date-calculator.php">
		<h4 id="instructions"> Please provide the following information:</h4>
		<label for="startdate" class="dateEntry">Course Start Date</label>
		<input type="text" id="startdate" class="date" name="startdate" /><br />
	
		<label for="enddate" class="dateEntry">Course End Date</label>
		<input type="text" id="enddate" class="date" name="enddate" /><br />
    
		<input type="submit" value="Calculate" name="submit" />
	</form>
</body>
</html>