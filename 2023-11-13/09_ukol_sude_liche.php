<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol Sude Liche</title>
</head>
<body>
<h1>Sude liche ukol</h1>  
<?php

$nahodneCislo = rand(0,5);
echo $nahodneCislo;
echo "<br>";
if ($nahodneCislo == 0) {
  echo "Nula vyhrává!";
  } else if ($nahodneCislo % 2 == 1 ) {
    echo "Máš lichý číslo";
  } else {
    echo "Máš sudý číslo";
  }


?>
</body>
</html>
