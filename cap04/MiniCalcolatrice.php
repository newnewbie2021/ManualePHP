<?php
$number1 = $_REQUEST['number1'] ?? 0;
$number2 = $_REQUEST['number2'] ?? 0;
$operation = $_REQUEST['operation'] ?? '';

switch ($operation) {
  case "+":
    $result = $number1 + $number2;
    break;
  case "-":
    $result = $number1 - $number2;
    break;
  case "x":
    $result = $number1 * $number2;
    break;
  case "÷":
    $result = @ ($number1 / $number2);  // @ silenzia l'errore divisione per zero
    break;
  default:
    $result = '...';
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Calcolatrice</title>
</head>
<body>
  <h1>Mini-calcolatrice</h1>
  <form method="post">
    <p>1° operando: <input name="number1" value="<?= $number1 ?>"></p>
    <p>2° operando: <input name="number2" value="<?= $number2 ?>"></p>
    <p><input type="submit" name="operation" value="+">
       <input type="submit" name="operation" value="-">
       <input type="submit" name="operation" value="x">
       <input type="submit" name="operation" value="÷"></p>
  </form>
  <p>Risultato: <?= $result ?></p>
</body>
</html>
