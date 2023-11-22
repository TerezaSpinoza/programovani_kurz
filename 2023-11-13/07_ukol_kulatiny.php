<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kulatiny</title>
</head>
<body>
<h1>Kulatiny</h1>
<?php

//je vám xy a do kulatin zbývá zw let
$vek = rand(0,100);
$kulatiny = 10 - $vek % 10;
echo "Je Vám $vek a do příštích kulatin Vám zbývá $kulatiny let.";

?>
</body>
</html>
