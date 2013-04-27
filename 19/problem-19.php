<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$starttime = $exectime; 
?>
<?php
	
$start_year = 1901;
$end_year = 2000;

$sundays = 0;

$index = 1;

for ($i = $start_year ; $i <= $end_year ; $i++ ) {
	for ( $j = 1 ; $j <= 12 ; $j++ ) {
		if ( date('l',strtotime("$j/1/$i")) == "Sunday" ) {
			echo "$index => $j/1/$i was Sunday\n";
			$sundays++;
		} else {
			echo "$index => $j/1/$i wasn't Sunday\n";
		}
		$index++;
	}
}

echo "There are $sundays sundays between those years";
echo "\n";
?>

<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$endtime = $exectime;
$totaltime = ($endtime - $starttime);
echo "\nRuntime: ".$totaltime." seconds\n";
?>
