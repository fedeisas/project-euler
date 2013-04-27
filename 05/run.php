<?php

/*
 * Problem 5
 * URL: https://projecteuler.net/problem=5
 */

$n = 1;

function isPrime($n) {
    for ($x = 2; $x <= floor($n/2); $x++) {
        if ($n % $x == 0) {
            return false;
        }
    }
    return true;
}

$divisors = array_reverse(range(1, 20));

$prime_divisors = array_filter($divisors, function($n) {
	return isPrime($n);
});

$gcd = array_product($prime_divisors);

echo $gcd; die();

while (true) {
	if($n % $gcd == 0) {
		echo $n;
	}
	$n++;
}