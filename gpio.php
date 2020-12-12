<?php

if (isset ( $_GET["pin"] )) {
	$pin = strip_tags ($_GET["pin"]);
	
	//test if value is a number
	if ( (is_numeric($pin)) && ($pin == 0) ) {
		
            //set the gpio's mode to output		
            system("gpio mode 0 out");
            //reading pin's status
            exec ("gpio read 0 ", $value );
            //set the gpio to high/low
            if ($value[0] == "0" ) { $value[0] = "1"; }
            else if ($value[0] == "1" ) { $value[0] = "0"; }
            system("gpio write 0 ".$value[0] );

            //print it to the client on the response
            echo($value[0]);
		
	}
	else { echo ("fail"); }
} //print fail if cannot use values
else { echo ("fail"); }
?>