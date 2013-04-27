<?php
$i = 1;
$j = 100;

$sum1 = 0;
$sum2 = 0;
$diff = 0;

for ( $a = $i ; $a <= $j ; $a++ ) {
	$sum1 += $a * $a;
}
for ( $a = $i ; $a <= $j ; $a++ ) {
	$sum2 += $a;
}
$sum2 = $sum2 * $sum2;
$diff = $sum2 - $sum1;

echo "The sum of the squares :".$sum1."\r\n";
echo "The square of the sum :".$sum2."\r\n";
echo "The difference between :".$diff."\r\n";
?>