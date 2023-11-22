<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukol obvod funkce</title>
</head>
<body>
<h1>Ukol obvod funkce</h1>
<?php
//vytvor fci, ktera se bude jmenovat spocitejObvodKruhu, s jednim argumentem a vracet bude obvod







function spocitejObvodKruhu ($argPolomer) {         //1 argument - polomer
  return $argPolomer * 2 * pi();  
  }

echo spocitejObvodKruhu(25);
echo "<br>";
echo spocitejObvodKruhu(1);
echo "<br>";
echo spocitejObvodKruhu(3);
echo "<br>";
echo spocitejObvodKruhu(10);
echo "<br>";
echo spocitejObvodKruhu(2);
echo "<br>";



?>
</body>
</html>
