<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="de">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Schlaufen mit PHP</title>
  </head>
  <body>
    
	<!-- <style="font-family: verdana"/> -->
	
	
	<p>Please enter an amount of Lines, which shall be printed out.</p>
	

	
	<form action="" method="get">
	
		<input type="text" name="amount" value="<?= $_GET['amount'];?>"/>
		<input type="submit" name="submit" value="Senden"/>
				
	</form>
		
	<?php
		
		$line = ($_GET['amount'] > 0)?$_GET['amount']:0;
		

			for($i= 0; $i<$line;$line--){
				for($x= 0; $x<$line; $x++){
					echo "+";
				}
			
				if($line % 2 == 0){
					echo "KTSI";
				}
			
			echo '<br/>';
			}

	?>
    
  </body>
</html>