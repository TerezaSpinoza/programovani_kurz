<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Textove operatory</title>
</head>


<body>
  <h1>Textove operatory</h1>
  <?php
//.= přilepování dalších textu (podobně jako += u přidání 6 ke skoru)
$veta = "";
$veta .= "Dneska ";
$veta .= " je";
$veta .= " ";
$veta .= "pondeli";
$veta .= ".";
echo $veta;

// operátor + se používá pro sčítání čísel. Pokud to použijeme pro sčítání stringů, PHP se to pokusí převést na čísla
echo ("5"+"8");
echo "<br>";
echo "5 + 7"; //"5 + 7"
echo "<br>";
//echo "5" + "housenka"; //chyba 
echo "<br>";
?>
  
</body>
</html>
