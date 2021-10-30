<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Scacchiera</title>
</head>
<body>
<svg width="400" height="400"><!-- Immagine SVG quadrata di lato 400 -->
  <?php
  $squares = 8;  // Numero di case per riga
  $size = 50;  // Dimensione delle case in pixel

  for ($i = 0; $i < $squares; $i++) {  // Righe dalla 0 alla 7
    for ($j = 0; $j < $squares; $j++) {  // Colonne dalla 0 alla 7
      $x = $j * $size;  // Posizione orizzontale della casa
      $y = $i * $size;  // Posizione verticale della casa

      if (($i + $j) % 2 === 0) {
        $color = 'red';  // Se in posizione pari
      } else {
        $color = 'blue';  // Se in posizione dispari
      }
      echo "<rect x='$x' y='$y' height='$size' width='$size'
                    style='fill:$color;'></rect>";
    }
  }
  ?>
  <rect x="0" y="0" height="400" width="400"
        style="fill:transparent; stroke-width:2px; stroke:green;"></rect>
</svg><!-- Chiude l'immagine SVG -->
</body>
</html>
