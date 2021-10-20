<?php
echo "\n";
$A = floatval(readline('Inserisci il primo numero: '));
echo "\n";
$B = floatval(readline('Inserisci il secondo numero: '));
echo "\n";
$C = floatval(readline('Inserisci il terzo numero: '));
echo "\n";


if ($A > $B) {
  if ($A > $C) {
    $max = $A;
  } else {
    $max = $C;
  }
} else {
  if ($B > $C) {
    $max = $B;
  } else {
    $max = $C;
  }
}

echo "Il maggiore dei tre numeri è $max";

echo "\n";
echo "\n";
