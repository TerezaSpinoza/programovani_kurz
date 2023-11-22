<?php
//zkontroluju, jestli existuje cookina, ktera se jmenuje "barva"
if (array_key_exists("barva", $_COOKIE)) {
  $preferovanaBarva = $_COOKIE["barva"];

}else{ //pokud neexistuje, tak ji vytvorime - název, hodnota a zivotnost (optional - pokud ji neuvedu, je jedna sess.)
  setcookie("barva", "pink", time() + 60 * 60 * 24 * 7); 
  //DULEZITE setcookie se musi udelat driv, nez se vypise jakekoliv html
}
var_dump(time());
var_dump($_COOKIE); //specialni pole, ktere ma ulozeny vsechny kopie cookies od uzivatele

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
</head>
<body>
  <style>
    h1 {
      color: <?php echo $preferovanaBarva;?>
    }
  </style>
  <h1>Cookies</h1>
  <!-- cookie neni ulozena na serveru, ale v prohlizeci. jsou to drobečky informaci, ktere si chce server ulozit do pocitace a aby vedel, ze to jsme my a co nas zajimalo-->
</body>
</html>
