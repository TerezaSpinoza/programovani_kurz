<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moje in array</title>
</head>
<body>
    <h1>Moje in array</h1>
    <?php
    $poleZeleniny = array("celer", "mrkev", "brambora", "okurka", "cuketa");
    $poleOvoce = array("jablko", "ananas", "pomeranc", "kiwi");
    $poleBarev = array("cervena", "modra", "cerna");

    var_dump(in_array("okurka", $poleZeleniny)); //true
    var_dump(in_array("lilek", $poleZeleniny)); //false
    var_dump(in_array("kiwi", $poleOvoce)); //true
    var_dump(in_array("mango", $poleOvoce)); //false
    var_dump(in_array("modra", $poleBarev)); //true
    var_dump(in_array("ruzova", $poleBarev)); //false

    echo "<hr>";

    //vytvořit fci, která bude umět to samý
    //potřebuju 2 argumenty, a bude se nam vracet bool

    function moje_in_array ($argItem, $argPole) {
      foreach ($argPole as $policko) {
          if ($policko == $argItem) {
          return true;
        }                                         //nechci tady else a return false, protože mi to rovnou zahodi seznam
      } 
      return false;
    }

    var_dump(moje_in_array("okurka", $poleZeleniny)); //true
    var_dump(moje_in_array("ruzova", $poleBarev)); //false

    ?>
</body>
</html>
