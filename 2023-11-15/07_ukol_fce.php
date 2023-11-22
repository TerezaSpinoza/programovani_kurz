<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol fce</title>
</head>
<h1>Ukol fce</h1>
<body>
<?php
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nam similique dolorum quibusdam consectetur sint alias laborum reprehenderit nulla. Ab non explicabo iure modi ea quae aliquid soluta, praesentium exercitationem!locale filter matches.";

$pocetSlov = explode(" ", $text);

echo count($pocetSlov);
echo "<br>";
echo $pocetSlov[count($pocetSlov)-1];
//ještě chci odstranit tečku:
//echo str_replace(".", "", $pocetSlov); tady mi chybí nějaká proměnná doprdele

?>
</body>
</html>
