<?php

/*
 * Problem 1
 * URL: https://projecteuler.net/problem=1
 */

$numbers = array_filter(range(0, 1000), function($n) {
	return ($n % 3 == 0) || ($n % 5	 == 0);
});

echo array_sum($numbers);