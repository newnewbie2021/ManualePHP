<?php
$number = floatval(readline('Da quale numero deve partire il conto alla rovescia?'));
for ($counter = $number; $counter >= 0; $counter -= 1) {  // Per $counter da 1 a 3
  echo "$counter ";  // Visualizza il valore del contatore
}
