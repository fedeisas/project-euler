<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$starttime = $exectime; 
?>
<?php
function factorcount($num) {
	$i = 1;
	$sqrt = sqrt($num);
	while($i <= $sqrt) {
		if($num % $i == 0) {
			$arr[] = $i;
		}
		$i++;
	}
	$count = count($arr) * 2;
	/*if (preg_match('/^[0-9]+$/', sqrt($num))) {
		$count--;
	}*/
	if (!is_int(sqrt($num))) {
		$count--;
	}
	return $count;
}

$run = true;
$i = 1;
$sum = 0;
$divisorsTarget = 500;

while($run) {
	$sum += $i;
	$divisors = factorcount($sum);
	printf("%8d => %3d\n", $sum, $divisors);
	
	if($divisors > $divisorsTarget) {
		echo "The desired number is: ".$sum."\n";
		$run = false;
	}
	
	$i++;
}

?>

<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$endtime = $exectime;
$totaltime = ($endtime - $starttime);
echo "\nRuntime: ".$totaltime." seconds\n";
?>