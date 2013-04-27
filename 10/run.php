<?php
function IsPrime($number) 
{
	if ($number < 2) { /* We don't want zero or one showing up as prime */
		return FALSE;
	}
	for ($i=2; $i<=($number / 2); $i++) {
		if($number % $i == 0) { /* Modulus operator, very useful */
			return FALSE;
		}
	}
	return TRUE;
}

$prime_numbers = array();

$upper_bound = 2000000;

for ( $i = 1 ; $i <= $upper_bound ; $i++ ) {
	if ( IsPrime($i) ) {
		$prime_numbers[] = $i;
	}
}



echo "The sum of all prime numbers below 2 millons is: ".array_sum($prime_numbers)."\r\n";
?>