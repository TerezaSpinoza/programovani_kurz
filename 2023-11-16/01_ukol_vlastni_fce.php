<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teploty vlastni fce</title>
</head>
<body>
  <h1>Teploty vlastni fce</h1>
  <?php
function prevodCtoF ($argC) {
  $F = $argC * 1.8 + 32;
  return $F;
}
function prevodFtoC ($argF) {
  $C = ($argF -32) / 1.8;
  return $C;
}


  ?>
</body>
</html>
