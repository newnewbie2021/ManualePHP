<?php
$temp = $_REQUEST['temp'] ?? 20;  // Se $_REQUEST['temp'] non c’è allora usa 20
$tempConv = $temp * 1.8 + 32;  // Conversione della temperatura da °C a °F
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Convertitore di temperature</title>
</head>
<body>
  <h1>Convertitore di temperature</h1>
  <form>
    <p>Inserisci la temperatura: <input name="temp" value="<?= $temp ?>">°</p>
    <p>Converti in <input type="submit" name="scale" value="Fahrenheit"></p>
  </form>

  <p><?= $temp ?>° Celsius corrispondono a <?= $tempConv ?>° Fahrenheit</p>
  
</body>
</html>
