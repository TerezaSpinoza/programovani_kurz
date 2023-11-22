<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>
<body>
  <h1>Array</h1>
<?php
$poleBarvy = array("lightblue", "pink", "lightgreen", "lightyellow");
var_dump ($poleBarvy);
echo $poleBarvy [1];
echo "<br>";
$poleBarvy[1] = "aqua";
unset($poleBarvy[2]);
$poleBarvy[] = "darkblue";
var_dump($poleBarvy);
echo "<br>";

$poleAuto = [
  "znacka" => "Suzuki",
  "barva" => "seda",
  "palivo" => "benzin",
  "rokVyroby" => 2020,
  "jeVZaruce" => false
];
echo $poleAuto["palivo"];
//zmena
$poleAuto["barva"] = "cervena";
//nova hodnota
$poleAuto["jmenoMajitele"] = "Tony";
//smazani
unset($poleAuto["rokVyroby"]);
var_dump($poleAuto);


?>
</body>
</html>
