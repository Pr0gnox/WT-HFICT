<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="de">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Funktionen</title>
  
  </head>
  <body>
  
  <p>Please enter 3 Numbers to find out which one is the smallest.</p>
	
	
	<form action="" method="get">
	
		<input type="text" name="amount" value="<?= $_GET['amount1'];?>"/>
		<input type="text" name="amount" value="<?= $_GET['amount2'];?>"/>
		<input type="text" name="amount" value="<?= $_GET['amount3'];?>"/>
		<input type="submit" name="submit" value="Senden"/>
				
	</form>
	
    
<?php

	$input ($_GET['amount1'] > 0)?$_GET['amount1']:0;
	$input ($_GET['amount2'] > 0)?$_GET['amount2']:0;
	$input ($_GET['amount3'] > 0)?$_GET['amount3']:0;

	
	$mini = kleinste;


?>
    
  </body>
</html>