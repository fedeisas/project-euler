<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$starttime = $exectime; 
?>
<?php
	$base = 2;
	$pow = 1000;
	
	$string = gmp_strval(gmp_pow($base,$pow));
	
	$numbers = array();
	
	for ( $i = 0 ; $i <= strlen($string) ; $i++ ) {
		$numbers[] = substr($string, $i, 1);
	}
	
	echo sprintf("The desired number is: %d\n",array_sum($numbers));
?>

<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$endtime = $exectime;
$totaltime = ($endtime - $starttime);
echo "\nRuntime: ".$totaltime." seconds\n";
?>
