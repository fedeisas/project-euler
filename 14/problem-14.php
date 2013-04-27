<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$starttime = $exectime; 
?>
<?php
	$maxTerms = 0;
    $longest = 0;
    for ($i = 3; $i <= 1000000; ++$i)
    {
        $tempTerms = 1;
        $j = $i;
        while ($j != 1)
        {
             ++$tempTerms;

             if ($tempTerms > $maxTerms)
             {
                 $maxTerms = $tempTerms;
                 $longest = $i;
             }

             if ($j % 2 == 0)
             {
                 $j /= 2;
             }
             else
             {
                 $j = 3*$j + 1;
             }
        }
        
        printf("%6d => %6d\n", $i, $tempTerms);
    }

    printf("%d %d\n", $maxTerms, $longest);
?>

<?php
$exectime = microtime();
$exectime = explode(" ",$exectime);
$exectime = $exectime[1] + $exectime[0];
$endtime = $exectime;
$totaltime = ($endtime - $starttime);
echo "\nRuntime: ".$totaltime." seconds\n";
?>
