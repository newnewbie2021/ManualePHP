<!DOCTYPE html>
<html>
<head>
<title>Unicode Test</title>
<meta charset="utf-8">
<style>
  table {border-collapse: collapse}
  td {border: 1px solid gray; text-align: center; padding: 2px;}
</style>
<body>
  <h1>Unicode Test</h1>
  <table>
    <?php
    $index = 10000;  // Codice Unicode di partenza
    for ($i = 0; $i < 7; $i++) {  // 7 righe
      echo "<tr>\n";  // Apre il tag della riga
      for ($j = 0; $j < 25; $j++) {  // 25 colonne
        echo "<td>&#$index</td>\n";// Simbolo del codice, vedi entità HTML cap. 3
        $index++;
      }
      echo "</tr>\n";  // Chiude il tag della riga
    }
    ?>
  </table>
</body>
</html>
