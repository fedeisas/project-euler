<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$starttime = $exectime; 
?>
<?php
	$n1 = 40;
	$n2 = 20;
	$n3 = $n1 - $n2;
	
	$fact1 = gmp_fact($n1);
	$fact2 = gmp_fact($n2);
	$fact3 = gmp_fact($n3);
	
 	echo gmp_strval(gmp_div_q($fact1,gmp_mul($fact2,$fact3)));
?>

<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$endtime = $exectime;
$totaltime = ($endtime - $starttime);
echo "\nRuntime: ".$totaltime." seconds\n";
?>
