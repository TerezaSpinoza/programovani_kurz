<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proměnné</title>
</head>
<body>
  <h1>Proměnné</h1>

<?php
  
$den;
$den = "neděle";
echo $den;
echo "<br>";
echo "Dneska je $den .<br>";
$stastneCislo = rand(0, 500);

echo "Vaše číslo je $stastneCislo <br>";
echo "Vaše číslo je $stastneCislo <br>";
echo "Vaše číslo je $stastneCislo <br>";
echo "Vaše číslo je $stastneCislo <br>";
echo "Vaše číslo je $stastneCislo <br>";
echo "Vaše číslo je $stastneCislo <br>";
$stastneCislo = 42;
echo "Vaše číslo je $stastneCislo <br>"; //template string OK způsob
echo "Dneska je " .$den.".<br>"; //starý způsob, který se nepoužívá
echo "Dneska je $den.<br>"; //template string OK způsob

//uživatel x stojí yKč
$jmeno="Terka";
$cena="666";
echo "Uzivatel $jmeno stojí {$cena}Kč.<br>";


?>

</body>
</html>
