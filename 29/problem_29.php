#!/usr/bin/php
<?php
$results = array();

for ($a = 2; $a <= 100; $a++) {
   for ($b = 2; $b <= 100; $b++) {
      $results[] = pow($a,$b);
   }
}
echo "Total: " . count(array_unique($results)) .  "\n";
?>
