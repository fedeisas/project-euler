<?php

/*
 * Problem 2
 * URL: https://projecteuler.net/problem=2
 */

$max = 4000000;
$fibonacci = array(1, 1, 2);

// Generate Fibonacci sequence
while(true) {

	$new_number = array_sum(array_slice($fibonacci, -2, 2, true));

	if($new_number < $max) {
		$fibonacci[] = $new_number;
	} else {
		break;
	}
}

// Filter even numbers
$even = array_filter($fibonacci, function($n) {
	return ($n % 2 != 0);
});

echo array_sum($even);