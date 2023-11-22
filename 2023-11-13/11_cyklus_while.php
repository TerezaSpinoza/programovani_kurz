<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cyklus While</title>
</head>
<body>
<h1>Cyklus While</h1>  
<?php

// když udělam nekonečnej cyklus, je to chyba a vyřere procesor, RAMky a pc kiksne
// aby cyklus nebyl nekonečný, musí být podmínka, která po určitým počtu hodí false

// napsat čísla 0 - x
$pocitadlo = 0;  //startovací hodnota
while ($pocitadlo <=9) { //podminka
  echo "haha $pocitadlo";
  echo "<br>";

  //opakovany vyraz
  $pocitadlo ++;
}

// tady cyklus končí a může pokračovat dát
echo "HOTOVSON";

echo "<hr>"


?>
</body>
</html>
