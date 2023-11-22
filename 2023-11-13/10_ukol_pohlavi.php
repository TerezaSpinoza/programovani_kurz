<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol pohlavi</title>
</head>
<body>
<h1>Ukol pohlavi a vek</h1>  
<?php
$vek = rand(0,30);
$pohlavi = "pes";
$nahodnyIndex = rand(0,2);
if ($nahodnyIndex==0) {
  $pohlavi = "muž";
} else if ($nahodnyIndex ==1) {
  $pohlavi = "žena";
} else {
  $pohlavi = "unisex";
}
echo $pohlavi;
echo "<br>";
echo $vek;
echo "<br>";
if ($vek <18) {
  echo "Pro tebe tu nic nemáme, jdi do dětskýho!";
  } else {
  if ($pohlavi == "muž") {
      echo "Móda pro chlapy";
    } else if ($pohlavi == "žena") {
      echo "Móda pro ženksý";
    } else {
      echo "Unisex móda";
    }
  }


?>
</body>
</html>
