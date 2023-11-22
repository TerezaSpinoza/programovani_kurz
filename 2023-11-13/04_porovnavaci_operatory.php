<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Porovnavaci operatory</title>
</head>
<body>
  <h1>Porovnavaci operatory</h1>

  <?php
  //datový typ Boolean => bool -> true/false
  $jePlnolety = false;
  $jeStudent = true;

  // == rovná se, != nerovná se, >, <, <= větší nebo rovno, >= menší nebo rovno. porovnáváme 2 hodnoty
$a = 5;
$b = 2 + 2;
$c = 10 / 2;

// pro bool používáme var_dump, protože echo umí vypsat jen string nebo cislo(int, float)
var_dump($a == $b);
$desetinnyCislo = 2.3;
echo $desetinnyCislo;

//shoda
var_dump($a == $b); //false
var_dump($c == $b); //false
var_dump($c == $a); //true
//neshoda
var_dump($a != $b); //true
var_dump($c != $b); //true
var_dump($c != $a); //false
//mensi
var_dump($a < $b); //false
var_dump($b < $a); //true
var_dump($a < $c); //false
//mensi nebo rovno
var_dump($a <= $b); //false
var_dump($b <= $a); //true
var_dump($a <= $c); //true


//shoda/neshoda se da aplikovat i pro stringy
//case sensitive = zalezi i na velkych a malych pismenek
var_dump("Tony" == "Pepa"); //false
var_dump("Tony" == "tony"); //false
var_dump("Tony" == "Tony"); //true
var_dump("Tony" != "Pepa"); //true

//existuje operator === a !==
//tyto operatory kontoroluji i shodu datoveho typu
var_dump(5 == "5"); //true
var_dump(2 + 3 == "5"); //true
var_dump(5 == "5"); //true
var_dump(5 === "5"); //false, protože jsou to rozdílný datový typy
var_dump(5 === 5); //true
var_dump(5 === 5.0); //false (int se nerovna float)

  ?>


</body>
</html>
