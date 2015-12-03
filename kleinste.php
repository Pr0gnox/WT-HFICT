<?php
	

	
	function kleinste( $input, $mini )
	{
	
    //Überprüfen welches die kleinste Zahl ist
    for(int $i = 0; $i<3; $i++){
    
        if($input < $mini){
        $mini=$input;}
    }
	
	echo "Die kleinste Zahl ist: ";
	return ($mini);
	
	}
	 
	
?>