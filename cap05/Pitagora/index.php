<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Tabelline</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <h1>La tavola pitagorica</h1>
  <div class="image"><!-- Questa parte è opzionale -->
    <img src="images/Pitagora.jpg" />
    <span class="caption">Pitagora</span>
  </div>
  <table id="tabella">
    <?php
    for ($i = 1; $i <= 10; $i++) {
      echo '<tr>';  // Inizia una nuova riga
      for ($j = 1; $j <= 10; $j++) {
        $product = $i * $j;  // Calcola il prodotto
        echo "<td>$product</td>";  // Visualizza la cella con dentro il prodotto
      }
      echo "</tr>\n";  // Chiude la riga
    }
    ?>
  </table>
</body>
</html>
