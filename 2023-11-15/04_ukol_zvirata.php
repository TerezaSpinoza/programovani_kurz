<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol zvirata</title>
</head>
<body>
    <h1>Zviratka nohy</h1>
<?php
    $poleZviratek = array(
        array(
            "jmeno" => "pes",
            "pocetNohou" => 4
        ),
        array(
            "jmeno" => "kocka",
            "pocetNohou" => 4
        ),
        array(
            "jmeno" => "had",
            "pocetNohou" => 0
        ),
        array(
            "jmeno" => "ptak",
            "pocetNohou" => 2
        ),
        array(
            "jmeno" => "pavouk",
            "pocetNohou" => 8
        ),
    );
var_dump($poleZviratek);

echo "<table border='1px solid'>";
foreach ($poleZviratek as $zvire) {
    echo"<tr>
      <td>{$zvire["jmeno"]}</td>
      <td>{$zvire["pocetNohou"]}</td>
    </tr>";
}

echo "</table>";


?>
</body>
</html>
