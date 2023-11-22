<?php
//zde nadefinujem vychozi hodnoty tabulky
$pocetRadku = 1;
$pocetSloupcu = 1;
if (array_key_exists("nasobilka-submit", $_POST)) {
$pocetRadku = $_POST["pocet-radku"];
$pocetSloupcu = $_POST["pocet-sloupcu"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Malá násobilka formulář</title>
</head>
<h1>Malá násobilka formulář</h1>


<body>

<form action="" method="post">
      <label for="kocka">Zadejte pocet radku</label>
      <input type="text" name="pocet-radku" id="kocka">
      <br>
      <label for="pes">Zadejte pocet sloupcu</label>
      <input type="text" name="pocet-sloupcu" id="pes">
      <br>
      <input type="submit" name="nasobilka-submit" value="Vygeneruj tabulku">
</form>

<table border="1">

<?php //Malá násobilka
for ($radek = 1; $radek <= $pocetRadku; $radek++) {
  echo "<tr>";
  for ($sloupec = 1; $sloupec <= $pocetSloupcu; $sloupec++) {
      $vysledek = $radek * $sloupec;
      echo "<td>$vysledek</td>";
  }
  echo "</tr>";
}

    
?>

</table>

</body>
</html>
