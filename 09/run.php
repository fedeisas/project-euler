<?php

$results = array();
$i = 0;
for ( $m = 2 ; $m <= 500 ; $m++ ) {
	for ( $n = 1 ; $n <= $m ; $n++, $i++ ) {
		$results[$i]['a'] = pow($m,2) - pow($n,2);	
		$results[$i]['b'] = 2*$m*$n;
		$results[$i]['c'] = pow($m,2) + pow($n,2);
	}
}

foreach($results as $result) {
	//echo "Sum: ".$result['a'] + $result['b'] + $result['c']."\r\n";
	if( $result['a'] + $result['b'] + $result['c'] == 1000) {
		echo "Found!";
		echo "The product is: ".( $result['a'] * $result['b'] * $result['c'] )."\r\n";
	} 
}
?>