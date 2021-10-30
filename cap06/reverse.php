<?php
function reverse($s) {
  $reversed = '';  // La stringa rovesciata, all'inizio è vuota
  for ($i = 0; $i < mb_strlen($s); $i++) {
    $reversed = $s[$i] . $reversed;  // Aggiunge il carattere in testa
  }
  return $reversed;
}