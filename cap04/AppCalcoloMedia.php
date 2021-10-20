<?php
$number1 = $_REQUEST['number1'] ?? 0;
$number2 = $_REQUEST['number2'] ?? 0;

$media = ($number1 + $number2)/2;

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Calcolo della media di due numeri</title>
</head>
<body>
  <h1>Calcolo della media di due numeri</h1>
  <form method="post">
    <p>1° numero: <input name="number1" value="<?= $number1 ?>"></p>
    <p>2° numero: <input name="number2" value="<?= $number2 ?>"></p>
    <p><input type="submit" name="scale" value="Calcola"></p>
  </form>
  <p>Risultato: <?= $media ?></p>
</body>
</html>
