<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vlastni funkce</title>
</head>
<body>
<h1>Vlastni funkce</h1>
<?php
//promenna slouzi k tomu, abychom si ulozili hodnotu na potom
//fce slouzi k tomu, abychom si ulozili prikazy na potom
//kazda fce musi mit unikatni jmeno nebo muze byt anonymni (bez jmena)
//-------------------------------------------------------------------------

//fce, ktera prijima 2 cisla a vrati nam to vestsi -> definice fce - název, počet parametrů/argumentů
function vyberVetsi ($argCislo1, $argCislo2) {         //vyberVetsi je jmeno
  if ($argCislo1 > $argCislo2) {
        //zde vyhralo cislo 1
        //return je vysledek nasi fce
        return $argCislo1;
        //kdyby tady bylo něco dalsiho, už se to nevykona, protoze to je az za returnem
  }else{
        //zde vyhralo cislo 2
        return $argCislo2;
  }
}

//zavolame nasi fci
echo vyberVetsi(45, 88);
echo "<br>";
echo vyberVetsi(-2348, 78);
$vysledek = vyberVetsi(284, 89); //pokud chci ulozit vysledek do promenne


?>
</body>
</html>
