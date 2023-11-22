<?php

if (!array_key_exists("pocetNavstev", $_COOKIE)) {  //zacneme tak, ze cookinu nema (prvni navsteva, expirace...)
  setcookie("pocetNavstev", 1, time() + 60 * 60 * 24 * 30);
  $pocetNavstev = 1;
 } else {
  $pocetNavstev = $_COOKIE["pocetNavstev"];
  $pocetNavstev++;
  setcookie("pocetNavstev", $pocetNavstev, time() + 60 * 60 * 24 * 30);
}

?>

<!-- Vypiste uzivateli h2 "Dekujeme za vernost" pri kazde desate navsteve -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol vernost</title>
</head>
<body>
  <h1>Ukol vernost</h1>
  <?php 
if ($pocetNavstev % 10 ==0) {
  echo "<h2>Děkujeme za věrnost. </h2>";
}

?>
</body>
</html>
