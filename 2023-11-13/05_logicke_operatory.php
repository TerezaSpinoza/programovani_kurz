<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logicke operatory</title>
</head>
<body>
<h1>Logicke operatory</h1>  
<?php

echo "<h3>AND</h3> <br>";
//logicke operatory pracuji s hodnotami bool
// AND -> a zároveň. tj. pokud jsou oba true, tak výsledek je taky bool true, jinak je false
// AND se dá taky zapsat jako && nebo and
var_dump(true && true); //true
var_dump(true AND true); //true
var_dump(true && false); //false
var_dump(false && false); //false
var_dump(false == false); //true
var_dump(false & false); //0 (když použiju jen low-level programming (naplněný/nenaplněný bity))
//retezeni
//stroj jede zleva doprava a umi porovnat pouze 2 hodnoty
//nejprve udela false && false vyjde false 
//pak udela false && true 
var_dump(false && false && true); //false

//příklad - student dostane zápočet jen pokud splní test na 50% a zároveň docházku min 70%
$test = rand(0, 100);
$dochazka = rand(0, 100);
var_dump($test);
var_dump($dochazka);
var_dump($test >=50 and $dochazka >=70);

echo "<h3>OR</h3> <br>";
//OR nebo, || (svislice/pipeline/svislítko) -> stačí splnit jednu podmínku
var_dump(true || true); //true
var_dump(true || false); //true
var_dump(false || false); //false
var_dump(false OR false); //false


echo "<h3>příklad</h3> <br>";
//příklad - podminka prijeti je prumer mensi nez 1,9 nebo test na 60 bodu
$studijniPrumer = rand(10, 50)/10;
$prijimaciTest = rand(0, 100);

var_dump($studijniPrumer, $prijimaciTest);
var_dump($studijniPrumer <= 1.9 or $prijimaciTest >= 60);

//negace -> před bool dáme !

echo "<h3>negace</h3> <br>";
//! zmeni true na false a flase na true
var_dump(!true); //false
var_dump(!false); //true
var_dump(!(5 == 2 + 3)); //false
var_dump(5 + 5 == 10 AND !("Tony" == "Pepa")); //true

echo "<h3>přednost</h3> <br>";
//pokud máme na 1 řádku and a or, tak and má přednost
var_dump(true or true and false); //upřednostníme and, tedy true (oproti zleva doprava, kdy vyjde false)
var_dump((true or true) and false); //kulatá závorka má přednost před andem

// &&a || maji prednost pred or a and
//XOR (exlusivni OR) - nedá se napsat pomocí svislítek
echo "<h3>exklusivni or</h3> <br>";
var_dump(true XOR true); //false
var_dump(false XOR true); //true
var_dump(true XOR false); //true
var_dump(false XOR false); //false




?>
</body>
</html>
