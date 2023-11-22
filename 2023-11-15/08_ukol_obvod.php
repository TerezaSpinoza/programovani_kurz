<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol Obvody</title>
</head>
<h1>Ukol obvody</h1>
<body>
<?php
//obvod 2píer
$polomer = rand(1, 100);
$obvod = $polomer * 2 * pi();
  echo round($obvod, 1);
?>
</body>
</html>
