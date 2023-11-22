<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escapování</title>
</head>
<body>
  <h1>Escapování</h1>

<?php
//všechny stringy jsou obalene " " 
// Tony je "skvely" kuchar.
//zpetne lomitko (backlash) rika, ze znak ktery nasleduje za nim, ma zmeneny vyznam
    echo "Tony je \"skvely\" kuchar.";
/*znaky, které mají druhý význam a jsou escapovatelné:
uvozovka ", apostrof ', backlash \, 
a ty méně důležité: dolar $, novy řádek n, tabulátor t,návrat vozíku r */
echo 'Tony je "skvely" kuchar.'; //tady jsme se vyhnuli escapování, protože jsme použili apostrofy místo uvozovek
?>
<h3>Ukol Escapování</h3>


<?php
echo "\"Hello <strong>world</strong>\"<br>";
echo "C:\\\\Documents\\zivotopis.doc<br>";
echo "<a href=\"https://mcdonalds.com\">McDonald's</a>";

?>

</body>
</html>
