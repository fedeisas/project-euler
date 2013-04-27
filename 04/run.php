<?php

/*
 * Problem 4
 * URL: https://projecteuler.net/problem=4
 */

$values = array();
for($i = 100; $i <= 999; $i++) {
	for($j = 100; $j <= 999; $j++) {
		if (($i*$j) == strrev($i*$j)) {
			$values[] = $i * $j;
		}
	}	
}

echo max($values);
?>