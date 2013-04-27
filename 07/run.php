<?php
function is_prime($i)
{
	if($i % 2 != 1) return false;
	
	$d = 3;
	
	$x = sqrt($i);

	while ($i % $d != 0 && $d < $x) $d += 2;
	
	return (($i % $d == 0 && $i != $d) * 1) == 0 ? true : false;
}

// example: show all prime numbers between $start and $end
$start = 0;
$end = 10;
$primes = array();

for($i = $start, $key = 1; $i <= $end, $key <= 10001; $i++)
{
	if(is_prime($i))
	{
		//echo "Es Primo: ".$i."\r\n";
		//echo "Key: ".$key."\r\n";
		$primes[$key] = $i;
		$key++;
	}
}
echo "The 10001th prime is: ".$primes[10001]."\r\n";
?>