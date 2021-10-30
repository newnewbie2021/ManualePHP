<?php
function rebate($price, $rebate) {
  $price = floatval($price);
  $rebate = floatval($rebate);
  $cost = $price - $price * $rebate / 100;
  return $cost;
}
$prod1 = $_REQUEST['prod1'] ?? '';
$price1 = $_REQUEST['price1'] ?? 0;
$rebate1 = $_REQUEST['rebate1'] ?? 0;
$cost1 = rebate($price1, $rebate1);

$prod2 = $_REQUEST['prod2'] ?? '';
$price2 = $_REQUEST['price2'] ?? 0;
$rebate2 = $_REQUEST['rebate2'] ?? 0;
$cost2 = rebate($price2, $rebate2);

$prod3 = $_REQUEST['prod3'] ?? '';
$price3 = $_REQUEST['price3'] ?? 0;
$rebate3 = $_REQUEST['rebate3'] ?? 0;
$cost3 = rebate($price3, $rebate3);
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Sconti</title>
  <style>  /* CSS per allineare a destra prezzi, sconti il prezzo finale */
    input[name^=price],input[name^=rebate],tr td:last-of-type {text-align:right;}
  </style>
</head>
<body>
<h1>Prodotti in sconto</h1>
<form method="post">
  <table>
  <tr><!-- Intestazione della tabella -->
    <th>Descrizione</th><th>Prezzo</th><th>Sconto %</th><th>Prezzo finale</th>
  </tr>
  <tr><!-- Primo prodotto -->
    <td><input name="prod1" value="<?= $prod1 ?>"></td>
    <td><input name="price1" value="<?= $price1 ?>" size="10"></td>
    <td><input name="rebate1" value="<?= $rebate1 ?>" size="10"></td>
    <td><?= $cost1 ?> €</td>
  </tr>
  <tr><!-- Secondo prodotto -->
    <td><input name="prod2" value="<?= $prod2 ?>"></td>
    <td><input name="price2" value="<?= $price2 ?>" size="10"></td>
    <td><input name="rebate2" value="<?= $rebate2 ?>" size="10"></td>
    <td><?= $cost2 ?> €</td>
  </tr>
  <tr><!-- Terzo prodotto -->
    <td><input name="prod3" value="<?= $prod3 ?>"></td>
    <td><input name="price3" value="<?= $price3 ?>" size="10"></td>
    <td><input name="rebate3" value="<?= $rebate3 ?>" size="10"></td>
    <td><?= $cost3 ?> €</td>
  </tr>
  </table>
  <input type="submit" name="compute" value="Calcola gli sconti">
</form>
</body></html>
