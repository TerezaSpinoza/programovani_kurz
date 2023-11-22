<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aritmetické operátory</title>
</head>
<body>
<h1>Aritmetické operátory</h1>  

<?php
    // +, -, *, /
    echo 4 + 7;
    echo "<br>";
    echo 10 - 2;
    echo "<br>";
    $pocetStudentu = 8 * 9;
    echo $pocetStudentu;
    echo "<br>";
    echo 45 / $pocetStudentu;

    //var_dump, je funkce, ktera nam vypise, co pocitac vidi v promenne
    //funkce se pouzivaji s ()
    //pokud mam
    var_dump($pocetStudentu);

    
    // modulo %
    //zbytek po celociselnem deleni
    echo 7 % 3; //1
    echo "<br>";
    echo 8 % 3; //2
    echo "<br>";
    echo 9 % 3; //0
    echo "<br>";
    echo 10 % 3; //1
    echo "<br>";
    echo 11 % 3; //2
    echo "<br>";
    echo 12 % 3; //0
    echo "<br>";

    ?>

</body>
</html>
