<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol Tabulka Obvodu</title>
</head>
<h1>Ukol Tabulka Obvodu</h1>
<body>
<?php
//
$poleCisel = [];
$cislo = 1;
//tady pobezi cyklus 20x
//pro kazde kolo se vygeneruje nahodny cislo, ktery se vlozi do pole 
//vezmem pole a vytvoříme tabulku, kde v prvním sloupci budou poloměry a v pravým ty obvody
for ($cislo = 0; $cislo <=20; $cislo++) {
 $poleCisel[] = rand(0,69);
}
var_dump($poleCisel); 

echo "<table border = 1px>";
foreach ($poleCisel as $polomer) {
  $obvod = $polomer * 2 * pi();
  echo "<tr>
    <td>$polomer</td>
    <td>$obvod</td>
      </tr>";
}
echo "</table>";



?>
</body>
</html>
