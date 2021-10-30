<?php
$sum = 0;
do {
  $number = floatval(readline('Che numero vuoi sommare?'));
  $sum += $number;
} while ($number != 0);
echo "Il totale è $sum";
