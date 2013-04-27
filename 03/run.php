<?php

/*
 * Problem 3
 * URL: https://projecteuler.net/problem=3
 */

$number = 600851475143;

function isPrime($n) {
    for ($x = 2; $x <= floor($n/2); $x++) {
        if ($n % $x == 0) {
            return false;
        }
    }
    return true;
}
 
 
for ($x = 3; $x <= ceil($number/2); $x = $x+2) {

	// is factor?
    if ($number % $x == 0) {
        $y = $number / $x;

        // is prime?
        if (isPrime($y)) {
            echo $y;
            break;
        }
    }
}